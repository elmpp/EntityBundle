<?php
namespace BorderForce\Drt\EntityBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Acme\TaskBundle\Form\DataTransformer\IssueToNumberTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use JMS\Serializer\Serializer;
use BorderForce\Drt\EntityBundle\Form\DataTransformer\EntityToIDTransformer;

class NestedCascadeCreateEntityType extends AbstractType
{
    /**
     * @var ObjectManager
     */
    private $om;
    
    /**
     * @var Serializer
     */
    private $serializer;
    

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om, Serializer $serializer) {
        $this->om         = $om;
        $this->serializer = $serializer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $transformer = new EntityToIDTransformer($this->om, $this->serializer, $options['fqcn'], $options['form']);
        $builder->addModelTransformer($transformer);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'invalid_message' => 'The selected entity does not exist',
            'fqcn' => false,
            'om' => false,
            'serializer' => false,
            'form' => false,
        ));
        
    }

    public function getParent() {
        return 'text';
    }

    public function getName() {
        return 'nested_cascade_create_entity';
    }
}