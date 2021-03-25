<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\MailingList;
use App\Entity\Settings;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        mb_internal_encoding("UTF-8");

        $userEntity = array();

        $userList = array(
            0 => array(
                "Firstname" => "Romain",
                "Lastname" => "MUNIER",
                "Username" => "romainmunier"
            ),
            1 => array(
                "Firstname" => "Marion",
                "Lastname" => "DUBAIL",
                "Username" => "mariondubail"
            ),
            2 => array(
                "Firstname" => "Anthony",
                "Lastname" => "GOUAT",
                "Username" => "anthonygouat"
            ),
            3 => array(
                "Firstname" => "Quentin",
                "Lastname" => "TATTO",
                "Username" => "quentintatto"
            ),
            4 => array(
                "Firstname" => "Alexis",
                "Lastname" => "PY",
                "Username" => "alexispy"
            ),
            5 => array(
                "Firstname" => "Stéphane",
                "Lastname" => "DOMAS",
                "Username" => "stephanedomas"
            )
        );

        foreach ($userList as $key => $u) {
            $user = new User();
            $user->setUsername($u["Username"])
                ->setPassword("toor")
                ->setRoles(["ROLE_DEVELOPERS"])
                ->setFirstname(ucfirst($u["Firstname"]))
                ->setLastname(strtoupper($u["Lastname"]));

            $encoded = $this->encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);

            $manager->persist($user);

            array_push($userEntity, $user);

            $setting = new Settings();
            $setting->setUser($user)
                ->setSettings(["Theme" => "light", "Medieval" => false]);

            $manager->persist($setting);

            echo "Nouvel utilisateur : " . $user->getFirstname() . " " . $user->getLastname() . "\n";

            $manager->flush();
        }

        echo "Nombre d'utilisateurs : " . count($userList) ." \n\n";

//        $createrandom = readline("Créer des comptes aléatoires ? [Yes/no]\n> ");
        $createrandom = "y";
        if (strpos(strtolower(strval($createrandom)), "y") !== false) {
//            $count = readline("Nombre de comptes aléatoires : [0-10 000]\n> ");
            $count = 100;
            if (is_numeric(intval($count))) {
                for($i=0; $i<intval($count); $i++) {
                    $user = new User();
                    $user->setFirstname("Utilisateur")
                        ->setLastname(strval($i))
                        ->setUsername("user" . $i)
                        ->setPassword($i)
                        ->setPseudo($i)
                        ->setRoles(["ROLE_USER"]);

                    $encoded = $this->encoder->encodePassword($user, $user->getPassword());
                    $user->setPassword($encoded);

                    $manager->persist($user);

                    array_push($userEntity, $user);

                    $setting = new Settings();
                    $setting->setUser($user)
                        ->setSettings(["Theme" => "light", "Medieval" => false]);

                    $manager->persist($setting);
                    $manager->flush();

                    echo "New random user : User " . $i . "\n";
                }
            }
        }

        $category = new Category();
        $category->setName("Catégorie initiale")
            ->setParent(null)
            ->setSumup("Catégorie initiale")
            ->setDate(DateTime::createFromFormat("Y-m-d", "2020-01-01"))
            ->setVisibility(true);

        $manager->persist($category);
        $manager->flush();

//        $createrandom = readline("Créer des listes de diffusion aléatoire ? [Yes/no]\n> ");
        $createrandom = "y";
        if (strpos(strtolower(strval($createrandom)), "y") !== false) {
//            $count = readline("Nombre de listes : [0-10 000]\n> ");
//            $cntByList = readline("Nombre de comptes max par liste : [0-10 000]\n> ");
            
            $count = 100;
            $cntByList = 50;
            
            if (is_numeric(intval($count))) {
                for($i=0; $i<intval($count); $i++) {
                    if (is_numeric($cntByList)) {
                        $usrIds = array();
                        for($j=0; $j<mt_rand(1,intval($cntByList)); $j++) {
                            $key = array_rand($userEntity, 1);
                            array_push($usrIds, $userEntity[$key]->getId());
                            echo "Nouvel utilisateur dans la liste " . $i . " : " . $userEntity[$key]->getFirstname() . " " . $userEntity[$key]->getLastname() . "\n";
                        }

                        $type = ["HYBRID", "MAIL", "PHONE"];

                        $mailing = new MailingList();
                        $mailing->setName("Liste n°" . $i)
                            ->setSumup("Sumup de la liste " . $i)
                            ->setType($type[array_rand($type, 1)])
                            ->setDate(DateTime::createFromFormat("Y-m-d", "2020-01-01"))
                            ->setList($usrIds);

                        $manager->persist($mailing);

                        echo "New random mailing list : List " . $i . "\n\n";

                        $manager->flush();
                    }
                }
            }
        }
    }
}
