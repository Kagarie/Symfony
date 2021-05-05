<?php

namespace App\Controller\Admin;

use App\Entity\Groupe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GroupeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Groupe::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('nom'),
            IntegerField::new("nombreMembre"),
            TextField::new('genre'),
            ImageField::new('cheminLogo')
                ->setUploadDir('public/images/groupe_logo')
                ->setUploadedFileNamePattern("[name] . [extension]")
                ->setRequired(false),
        ];
    }

}
