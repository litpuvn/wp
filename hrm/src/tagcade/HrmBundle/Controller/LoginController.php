<?php

namespace tagcade\HrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /**
     * Retrieve a JSON Web Token
     *
     * @RequestParam(name="username")
     * @RequestParam(name="password")
     *
     * @ApiDoc(
     * statusCodes={
     *  200 = "Successful login",
     *  401 = "Login failed"
     * })
     */
    public function getTokenAction()
    {
        // The security layer will intercept this request
        return new Response('', 401);
    }

    public function indexAction($name)
    {
        return $this->render('tagcadeHrmBundle:Default:index.html.twig', array('name' => $name));
    }
}
