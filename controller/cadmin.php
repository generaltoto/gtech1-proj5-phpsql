<?php 
  require ('config/config.php'); 

  echo ($_SESSION['login'] == true && $_SESSION['role'] == 2) ? require ('view/adminview.php') : "il s'agirait d'être connecté et admin hein";

?>