<?php

namespace BorderForce\Drt\EntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class FlightType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $entityManager = $options['em'];
      $transformer = new DataTransformer\AirlineToIDTransformer($entityManager);
      
      $builder
        ->add('flightNumber')
        ->add('origin')
        ->add('scheduledDate', 'datetime', array('input' => 'datetime', 'widget' => 'single_text', 'date_format' => 'dd-MM-yyyy hh:ii:ss'))
        ->add('touchdownEstimated', 'datetime', array('input' => 'datetime', 'widget' => 'single_text', 'date_format' => 'dd-MM-yyyy hh:ii:ss'))
        ->add('touchdown', 'datetime', array('input' => 'datetime', 'widget' => 'single_text', 'date_format' => 'dd-MM-yyyy hh:ii:ss'))
        ->add('choxEstimated', 'datetime', array('input' => 'datetime', 'widget' => 'single_text', 'date_format' => 'dd-MM-yyyy hh:ii:ss'))
        ->add('chox', 'datetime', array('input' => 'datetime', 'widget' => 'single_text', 'date_format' => 'dd-MM-yyyy hh:ii:ss'))
        ->add('passengers')
        ->add('airline'
//          $builder->create('airline', 'text', array())->addModelTransformer($transformer)
          )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'BorderForce\Drt\EntityBundle\Entity\Flight',
        'csrf_protection' => false
      ))
      ->setRequired(array(
        'em',
      ))
      ->setAllowedTypes(array(
        'em' => 'Doctrine\Common\Persistence\ObjectManager',
      ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
