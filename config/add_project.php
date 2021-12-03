<?php
  require ('imageDetection.php');
  require('config.php');

  $sql = "SELECT * FROM project WHERE project_id = 1"; 
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data_projects = $pre->fetchAll(PDO::FETCH_ASSOC);

  $requiredData = array();
  $success = 1;
  foreach($data_projects[0] as $dataKey => $dataValue){
      array_push($requiredData, $dataKey);
      if((strlen($_POST[$dataKey]) == 0)){
        $success = 0;
      }
    }
    if($success == 1){
    $sql = "";
    $param = array();
    foreach($_POST as $postKey => $postValue){
        if (isImage($postValue) == true){ // Checking if the value is an image
        $name = $_FILES[$postKey]['name'];
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
        move_uploaded_file($_FILES[$postKey]['tmp_name'],$destination);
        $postValue = "assets/img/upload/".$name;
        }
        if ($postKey == 'show_details'){
          $sql .= $postKey.'= '.$postValue.' )';
        } else {
          $sql .= $postKey.'="'.$postValue.'", ';
        }
        $param[$postKey] = $postValue;
        $sql = substr($sql,0,-1);
      };
      
      $stmt = $pdo->prepare("INSERT INTO project SET ".$sql);
      print_r($stmt);
      $stmt->execute($param);
      header('Location:../admin.php');
  }
?>