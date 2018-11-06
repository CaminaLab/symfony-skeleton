<?php

declare(strict_types=1);

/**
 * This file is part of the <nom del paquet> package.
 *
 * Drivania (c) All rights reserved.
 */

namespace App\UI\Controller;

use Symfony\Component\HttpFoundation\Response;

class HealthController
{
    /**
     * Offers a 200 HTTP code to prove the service is still working.
     *
     * @return Response
     */
    public function health(): Response
    {
        $response = new Response();
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'text/html');

        return $response;
    }
}
