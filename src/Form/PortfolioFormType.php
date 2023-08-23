<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PortfolioFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Titre du site'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Description du site',
                    'rows' => 7
                ]
            ])
            ->add('url', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Adresse URL du site'
                ]
            ])
            ->add('screenshotFileVich', VichImageType::class, [ 
                'label' => 'Screenshot du site Web',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
            ->add('logoVich', VichImageType::class, [ 
                'label' => 'Logo WebSite',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
