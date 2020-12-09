<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/dashboard/category/{id}", name="category", methods={"GET", "POST", "DELETE", "PUT"})
     */
    public function index(int $id = null, Request $request)
    {
        $manager = $this->getDoctrine()->getManager();
        date_default_timezone_set("Europe/Paris");

        $userSettings = $this->forward("App\Controller\SettingsController::resolveSettings", [
            "settings" => $manager->getRepository(User::class)->findOneBy(["Username" => $this->getUser()->getUsername()])->getSettings()[0]->getSettings()
        ]);

        $userSettings = json_decode($userSettings->getContent(), true);

        if ($id != 0) $category = $manager->getRepository(Category::class)->find($id);
        else $category = $manager->getRepository(Category::class)->findOneBy(["Parent" => NULL]);
        $tempCat = $category;

        $parent = "";
        $url = array();
        array_push($url, $category);

        while (!is_null($parent)) {
            $parent = $tempCat->getParent();
            if ($parent != NULL) {
                array_push($url, $parent);
                $tempCat = $parent;
            }
        }

        $url = array_reverse($url);

        if ($request->getMethod() == "GET") {
            return $this->render("dashboard/category/index.html.twig", [
                "userSettings" => $userSettings,
                "path" => $url,
                "category" => $category
            ]);
        } elseif ($request->getMethod() == "POST") {
            $cat = new Category();
            $cat->setName($_POST["Name"])
                ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")))
                ->setVisibility(true)
                ->setParent($category);

            if ($_POST["Sumup"] == "") {
                $cat->setSumup(NULL);
            } else {
                $cat->setSumup($_POST["Sumup"]);
            }

            $manager->persist($cat);
            $manager->flush();

            $this->addFlash("CATEGORY", "La catégorie nommée <strong>" . $cat->getName() . "</strong> a été créée avec succès !");

            return $this->redirectToRoute("category", ["id" => $id]);
        } elseif ($request->getMethod() == "DELETE") {
            $cat = $manager->getRepository(Category::class)->find(intval($_POST["actualCategory"]));

            $this->addFlash("CATEGORY", "La catégorie nommée <strong>" . $cat->getName() . "</strong> a été supprimée avec succès !");

            $manager->remove($cat);
            $manager->flush();

            return $this->redirectToRoute("category", ["id" => $id]);
        } elseif ($request->getMethod() == "PUT") {
            $category->setName($_POST["Name"])
                ->setParent($manager->getRepository(Category::class)->find(intval($_POST["Parent"])))
                ->setDate(\DateTime::createFromFormat("Y-m-d", date("Y-m-d")));

            if ($_POST["Sumup"] == "") {
                $category->setSumup(NULL);
            } else {
                $category->setSumup($_POST["Sumup"]);
            }

            $manager->flush();

            $this->addFlash("CATEGORY", "La catégorie nommée <strong>" . $category->getName() . "</strong> a été modifiée avec succès !");

            return $this->redirectToRoute("category", ["id" => $id]);
        }
    }
}
