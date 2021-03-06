<?php

namespace CVThequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdvertisementEditType extends AdvertisementType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }
    
    public function getParent()
    {
        return 'CVThequeBundle\Form\AdvertisementType';
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'CVThequeBundle\Entity\Advertisement'
        ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cvtheque_advertisement_edit';
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'cvtheque_article';
    }
}