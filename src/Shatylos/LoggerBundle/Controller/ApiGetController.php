<?php

namespace Shatylos\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/file-detail", methods="GET")
     * @ApiDoc()
     */
    public function getFileDetailAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/files-detail", methods="GET")
     * @ApiDoc()
     */
    public function getFilesDetailAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/users-list", methods="GET")
     * @ApiDoc()
     */
    public function getUsersListAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

    /**
     * @Route("/search", methods="GET")
     * @ApiDoc()
     */
    public function searchAction()
    {
        $data = array(
            // ...
        );
        return $this->get('shatylos_logger.response.service')->jsonResponse(true, $data);
    }

}
