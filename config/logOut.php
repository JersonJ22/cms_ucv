<?php
  require '../config/app.php';
  require '../config/sessionConfig.php';

  $ruta = new App();
  $session = new sessionConfig();

  echo $session->sessionDestroy("\cms_ucv");


?>