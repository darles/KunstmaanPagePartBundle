<?php

namespace Kunstmaan\PagePartBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * class to define the form to upload a picture
 *
 */
class RawHTMLPagePartAdminType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array('required' => false, 'attr' => array( "style"=> "width: 600px",'rows'=>32 )))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Kunstmaan\PagePartBundle\Entity\RawHTMLPagePart',
        );
    }

    public function getName()
    {
        return 'kunstmaan_pagepartbundle_rawhtmlpageparttype';
    }
}

?>