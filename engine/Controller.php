<?php

namespace Engine;

abstract class Controller
{
    /**
     * @var DI
     */
    protected $di;

    /**
     * @var View
     */
    protected $view;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Auth
     */
    protected $auth;

    public function __construct($di)
    {
        $this->di      = $di;
        $this->view    = $this->di->get('view');
        $this->request = $this->di->get('request');
        $this->auth    = $this->di->get('auth');
    }
}