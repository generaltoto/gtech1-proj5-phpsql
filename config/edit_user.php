<?php 
  require('config.php');
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);

    foreach($_POST as $key => $value){
        $sql = "UPDATE user SET $key = :value WHERE user_id = :id";
        $dataBinded = array(
            ':value'=> $value
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
    };
    
    header('Location:../admin.php');
?>