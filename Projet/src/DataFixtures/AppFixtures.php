<?php

namespace App\DataFixtures;

use App\Entity\Album;
use App\Entity\Groupe;
use App\Entity\Musique;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /*
         * MUSIQUE
         */
        $titreMusique = array('Back In Black', 'T.N.T', 'And I Love Her', 'Twist And Shout', 'Brothers In Arms', 'Love Over Gold', 'L\'Aventurier', 'Le Baiser', 'Fear Of The Dark', 'Killers', 'Almost Human', 'Sweet Pain', 'Lost', 'Trash', 'Blew', 'Come As You Are', 'Killer Queen', 'Sweet Lady');
        $musiqueChemin = array('ACDC-Back-in-black.mp3', 'ACDC-T.N.T.mp3', 'Beatles-And-I-Love-Her.mp3', 'Beatles-Twist-And-Shout.mp3', 'Dire-Straits-Brothers-In-Arms.mp3', 'Dire-Straits-Love-Over-Gold.mp3', 'Indochine-aventurier.mp3', 'Indochine-Le-baiser.mp3', 'Iron-maiden-fear-of-the-dark.mp3', 'Iron-Maiden-Killer.mp3', 'Kiss-Almost-Human.mp3', 'Kiss-Destroyer-Sweet-Pain.mp3', 'KORN-Lost.mp3', 'KORN-Trash.mp3', 'Nirvana-Blew.mp3', 'Nirvana-Come-As-You-Are.mp3', 'Queen-Killer-Queen.mp3', 'Queen-Sweet-Lady.mp3');

        /*
         *ALBUM
         */
        $titreAlbum = array('T.N.T', 'Back in Black', 'Bleach', 'Nervermind', 'Life Is Peachy', 'Issues', 'L Aventurier', 'Le Baiser', 'A Night at the Opera', 'Sheer Heart Attack', 'Twist and Shout', 'Something New', 'Destroyer', 'Love Gun', 'Killers', 'Fear of the Dark', 'Love over Gold', 'Brothers in Arms');
        $prix = array();

        //Generation aleatoire des prix
        for ($i = 0; $i < count($titreAlbum); $i += 1)
            $prix[] = rand(5, 18)*100;
        $imageAlbum = array('tnt.jpg', 'ACDC-BackInBlack-Front.jpg', 'bleach.jpg', 'copertina-nevermind-nirvana.webp', 'Life Is Peachy.jpg', 'korn_issues.jpg', 'aventurier.jpg', 'le baiser.jpg', 'A_Night_at_the_Opera.jpg', 'Sheer Heart Attack.jpg', 'Twist_and_Shout.jpg', 'Something_New.jpg', 'destroyer.jpg', 'love gun.jpg', 'Iron-Maiden-Killers.jpg', 'album_iron_maiden_fear_of_the_dark.jpg', 'Love over Gold.jpg', 'BrothersDireStraits.png');


        /*
         * Groupe
         */
        $nom = array('AC/DC', 'Nirvana', 'Korn', 'Indochine', 'Queen', 'The Beatles', 'Kiss', 'Iron Maiden', 'Dire Straits');
        $nbrMembre = array(5, 4, 5, 5, 5, 4, 4, 6, 4);
        $genre = array('Hard Rock', 'Grunge', 'Nu Metal', 'Pop Rock', 'Rock', 'Rock', 'Glam Rock', 'Heavy Metal', 'Blues Rock');
        $image = array('F4SDAe.webp', 'nirvana-logo-clipart-7.jpg', 'Korn_Logo_Black.svg.png', '08a2fc63a41b40c7d014c79db154ffe9--indochine.jpg', 'Queen1.png', 'the_beatles_vector_logo_by_dutchlion-d5ovg0i.jpg', 'iphone4-Kiss-Logo.jpg', 'iron-maiden-logo.jpg', 'abab3424128727a422de1c22d4a19227.jpg');


        //Tab pour récupérer les objets
        $tabAlbum = array();
        $tabGroupe = array();

        //ajout des groupes
        $i = 0;
        foreach ($nom as $n) :
            $groupe = new Groupe();
            $groupe->setNom($n);
            $groupe->setNombreMembre($nbrMembre[$i]);
            $groupe->setGenre($genre[$i]);
            $groupe->setCheminLogo($image[$i]);
            $tabGroupe[] = $groupe;
            $manager->persist($groupe);
            $i += 1;
        endforeach;

        //ajouts des albums
        $i = 0;
        $j = 0;
        foreach ($titreAlbum as $tAlbum) :
            $album = new Album();
            $album->setTitre($tAlbum);
            $album->setPrix($prix[$i]);
            $album->setCheminImage($imageAlbum[$i]);
            $album->setGroupe($tabGroupe[$j]);
            $tabAlbum[] = $album;
            $manager->persist($album);
            $i += 1;
            if ($i % 2 == 0)
                $j += 1;
        endforeach;

        //ajouts des chansons
        $i = 0;
        foreach ($titreMusique as $tm):
            $musique = new Musique($tm);
            $musique->setCheminMusique($musiqueChemin[$i]);
            $musique->setAlbum($tabAlbum[$i]);
            $manager->persist($musique);
            $i += 1;
        endforeach;


        /*
         * USER
         */
        $email = array("user@user", "admin@admin", "superAdmin@superAdmin");
        $role = array([], ["ROLE_USER", "ROLE_ADMIN"], ["ROLE_USER", "ROLE_SUPER_ADMIN"]);
        $password = array("\$argon2id\$v=19\$m=65536,t=4,p=1\$d1cxeWltODB6d01Sby9TRg\$g4uxv1OWUzKm+KsOdnBPnlHWwHqHWXEGa1maidY0fiY", "\$argon2id\$v=19\$m=65536,t=4,p=1\$MDhPakhmUXdHa2c1NWJ2Ug\$DhlqUBRg/2NXMeeqhqHSnnRfx0eAxx6fSeZKYMRha24", "\$argon2id\$v=19\$m=65536,t=4,p=1\$eGRiNkRUa0QySHhKQWgzaA\$A4XJoRP22AbaI4Qfr4UHtp4TkQ4OiUCFt0L+sYAahf4");
        $nom = array("user", "admin", "super_admin");
        $prenom = array("user", "admin", "super_admin");

        //ajout des utilisateurs
        $i = 0;
        foreach ($email as $mail):
            $user = new User();
            $user->setEmail($mail);
            $user->setRoles($role[$i]);
            $user->setPassword($password[$i]);
            $user->setPrenom($prenom[$i]);
            $user->setNom(($nom[$i]));

            $manager->persist($user);
            $i += 1;
        endforeach;

        $manager->flush();
    }
}