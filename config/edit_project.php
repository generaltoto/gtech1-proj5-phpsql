<?php
  require('config.php');

  foreach($_POST as $key => $value){
    
    $sql = "UPDATE project SET $key = :value WHERE project_id = :updateProject";
    $dataBinded = array(
        ':value'=> $value,
        ':updateProject' => $_POST['update']
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
  };
  
  header('Location:../admin.php');

// SELECT * INTO TemporaryTable FROM project

// ALTER TABLE TemporaryTable DROP COLUMN Columnwhichyouwanttoremove

// SELECT * FROM TemporaryTable 

// DROP TABLE TemporaryTable 
?>