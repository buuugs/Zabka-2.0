<?php

require_once SITE_ROOT . '/application/models/usersmodel.php';
require_once 'session.php';

class UserController extends Users {

	public function createUserSession($user) {
		Session::set("login", true);
		Session::set("uid", (int) $user->uid);
		Session::set("username", $user->username);
		Session::set("admin", (int) $user->admin);
	}


	public function logoutUser() {

		session_unset();
		$_SESSION = array();
		session_destroy();

	}

	public function loginUser($data) {

		$username = trim($data['username']);
		$password = $data['password'];
		$userError = $passError = "";

		if (empty($username)) {

			echo '<script>alert("Wpisz nazwę użytkownika.")</script>';

		}

		
		if (empty($password)) {

			echo '<script>alert("Wpisz hasło.")</script>';

		}

		
		if (empty($userError) && empty($passError)) {

			$result = $this->login($username, $password);

			if ($result) {

				
				$this->createUserSession($result);
				Util::redirect('index/');

			} else {

				echo '<script>alert("Nazwa użytkownika lub hasło jest nieprawidłowe.")</script>';

			}

		}

	}
	
}
