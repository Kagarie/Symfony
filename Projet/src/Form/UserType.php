<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Email'), 'label' => false))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('attr' => array('placeholder' => 'Mot de passe'), 'label' => false),
                'second_options' => array('attr' => array('placeholder' => 'Retaper le mot de passe'), 'label' => false),
            ))
            ->add('nom', TextType::class, array('attr' => array('placeholder' => 'Nom'), 'label' => false))
            ->add('prenom', TextType::class, array('attr' => array('placeholder' => 'Prenom'), 'label' => false));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
