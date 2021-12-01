<?php
// GETTING ID OF CONNECTED USER
  $id = "SELECT * FROM user WHERE user_email=':email'";

  $dataBinded=array(
    ':email'   => $_POST['email']
  );
  
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
  $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

  $_SESSION['role'] = $user['user_role'];
  
?>