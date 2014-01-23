<?php

namespace BorderForce\Drt\EntityBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use BorderForce\Drt\EntityBundle\Entity\Flight;
//use Symfony\Component\DependencyInjection\ContainerInterface;
//use JMS\Serializer\Serializer;

class AirlineToIDTransformer implements DataTransformerInterface
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

    /**
     * @param ObjectManager $om
     */
    public function __construct(\Doctrine\Common\Persistence\ObjectManager $em, \JMS\Serializer\Serializer $serializer, $fqcn)
    {
        $this->em   = $em;
        $this->serializer   = $serializer;
        $this->fqcn      = $fqcn;
    }

    /**
     * Transforms an object (airline) to a string (number).
     *
     * @param  Issue|null $airline
     * @return string
     */
    public function transform($airline)
    {
        if (null === $airline) {
            return "";
        }

        return $airline->getId();
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
      
      
//      $airline = $this->serializer->deserialize($data, $this->fqcn, 'array');
      if (count($data)) {
        if (isset($data['id'])) {
          $airline = $this->em->getRepository('BorderForceDrtEntityBundle:Airline')->find($data['id']);

          if (!$airline) {
            throw new TransformationFailedException(sprintf(
              'An airline with ID "%d" does not exist!',
              $data['id']
            ));
          }
          return $airline;
        }
        
        
      }
      

//        $query = $this->om->createQuery(
//          'select a from BorderForceDrtEntityBundle:Airline a
//           where a.id = :numberOrName or a.name = :numberOrName')
//          ->setParameter('numberOrName', $numberOrName);
//        try {
//          $airline = $query->getSingleResult();
//        } 
//        catch (\Doctrine\Orm\NoResultException $e) {
//          throw new TransformationFailedException(sprintf(
//            'An airline with ID or name "%s" does not exist!',
//            $numberOrName
//          ));
//        }
//
//        return $airline;
    }

}