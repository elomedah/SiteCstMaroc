<?php

namespace cestom\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('cestomsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
