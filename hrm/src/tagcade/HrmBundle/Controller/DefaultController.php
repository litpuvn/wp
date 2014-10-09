<?php

namespace tagcade\HrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tagcadeHrmBundle:Default:index.html.twig', array('name' => $name));
    }
}
