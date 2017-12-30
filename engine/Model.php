<?php

namespace Engine;

abstract class Model
{
    /**
     * @var Connection
     */
    protected $db;

    /**
     * @var DI
     */
    protected $di;

    /**
     * Model constructor.
     * @param DI $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->db = $this->di->get('db');
    }
}