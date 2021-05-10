<?php

namespace App\Controller\Admin;

use App\Entity\Album;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AlbumCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Album::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            MoneyField::new('prix')->setCurrency('EUR'),
            ImageField::new('cheminImage')
                ->setBasePath('images')
                ->setUploadDir('public/images/album')
                ->setUploadedFileNamePattern("[name] . [extension]")
                ->setRequired(false),
            AssociationField::new('groupe'),
          DateField::new('date')

        ];
    }

}
