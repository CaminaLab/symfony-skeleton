<?php

/**
 * This file is part of the <nom del paquet> package.
 *
 * Drivania (c) All rights reserved.
 */

namespace App\Infrastructure\Logger;

use Monolog\Logger;
use Symfony\Component\HttpFoundation\RequestStack;

class RequestProcessor
{
    /** @var RequestStack */
    private $request;
    private $env;

    /**
     * @var string
     */
    private $projectName;

    /**
     * RequestProcessor constructor.
     * @param RequestStack $request
     * @param string $env
     * @param string $projectName
     */
    public function __construct(RequestStack $request, string $env, string $projectName)
    {
        $this->request = $request;
        $this->env = $env;
        $this->projectName = $projectName;
    }

    public function processRecord(array $record): array
    {
        // Only log extra data for NOTICE or greater
        if ($record['level'] < Logger::NOTICE) {
            return $record;
        }

        $request = $this->request->getCurrentRequest();
        if (!$request) {
            return $record;
        }

        $record['extra']['requestraw'] = (string) $request;
        $record['extra']['server']['SERVER_ADDR'] = $request->server->get('SERVER_ADDR');

        $host = $request->server->get('HTTP_HOST');

        if (!$host || preg_match('@^\d+\.\d+\.\d+\.\d+@', $host)) {
            $host = ('prod' !== $this->env ? $this->env . '-' : ''). $this->projectName . '.drivania.com';
        }

        $record['extra']['server']['HTTP_HOST'] = $host;

        return $record;
    }
}
