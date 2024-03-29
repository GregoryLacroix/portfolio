<?php

namespace App\Form;

use App\Entity\CustomSite;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CustomFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('navColor', ColorType::class, [
                'label' => 'Couleur de fond de la navigation'
            ])
            ->add('avatarColor', ColorType::class, [
                'label' => 'Couleur de fond avatar'
            ])
            ->add('skills', TextType::class, [
                'label' => 'Compétences'
            ])
            ->add('slogan', TextType::class, [
                'label' => 'Slogan'
            ])
            ->add('sloganFooter', TextType::class, [
                'label' => 'Slogan footer'
            ])
            ->add('linkFacebook', TextType::class, [
                'label' => 'Facebook'
            ])
            ->add('linkTwitter', TextType::class, [
                'label' => 'Twitter'
            ])
            ->add('linkLinkedin', TextType::class, [
                'label' => 'Linkedin'   
            ])
            ->add('titleAbout', TextType::class, [
                'label' => 'Titre à propos'   
            ])
            ->add('about', CKEditorType::class, [
                'label' => 'À propos de vous',
                'attr' => [
                    'rows' => 10
                ]
            ])
            ->add('location', CKEditorType::class, [
                'label' => 'Location',
                'attr' => [
                    'rows' => 10
                ]
            ])
            ->add('legaleNotice', CKEditorType::class, [
                'label' => 'Mentions légales',
                'attr' => [
                    'rows' => 10
                ]
            ])
            ->add('footerColor', ColorType::class, [
                'label' => 'Couleur de fond du pied de page'
            ])
            ->add('copyrightColor', ColorType::class, [
                'label' => 'Couleur de fond de la zone copyright'
            ])
            ->add('contentColor', ColorType::class, [
                'label' => 'Couleur de fond du contenu'
            ])
            ->add('hoverLinkColor', ColorType::class, [
                'label' => 'Couleur de fond hover link nav'
            ])
            ->add('logoFileVich', VichImageType::class, [ 
                'label' => 'Logo navigation',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
            ->add('photoFileVich', VichImageType::class, [ 
                'label' => 'Photo de profil',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
            ->add('avatar2FileVich', VichImageType::class, [ 
                'label' => 'Photo de profil 2',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
            ->add('cvFileVich', VichImageType::class, [ 
                'label' => 'Télécharger votre CV',
                'required' => false,
                'data_class' => null,
                // 'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CustomSite::class,
        ]);
    }
}
