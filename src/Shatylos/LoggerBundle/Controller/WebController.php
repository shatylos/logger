<?php

namespace Shatylos\LoggerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class WebController
 * @package Shatylos\LoggerBundle\Controller
 */
class WebController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('ShatylosLoggerBundle:Web:index.html.twig', array('name' => $name));
    }

}
