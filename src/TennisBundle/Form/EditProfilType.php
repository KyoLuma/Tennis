<?php
namespace TennisBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use TennisBundle\Form;

class EditProfilType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder
            ->add('first_name')
            ->add('last_name')
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'female' => 'female',
                    'male' => 'male'
                )
            ))
            ->add('phone_number')
            ->add('profile_picture')
            ->add('town')
            ->add('zip_code')
            ->add('availabilities', CheckboxType::class, array(
                'required' => false,
            ))
            ->add('level', ChoiceType::class, array(
                    'choices' => array(
                        'beginner' => 'beginner',
                        'amateur' => 'amateur',
                        'intermediate' => 'intermediate',
                        'advanced' => 'advanced',
                        'expert' => 'expert'
                    )
            ))
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