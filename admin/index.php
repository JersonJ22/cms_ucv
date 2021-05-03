<?php require 'controller/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/css/framework/semantic/semantic.min.css">	
	<link href="https://file.myfontastic.com/mie5bpaSEK4AC4TPTHLHvQ/icons.css" rel="stylesheet">
	<link rel="shurtcon icon" href="../assets/resources/img/logo.jpg">
	<link rel="stylesheet" href="../assets/css/style.css">	
	<title>Administrador</title>
</head>
<body>	
	<?php 
		if (isset($_SESSION['admin'])) {
			require 'view/navegacion/admin_nav.php'; 			
		}
	?>
	<?php
		if (!isset($_SESSION['admin'])) {
			require 'view/login.php';
		}elseif (!isset($_SESSION['admin']) && 
			isset($_GET['section']) &&
			$_GET['section'] == "register_admin"
		) {
			require 'view/register_admin.php';
		}
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	<script src="../assets/css/framework/semantic/semantic.min.js"></script>
	<script src="../assets/css/framework/uikit.min.js"></script>
	<script src="../assets/js/admin.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
