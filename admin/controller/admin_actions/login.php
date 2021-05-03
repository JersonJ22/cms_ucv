<?php
	//echo $_POST['email'];
	require '../../repository/admin_repo.php';

	$admin = new Admin_Actions();

	//Login
	$login = $admin->login_admin($_POST['email'], $_POST['pass']);
	

	//echo print_r($login); //cuando es array
	//echo $login;

	if ($login) {
		//Iniciar Sesion
		$_SESSION['admin'] = $_POST['email'];
		echo "true";
	}else{
		echo "false";
	}

	$post = $admin->registrar_admin($_)
?>