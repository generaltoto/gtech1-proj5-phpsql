<!DOCTYPE html>
<html lang="en" dir="ltr" id="index">
  <head>
    <title>Team Projects : Quick Presentation</title>
    <meta name="description" content="Presentation of our team projects through 3 different pages.">
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Import Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <?php
      $sql = "SELECT * FROM projects_content";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <header class="index-header">
      <!-- NAVBAR -->
      <?php require ('assets/parts/nav.php'); ?>

      <?php echo $data['project_id']; ?>
      
    </header>

    <!-- CONTACT & FOOTER -->
    <?php require('assets/parts/footer.php'); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>