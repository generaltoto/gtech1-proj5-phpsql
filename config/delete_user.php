<?php 
  require('config.php');

  $sql = "DELETE FROM user WHERE user_id = :delUser";

  $dataBinded=array(
    ':delUser' => $_POST['delUser']
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

  header('Location:../admin.php');
?>