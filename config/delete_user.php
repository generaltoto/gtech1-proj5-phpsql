<?php 
require('config.php');

$sql = "DELETE FROM user WHERE user_id = ':delid'";

$dataBinded=array(
  ':delid' => $_POST['delid']
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('../index.php');
?>