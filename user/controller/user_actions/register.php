<?php
	require '../../repository/user_repo.php';

	$user = new User_Actions();

	$register = $user->register_user($_POST['name'],$_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['password']);

	echo $register;
?>