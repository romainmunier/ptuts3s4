<?php

namespace App\DataFixtures;

use App\Entity\Settings;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        mb_internal_encoding("UTF-8");

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

            $setting = new Settings();
            $setting->setUser($user)
                ->setSettings(["Theme" => "light", "Medieval" => false]);

            $manager->persist($setting);

            echo "Nouvel utilisateur : " . $user->getFirstname() . " " . $user->getLastname() . "\n";

            $manager->flush();
        }

        echo "Nombre d'utilisateurs : " . count($userList) ." \n\n";

        $createrandom = readline("Créer des comptes aléatoires ? [Yes/no]\n> ");
        if (strpos(strtolower(strval($createrandom)), "y") !== false) {
            $count = readline("Nombre de comptes aléatoires : [0-10 000]\n> ");
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

                    $setting = new Settings();
                    $setting->setUser($user)
                        ->setSettings(["Theme" => "light", "Medieval" => false]);

                    $manager->persist($setting);
                    $manager->flush();

                    echo "New random user : User " . $i . "\n";
                }
            }
        }


    }
}
