<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Cockpit Configuration
 *
 * Configuration for Cockpit CMS API integration
 *
 * @package Config
 */
class Cockpit extends BaseConfig
{
    /**
     * Cockpit API base URL
     *
     * @var string
     */
    public $apiUrl = 'https://cms.bimats.com/:eurostyle';

    /**
     * Cockpit API token
     *
     * @var string
     */
    public $apiToken = 'USR-16c361b6127b4181dd38e9ae6975db4a4fa4dc01';

    /**
     * Default cache TTL for Cockpit data (in seconds)
     *
     * @var int
     */
    public $cacheTTL = 0; // 1 hour

    /**
     * HTTP timeout for API requests (in seconds)
     *
     * @var int
     */
    public $timeout = 30;
}
