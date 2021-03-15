<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        /*
         *ALBUM
         */
        $titreAlbum = array('T.N.T', 'Back in Black', 'Bleach', 'Nervermind', 'Life Is Peachy', 'Issues', 'L Aventurier', 'Le Baiser', 'A Night at the Opera', 'Sheer Heart Attack', 'Twist and Shout', 'Something New', 'Destroyer', 'Love Gun', 'Killers', 'Fear of the Dark', 'Love over Gold', 'Brothers in Arms');
        $prix = array();

        //Generation aleatoire des prix
        for ($i = 0; $i < 18; $i += 1)
            $prix[] = rand(5, 18);
        $image = array('tnt.jpg', 'ACDC-BackInBlack-Front.jpg', 'bleach.jpg', 'copertina-nevermind-nirvana.webp', 'Life Is Peachy.jpg', 'korn_issues.jpg', 'aventurier.jpg', 'le baiser.jpg', 'A_Night_at_the_Opera.jpg', 'Sheer Heart Attack.jpg', 'Twist_and_Shout.jpg', 'Something_New.jpg', 'destroyer.jpg', 'love gun.jpg', 'Iron-Maiden-Killers.jpg', 'album_iron_maiden_fear_of_the_dark.jpg', 'Love over Gold.jpg', 'BrothersDireStraits.png');

        tab


        /*
         * Groupe
         */
        $nom = array('AC/DC', 'Nirvana', 'Korn', 'Indochine', 'Queen', 'The Beatles', 'Kiss', 'Iron Maiden', 'Dire Straits');
        $nbrMembre = array(5, 4, 5, 5, 5, 4, 4, 6, 4);
        $genre = array('Hard Rock', 'Grunge', 'Nu Metal', 'Pop Rock', 'Rock', 'Rock', 'Glam Rock', 'Heavy Metal', 'Blues Rock');
        $image = array('F4SDAe.webp', 'nirvana-logo-clipart-7.jpg', 'Korn_Logo_Black.svg.png', '08a2fc63a41b40c7d014c79db154ffe9--indochine.jpg', 'Queen1.png', 'the_beatles_vector_logo_by_dutchlion-d5ovg0i.jpg', 'iphone4-Kiss-Logo.jpg', 'iron-maiden-logo.jpg', 'abab3424128727a422de1c22d4a19227.jpg');


        $manager->flush();
    }

    public function chargementMusique()
    {
        $titre = array();
        $musique = array();

        return [$titre, $musique];
    }

    public function chargementAlbum()
    {
        return array($titre, $prix, $image);
    }


}


