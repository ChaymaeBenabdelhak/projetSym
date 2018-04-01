<?php

namespace secretaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('secretaireBundle:Default:index.html.twig');
    }
}
