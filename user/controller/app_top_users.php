<?php
	require '../repository/user_repo.php';

	//Con este objeto vamos a poder acceder a todo que tengamos en functions
	$user = new User_Actions();

	if (!isset($_GET['section'])) {			
		
	}elseif (isset($_GET['section']) && $_GET['section'] == "ejeje.php"){
	}elseif (isset($_SESSION['user']) && isset($_GET['section']) && $_GET['section'] == "my_favorites"){
		//Obtener el perfil del usuario
		$profile = $user->getProfile($_SESSION['user']);

		//Obtener publicaciones favoritas		
		$post = $user->getMyFavorites($profile[0]['id_users']);
		$perfil = $user->getPerfil($_SESSION['user']);	
	}
?>