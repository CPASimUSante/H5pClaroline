<?php

namespace CPASimUSante\H5pClarolineBundle\Form;

use Claroline\CoreBundle\Repository\ResourceNodeRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class H5pType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CPASimUSante\H5pClarolineBundle\Entity\H5p'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cpasimusante_h5pclaroline_h5p';
    }
}
