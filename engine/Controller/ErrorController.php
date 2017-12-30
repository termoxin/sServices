<?php

namespace Engine\Controller;

use Engine\Controller;

class ErrorController extends Controller
{
    public function page404()
    {
        echo "<h1>Not Found</h1>";
    }
}