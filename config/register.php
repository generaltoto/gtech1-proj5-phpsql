<?php 
require "config.php";

$firstName = $lastName = $email = $password = $confirmPassword = "";
$firstNameErr = $lastNameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";

// CHECKING IF NAME AND LAST NAME POST ARENT EMPTY

if(empty(trim($_POST['firstName']))){
  $firstNameErr = "You have to write something here.";
  header('Location:../index.php?firstNameErr='.$firstNameErr);
} 

if(empty(trim($_POST['lastName']))){
  $lastNameErr = "You have to write something here.";
  header('Location:../index.php?lastNameErr='.$lastNameErr);
}

// CHECKING ALREADY USED EMAIL

if(empty(trim($_POST["email"]))){ // empty() function checks if the post is empty & trim() remove empty spaces in front or at the end 
  $emailErr = "You have to write something here.";
  header('Location:../index.php?emailErr='.$emailErr); // display error thanks to span tag in form 

} else{
  $sameEmail = $_POST['email'];
  $compSql = "SELECT * FROM user WHERE user_email='".$_SESSION['user'][':email']."'";

  if(!empty($compSql)){
    $emailErr = "Email already in use."; // counts the number of existing user with this email
    header('Location:../index.php?emailErr='.$emailErr);

  } else{
    $email = trim($_POST["email"]); // removing empty spaces to have a correct username
  }
}

// CHECKING PASSWORD 

// length
if(empty(trim($_POST["password"]))){
  $passwordErr = "You have to write something here.";
  header('Location:../index.php?passwordErr='.$passwordErr); // span tag in html

} elseif(strlen(trim($_POST["password"])) < 6){ // managing password length with strlen()
  $passwordErr = "Password must have atleast 6 characters.";
  header('Location:../index.php?passwordErr='.$passwordErr);

} else{
  $password = trim($_POST["password"]);
}

// password validation
if(empty(trim($_POST["confirmPassword"]))){
  $confirmPasswordErr = "Please confirm password.";
  header('Location:../index.php?confirmPasswordErr='.$confirmPasswordErr);  

} else{
  $confirmPassword = trim($_POST["confirmPassword"]);

  if(empty($passwordErr) && ($password != $confirmPassword)){ // checking if both passwords matches 
    $confirmPasswordErr = "Password did not match.";
    header('Location:../index.php?confirmPasswordErr='.$confirmPasswordErr);
  }
}

// CHECKING IF TEST ABOVE RETURNED ERRORS & 

if (empty($firstNameErr) && empty($lastNameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)){
  $sql = "INSERT INTO user(user_first_name, user_last_name, user_email, user_password) VALUES(:firstName, :lastName, :email, :password)";
      
  $dataBinded=array(
    ':firstName' => $_POST['firstName'],
    ':lastName' => $_POST['lastName'],
    ':email'   => $_POST['email'],
    ':password'=> SHA1($_POST['password'])
  );

  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
  $user = current($pre->fetchAll(PDO::FETCH_ASSOC));
  
  $_SESSION['user'] = $dataBinded;
  $_SESSION['login'] = true;

  $id = "SELECT * FROM user WHERE user_email='".$_SESSION['user'][':email']."'"; // getting the connected user 
  $_SESSION['role'] = $id['user_role'];
  header('Location:../index.php');
}
?>
