<?php 

namespace Engine\Model;
use Engine\Model;

class Login extends Model
{
	public function getUsers() {
		$users = $this->db->query("SELECT * FROM user");

		return $users;
	}

	public function existsUser($name, $password) {
	    $user = $this->db->query("SELECT * FROM user WHERE name=? AND password=?", [$name, $password]);

	    return $user;
    }

	public function newUser($name, $password) {
		$users = self::getUsers();

		for($i = 0; $i < count($users); $i++) {
			if($users[$i]['name'] === $name) {
				return false;
			} else {
				$this->db->execute("INSERT INTO user (name, password) VALUES (?,?)", [$name,$password]);
				return true;
			}
		}
	}
}