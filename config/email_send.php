<?php
    //SUBMIT THE FORM
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "daniell@gaming.tech";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    //mail($to,$messageSubject,$body);

    //mail worked, go back to index
    header('Location:../index.php');
?>