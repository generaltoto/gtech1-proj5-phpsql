<?php 
    require ('imageDetection.php');

    require('config.php');
    $sql = "SELECT * FROM index_content"; 
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    print_r($_POST);
    foreach($_POST as $key => $value){
        if(isImage($value) == true){
            $name = $_FILES[$indexKey]['name'];
            $actual_name = pathinfo($name, PATHINFO_FILENAME);
            $original_name = $actual_name;
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $destination = "../img/upload/".$name;
            if(file_exists("../img/upload/".$actual_name.".".$extension)){
              $i = 1;
              do {
                $actual_name = (string)$original_name.$i;
                $name = $actual_name.".".$extension;
                $i++;
                $destination = "../img/upload/".$actual_name.".".$extension;
              } while(file_exists($destination));
            }
            
            move_uploaded_file($_FILES[$postKey]['tmp_name'],$destination);
            $value = "../img/upload/".$name;
            
          }
        $sql = "UPDATE index_content SET $key = :value";
        $dataBinded = array(
            ':value'=> $value
        );
        $pre = $pdo->prepare($sql);
        //$pre->execute($dataBinded);
    };


    
    //header('Location:../admin.php');
?>