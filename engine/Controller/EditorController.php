<?php

namespace Engine\Controller;

use Engine\Controller;

class EditorController extends Controller
{
    public function index()
    {
        $this->view->render('dashboard/editor');
    }

    public function upload()
    {

    }
}