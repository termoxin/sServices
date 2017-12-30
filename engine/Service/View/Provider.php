<?php

namespace Engine\Service\View;

use Engine\Core\View\View;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'view';

    /**
     * Init service
     */
    public function init()
    {
        $view = new View();

        $this->di->set($this->serviceName, $view);
    }

}