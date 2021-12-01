<?php
  require('config.php');
  $sql = "SELECT * FROM project"; 
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data = $pre->fetch(PDO::FETCH_ASSOC); 

  print_r($_POST);

  foreach($_POST as $key => $value){
      $sql = "UPDATE index_content SET $key = :value";
      $dataBinded = array(
          ':value'=> $value
      );
      $pre = $pdo->prepare($sql);
      $pre->execute($dataBinded);
  };
  
  header('Location:../admin.php');
?>