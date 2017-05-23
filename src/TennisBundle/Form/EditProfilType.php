<?php
namespace TennisBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TennisBundle\Form;

class EditProfilType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('gender')
            ->add('phone_number')
            ->add('profile_picture')
            ->add('town')
            ->add('zip_code')
            ->add('description')
            ->add('favorite_player')
        ;
    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()

    {
        return 'fos_user_profile_edit';
    }


}