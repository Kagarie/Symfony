<?php

namespace App\Controller\Admin;

use App\Entity\Musique;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MusiqueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Musique::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            AssociationField::new('album'),
            ImageField::new('cheminMusique')
                ->setBasePath('musiques')
                ->setUploadDir('public/musiques/')
                ->setUploadedFileNamePattern("[name] . [extension]")
                ->setRequired(false),
        ];
    }

}
