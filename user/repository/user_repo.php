<?php
	require '../../config/conexion.php';

	class User_Actions{		
		public function login_user($user_name, $pass){				
			global $database;	

			$data = $database->select("usuarios", [
				"password_users"
			],[
				"OR" => [
					"username_users" => $user_name,
					"email_users" => $user_name
				]
			]);

			$password_db = $data[0]["password"];

			//if (password_verify($pass, $password_db)) {
			if ($pass == $password_db) {
				return true;
			}else{
				return false;
			}
		}
	}

	public function register_user($name, $last_name, $user_name, $email, $pass){			
			global $database;

			if ($this->checkExistance($user_name, $email) == 0) {
				$register = $database->insert("usuarios", [
					"name_users" => htmlentities($name), 
					"lastname_users" => htmlentities($last_name),
					"username_users" => htmlentities($user_name),				
					"email_users" => htmlentities($email),
					"password_users" => password_hash($pass, PASSWORD_BCRYPT),
					"createdat_users" => time()
				]);

				return $database->id();
			}else{
				return false;
			}

		}
?>