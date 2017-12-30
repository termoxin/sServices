<?php

$this->router->add('login','/login','LoginController:index');
$this->router->add('create', '/login/create', 'LoginController:createUser', 'POST');
$this->router->add('dashboard', '/dashboard', 'DashboardController:index');