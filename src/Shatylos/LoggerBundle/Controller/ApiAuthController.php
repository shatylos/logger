<?php

namespace Shatylos\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class ApiAuthController
 * @package Shatylos\LoggerBundle\Controller
 */
class ApiAuthController extends Controller
{
    /**
     * @Route("/sign-in", methods="POST")
     * @ApiDoc(parameters={
     *     {"name"="login", "dataType"="string", "required"=true, "description"="login string"},
     *     {"name"="password", "dataType"="string", "required"=true, "description"="password string"},
     * })
     */
    public function signInAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/sign-out", methods="POST")
     * @ApiDoc()
     */
    public function signOutAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/choose-user", methods="POST")
     * @ApiDoc()
     */
    public function chooseUserAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

}
