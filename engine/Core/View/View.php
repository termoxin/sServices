<?php

namespace Engine\Core\View;

class View
{
    public function render($template, $variables = [])
    {
        $path = ENV . '/engine/View/' . $template . '.php';

        extract($variables);

        if(file_exists($path)) {
            require_once $path;
        } else {
            echo 'Template does not exist.';
            exit;
        }
    }
}