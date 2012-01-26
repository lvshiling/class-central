<?php

namespace ClassCentral\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CourseType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
            ->add('name')
            ->add('stream')               
        ;
       
      
    }

    public function getName() {
        return 'classcentral_sitebundle_coursetype';
    }
        
}
