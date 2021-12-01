<?php 
  require('config.php');
    $sql = "SELECT * FROM index_content"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC); 

    foreach($data as $indexKey => $indexInfos){
        $sql = "UPDATE index_content SET $indexKey = $indexInfos"
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetch(PDO::FETCH_ASSOC);
    }
    


  header('Location:../admin.php');
?>