<?php 
    require ('imageDetection.php');

    require('config.php');
    $sql = "SELECT * FROM index_content"; 
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    foreach($_POST as $key => $value){
      if (isImage($value) == true){ // Checking if the value is an image
        $name = $_FILES[$key]['name'];
        $actual_name = pathinfo($name ,PATHINFO_FILENAME);
        $original_name = $actual_name;
        $extension = pathinfo($name , PATHINFO_EXTENSION);

        $destination = "../assets/img/upload/".$name;
        if (file_exists("../assets/img/upload/".$actual_name.".".$extension)) {
            $i = 1;
            do {
                $actual_name = (string)$original_name.$i;
                $name = $actual_name.".".$extension;
                $i++;
                $destination = "../assets/img/upload/".$actual_name.".".$extension;
            } while(file_exists($destination));
        }
        move_uploaded_file($_FILES[$key]['tmp_name'],$destination);
        $value = "assets/img/upload/".$name;
    }
        $sql = "UPDATE index_content SET $key = :value";
        $dataBinded = array(
            ':value'=> $value
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
    };


    
    //header('Location:../admin.php');
?>