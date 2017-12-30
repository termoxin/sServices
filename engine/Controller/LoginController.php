<?php

namespace Engine\Controller;

use Engine\Controller;
use Engine\Helper\Common;
use Engine\Model\Login;

class LoginController extends Controller
{

    public function index()
    {
    	$model = new Login($this->di);
    	$users = $model->getUsers();

        if($this->request->get('name_l')) {
            $name = $this->request->get('name_l');
            $password = $this->request->get('password_l');
            $user = $model->existsUser($name, $password);

            if($user) {
                $this->auth->authorize($user['id'], $name);
                header('Location: /dashboard');
            }
        }
    	if(Common::isAjax()) {
    		echo json_encode($users);
    	} else {
    		$this->view->render('login/login');
    	}
    }

    public function createUser() {
    	$model = new Login($this->di);

    	$name = $this->request->post('name');
    	$password = $this->request->post('password');

    	$model->newUser($name, $password);
        
    }	
}