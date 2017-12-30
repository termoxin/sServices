<?php

namespace Engine\Service\Database;

use Engine\Core\Database\Connection;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'db';

    /**
     * Init service
     */
    public function init()
    {
        $db = new Connection();

        $this->di->set($this->serviceName, $db);
    }

}