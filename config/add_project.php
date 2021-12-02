<?php 
  require('config.php');

  


  $sql = "SELECT * FROM project WHERE project_id = 1"; 
  $pre = $pdo->prepare($sql); 
  $pre->execute();
  $data_projects = $pre->fetchAll(PDO::FETCH_ASSOC);

  $requiredData = array();
  $success = 1;
  foreach($data_projects as $dataKey => $dataValue){
      array_push($requiredData, $dataKey);
      if((strlen($_POST[$dataKey]) == 0)){
        $success = 0;
      }
    }
    if($success == 1){
    $sql = "";
    $param = array();
    foreach($_POST as $postKey => $postValue){
      $sql .= $postKey.'=:'.$postKey.',';
      $param[$postKey] = $postValue;
    };
    $sql = substr($sql,0,-1); // <--- remove last ,
    $stmt = $pdo->prepare("INSERT INTO project SET " . $sql);
    $stmt->execute($param);
    print_r($stmt);
  }



  // $sql="INSERT INTO project(title_1, title_2, img_header, title_3, paragraph_1, img_description_1, img_parallax_1, title_4, paragraph_2, img_description_2, 
  //   title_5, img_caroussel_1, img_caroussel_2, img_caroussel_3, img_caroussel_4, img_caroussel_5, tab_title_1, tab_paragraph_1, tab_title_2, 
  //   tab_paragraph_2, tab_title_3, tab_paragraph_3, show_details) 
  // VALUES (:tittle_1, :title_2, :img_header, :title_3, :paragraph_1, :img_description_1, :img_parallax_1, :title_4, :paragraph_2, 
  //   :img_description_2, :title_5, :img_caroussel_1, img_caroussel_2, :img_caroussel_3, :img_caroussel_4, :img_caroussel_5, :tab_title_1, :tab_paragraph_1
  //   :tab_title_2, :tab_paragraph_2, :tab_title_3, :tab_paragraph_3, :show_details);";


  // $dataBinded=array(
  //   ':tittle_1'          => $_POST['tittle_1'],
  //   ':title_2'           => $_POST['tittle_2'],
  //   ':img_header'        => $_POST['img_header'],

  //   ':title_3'           => $_POST['title_3'],
  //   ':paragraph_1'       => $_POST['paragraph_1'],
  //   ':img_description_1' => $_POST['img_description_1'],
  //   ':img_parallax_1'    => $_POST['img_parallax_1'],

  //   ':title_4'           => $_POST['title_4'],
  //   ':paragraph_2'       => $_POST['paragraph_2'],
  //   ':img_description_2' => $_POST['img_description_2'],

  //   ':title_5'           => $_POST['title_5'],
  //   ':img_caroussel_1'   => $_POST['img_caroussel_1'],
  //   ':img_caroussel_2'   => $_POST['img_caroussel_2'],
  //   ':img_caroussel_3'   => $_POST['img_caroussel_3'],
  //   ':img_caroussel_3'   => $_POST['img_caroussel_3'],
  //   ':img_caroussel_4'   => $_POST['img_caroussel_4'],
  //   ':img_caroussel_5'   => $_POST['img_caroussel_5'],

  //   ':tab_title_1'       => $_POST['tab_title_1'],
  //   ':tab_paragraph_1'   => $_POST['tab_paragraph_1'],
  //   ':tab_title_2'       => $_POST['tab_title_2'],
  //   ':tab_paragraph_2'   => $_POST['tab_paragraph_2'],
  //   ':tab_title_3'       => $_POST['tab_title_3'],
  //   ':tab_paragraph_1'   => $_POST['tab_paragraph_1'],
  //   ':tab_title_3'       => $_POST['tab_title_3'],

  //   ':show_details'      => $_POST['show_details']
  // );

?>