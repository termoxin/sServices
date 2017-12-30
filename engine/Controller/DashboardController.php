<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.2017
 * Time: 15:30
 */

namespace Engine\Controller;

use Engine\Controller;
use Engine\Helper\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        if($this->auth->authorized()) {
        	$this->view->render('dashboard/dashboard_main');
        } else {
            Redirect::url('/login');
        }
    }
}