<?php

namespace Shatylos\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class ApiGetController
 * @package Shatylos\LoggerBundle\Controller
 */
class ApiGetController extends Controller
{
    /**
     * @Route("/file-list", methods="GET")
     * @ApiDoc()
     */
    public function getFileListAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/file-detail", methods="GET")
     * @ApiDoc()
     */
    public function getFileDetailAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/files-detail", methods="GET")
     * @ApiDoc()
     */
    public function getFilesDetailAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/users-list", methods="GET")
     * @ApiDoc()
     */
    public function getUsersListAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

    /**
     * @Route("/search", methods="GET")
     * @ApiDoc()
     */
    public function searchAction()
    {
        $response = array(
            // ...
        );
        return new Response(json_encode($response));
    }

}
