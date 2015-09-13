<?php

namespace Shatylos\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/sign-out", methods="POST")
     * @ApiDoc()
     */
    public function signOutAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/choose-user", methods="POST")
     * @ApiDoc()
     */
    public function chooseUserAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

}
