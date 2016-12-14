<?php

namespace App\CrocworkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppCrocworkBundle:Default:index.html.twig');
    }
}
