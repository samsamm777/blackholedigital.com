<?php

namespace BHD\SplashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BHDSplashBundle:Default:index.html.twig');
    }
}
