<?php 
require_once "config.php"; 

$emailErr = $passwordErr = '';
$hashedPassword = SHA1($_POST['password']);

if(empty(trim($_POST['email']))){
    $emailErr = "You have to write something here.";
    header('Location:../index.php?emailErr='.$emailErr);

  } elseif(empty(trim($_POST['password']))){
    $passwordErr = "You have to write something here.";
    header('Location:../index.php?passwordErr='.$passwordErr);
}

if(empty($emailErr) && empty($passwordErr)){

    $sql = "SELECT * FROM user WHERE user_email=:email AND user_password=:password";
    
    $dataBinded=array(
        ':email'   => $_POST['email'],
        ':password'=> $hashedPassword
    );    

    $pre = $pdo->prepare($sql); 
    $pre->execute($dataBinded);
    $user = current($pre->fetchAll(PDO::FETCH_ASSOC));

    if(empty($user)){ 
        $loginErr = "Email or password incorrect";
        header('Location:../index.php?loginErr'.$loginErr);

    }else{
        $_SESSION['user'] = $user; // si on veut acceder à user_id on dit / $_SESSION['user']['user_id'] = $display / par exemple
        $_SESSION['login'] = true;
        $_SESSION['role'] = $user['user_role']; // getting the role of the connected user (0 for none and 2 for admin)
    }
    header('Location:../index.php');
}