<?php

$this->router->add('login','/login','LoginController:index');
$this->router->add('create', '/login/create', 'LoginController:createUser', 'POST');
$this->router->add('dashboard', '/dashboard', 'DashboardController:index');
$this->router->add('dashboard-editor', '/dashboard/editor', 'EditorController:index');
$this->router->add('dashboard-editor__uploads', '/dashboard/editor', 'EditorController:upload', 'POST');