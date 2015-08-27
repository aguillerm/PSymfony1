<?php

namespace AG\BetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AGBetBundle:Default:index.html.twig', array('name' => $name));
    }
}
