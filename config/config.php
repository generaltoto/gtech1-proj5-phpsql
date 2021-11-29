<?php
  $pdo = new PDO(
      'mysql:host=localhost;dbname=projects_db;',
      'root',
      '',
      array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
  );
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

  session_start();
  if (!isset($_SESSION['login']) && !isset($_SESSION['role']) && !isset($_SESSION['user'])) {
    $_SESSION['login'] = false;
    $_SESSION['role'] = 0;
    $_SESSION['user'] = null;
  }
?>