<?php
	require '../repository/admin_repo.php';

	//Con este objeto vamos a poder acceder a todo que tengamos en functions
	$admin = new Admin_Actions();

	if(
		isset($_SESSION['admin']) &&
		!isset($_GET['section']) 
	){
		//Obtener post
	}

?>