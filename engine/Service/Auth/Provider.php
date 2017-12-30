<?php

namespace Engine\Service\Auth;

use Engine\Core\Auth\Auth;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'auth';

    /**
     * Init service
     */
    public function init()
    {
        $auth = new Auth();

        $this->di->set($this->serviceName, $auth);
    }

}