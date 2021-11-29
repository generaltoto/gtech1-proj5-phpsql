<?php 
require_once "config.php"; 

$emailErr = $passwordErr = '';

if(empty(trim($_POST['email']))){
    $emailErr = "You have to write something here.";
    header('Location:../index.php?emailErr='.$emailErr);
  
  } elseif(empty(trim($_POST['password']))){
    $passwordErr = "You have to write something here.";
    header('Location:../index.php?passwordErr='.$passwordErr);
}

if(empty($emailErr) && empty($passwordErr)){

    $sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

    session_start();

    if(empty($user)){ 
        $loginErr = "Email or password incorrect";
        header('Location:../index.php?loginErr'.$loginErr);

    }else{
        $_SESSION['user'] = $user; // si on veut acceder à user_id on dit / $_SESSION['user']['user_id'] = $display / par exemple
        $loged = true;
    }

    header('Location:../index.php');
}
?>