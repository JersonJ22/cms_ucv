<?php
	require '../../config/conexion.php';

	class Admin_Actions{

		public function login_admin($username_email, $pass){
			global $database;

			$data = $database->select("admin", [				
				"password_admin"
			],[
				"OR" => [
					"username_admin" => $username_email,
					"email_admin"=> $username_email
				]
			]);

			//return $data;
			$password_db = $data[0]["password"];
			//var_dump($password_db);
			//echo $password_db;

			//$hash = password_hash($password_db, PASSWORD_DEFAULT);

			/*if(password_verify($pass, $password_db)) {
				return true;				
			}else{
				return false;
			}*/
			if($pass == $password_db) {
				return true;				
			}else{
				return false;
			}
		}
	}	
?>