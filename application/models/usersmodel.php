<?php

require_once SITE_ROOT . '/application/config/Database.php';

class Users extends Database {

	protected function usernameCheck($username) {
		
		$this->prepare('SELECT * FROM `users` WHERE `username` = ?');
		$this->statement->execute([$username]);

		if ($this->statement->rowCount() > 0) {

			return true;

		} else {

			return false; 

		}

	}



	protected function login($username, $password) {
		
		// fetch username
		$this->prepare("SELECT * FROM `users` WHERE username='$username'
		AND password='" . md5($password) . "'");
		$this->statement->execute();
		$row = $this->statement->fetch();
        
        if ($row == 1) {
			return $row;
		}
		else {

			return false;

		}
	


	}

}