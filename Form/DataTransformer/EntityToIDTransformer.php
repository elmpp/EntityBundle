<?php

namespace BorderForce\Drt\EntityBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use BorderForce\Drt\EntityBundle\Entity\Flight;
use BorderForce\Drt\EntityBundle\Util\Util;

class EntityToIDTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $em;
    
    /**
     * @var String
     */
    private $fqcn;
    
    private $serializer;
    private $form;

    /**
     * @param ObjectManager $om
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $em, \JMS\Serializer\Serializer $serializer, $fqcn, \Symfony\Component\Form\AbstractType $form)
    {
        $this->em         = $em;
        $this->serializer = $serializer;
        $this->fqcn       = $fqcn;
        $this->form       = $form;
    }

    /**
     * Transforms an object (airline) to a string (number).
     *
     * @param  Issue|null $entity
     * @return string
     */
    public function transform($entity)
    {
        if (null === $entity) {
            return "";
        }
        
        if (!is_object($entity)) { 
          return "";
        }

        return $entity->getId();
    }

    /**
     * Transforms a string (number) to an object (airline).
     *
     * @param  string $number
     *
     * @return Issue|null
     *
     * @throws TransformationFailedException if object (airline) is not found.
     */
    public function reverseTransform($data)
    {
      $className = Util::getClassNameFromFCQN($this->fqcn);
      
      if (count($data)) {
        if (isset($data['id'])) {
          $entity = $this->em->getRepository($this->fqcn)->find($data['id']);

          if (!$entity) {
            throw new TransformationFailedException(sprintf(
              'An %s with ID "%d" does not exist!',
              $className,
              $data['id']
            ));
          }
          return $entity;
        }
        
        //going to create our own
        $entity = $this->serializer->deserialize(json_encode($data), $this->fqcn, 'json');
//var_dump($this->form->getData()); die;
        $this->em->persist($entity);
        return $entity;
      }
      
      throw new TransformationFailedException(sprintf(
        'No data was supplied for %s',
        $className
      ));
    }

}