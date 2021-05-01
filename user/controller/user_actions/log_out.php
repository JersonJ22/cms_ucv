<?php
	session_start();

	session_destroy();
	header("Location: http://localhost/cms_ucv/");
	exit(); //Para aseguranos de que no corra mas codigo luego de cerrar
	
?>