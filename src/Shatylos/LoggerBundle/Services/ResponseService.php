<?php

namespace Shatylos\LoggerBundle\Services;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ResponseService
 * @package Shatylos\LoggerBundle\Services
 */
class ResponseService
{
    /**
     * @param bool $status
     * @param null $data
     * @return Response
     */
    public function jsonResponse($status = false, $data = null)
    {
        $response = array(
            'status' => $status,
            'data' => $data,
        );
        return new Response(json_encode($response));
    }

}
