<?php

namespace LL\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VariantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoryId', 'entity', [
                'class' => 'LLPlatformBundle:Category'])
            ->add('productId')
            ->add('createdAt', 'datetime', ['disabled' => true])
            ->add('updatedAt', 'datetime', ['disabled' => true])
            ->add('showFrom')
            ->add('showTo')
            ->add('specialPrice')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LL\PlatformBundle\Entity\Variant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'll_platformbundle_variant';
    }
}
