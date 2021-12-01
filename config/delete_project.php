<?php
require('config/config.php');

$sql = "DELETE FROM projects WHERE project_id = :delProject";

  $dataBinded=array(
    ':delProject' => $_POST['deleteProject']
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);

header('Location:../admin.php');
?>