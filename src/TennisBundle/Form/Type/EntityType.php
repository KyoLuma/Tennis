<?php

namespace TennisBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// ...

$builder->add('zipCode', EntityType::class, array(
// query choices from this entity
    'class' => 'TennisBundle:User',

// use the User.username property as the visible option string
    'choice_label' => 'zip_code',

// used to render a select box, check boxes or radios
// 'multiple' => true,
// 'expanded' => true,
));