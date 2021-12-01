<?php
  require('config.php');
  $sql = "SELECT * FROM project";
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data = $pre->fetch(PDO::FETCH_ASSOC);

  foreach($_POST as $key => $value){
      $sql = "UPDATE project SET $key = :value WHERE project_id = :id";
      $dataBinded = array(
          ':value'=> $value,
          ':id'=> $_GET['id']
      );
      $pre = $pdo->prepare($sql);
      $pre->execute($dataBinded);
  };
  
  header('Location:../admin.php');
?>