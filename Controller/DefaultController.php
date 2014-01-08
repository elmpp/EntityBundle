<?php

namespace BorderForce\Drt\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BorderForceDrtEntityBundle:Default:index.html.twig', array('name' => $name));
    }
}
