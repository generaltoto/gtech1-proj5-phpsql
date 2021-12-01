<?php 
  require('config.php');

  $sql = "DELETE FROM user WHERE user_id = :delUser";

  $dataBinded=array(
    ':delUser' => $_POST['delete']
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

  header('Location:../admin.php');
?>