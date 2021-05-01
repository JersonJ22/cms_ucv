<?php require 'user/controller/app_top_users.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/framework/semantic/semantic.min.css">	
	<link rel="stylesheet" href="assets/css/framework/uikit.min.css">	
	<link href="https://file.myfontastic.com/mie5bpaSEK4AC4TPTHLHvQ/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">	
	<link rel="shurtcon icon" href="assets/resources/img/logo.jpg">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Principal</title>
</head>
<body>
	<?php require 'user/view/navegacion/user_nav.php'; ?>	
	<?php
		if (!isset($_GET['section'])) {
			require 'user/view/home.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "register"){
			require 'user/view/register.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "log_in"){
			require 'user/view/login.php';
		}
	?>
	<?php require 'user/view/footer/footer.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/css/framework/semantic/semantic.min.js"></script>
	<script src="assets/css/framework/uikit.min.js"></script>
	<script src="assets/js/user.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
