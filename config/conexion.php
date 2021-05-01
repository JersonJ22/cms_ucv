<?php
	session_start();
	require 'Medoo.php';

	use Medoo\Medoo;

	try {
		$database = new Medoo([
			// required
			'database_type' => 'mysql',
			'database_name' => 'cms_ucv',
			'server' => 'localhost',
			'username' => 'root',
			'password' => '', 
		]);
		
	} catch (PDOException $e) {
		echo "Nose pudo conectar a la base de datos";
	}
		
?>