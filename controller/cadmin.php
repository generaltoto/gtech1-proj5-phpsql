<?php 
  require ('config/config.php'); 

  echo ($_SESSION['login'] == true) ? require ('view/adminview.php') : "il s'agirait d'être connecté et admin hein";

?>