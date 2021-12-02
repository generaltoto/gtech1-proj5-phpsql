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
      $sql = "SELECT * FROM index_content";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <header class="index-header" style="background: url(<?php echo $data['title_img']; ?>);">
      <!-- NAVBAR -->
      <?php require ('assets/parts/nav.php');?>

      <!-- HEADER BACKGROUND -->
      <div class="container">
          <h1 class="header center white-text"><?php echo $data['title_1']; ?></h1>
          <div class="row center">
              <h2 class="header col s12 light white-text"><?php echo $data['title_2']; ?></h2>
          </div>
      </div>
    </header>


    <!-- COPY SECTION  -->
    <section id="hidden">
      <h2>hidden section</h2>
      <p id="discord-thomas"><?php echo $data['discord_1']; ?></p>
      <p id="discord-arthur"><?php echo $data['discord_2']; ?></p>
      <p id="email-thomas"><?php echo $data['mail_1']; ?></p>
      <p id="email-arthur"><?php echo $data['mail_2']; ?></p>
    </section>

    <!-- TEAM -->
    <div class="container z-depth-4" id="team">
      <h2 class="header white-text center"><?php echo $data['title_3']; ?></h2>
      <div class="row white-text">
        <div class="col s12 m12 l6">
          <div class="card z-depth-3 row">
            <div class="card-image col s12 m12 l12 xl5 center">
              <img src="<?php echo $data['team_img_1']; ?>" class="responsive-img" alt='Character1 Team Projects Image'>
            </div>
            <div class="card-stacked col s12 m12 l12 xl7">
              <div class="card-content">
                <h3 class="header"><?php echo $data['name_text_1']; ?></h3>
              </div>
            </div>
            <div class="card-stacked col s12">
              <p><?php echo $data['name_paragraph_1']; ?></p>
              <div class="card-action">
                <ul class="social">
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['mail_1']; ?> (clic to copy)' onclick="copyToClipboard('#email-thomas')"><i class="far fa-envelope"></i></a></li>
                  <li><a href="<?php echo $data['github_link_1']; ?>" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['github_1']; ?> (clic)'><i class="fab fa-github"></i></a></li>
                  <li><a href="<?php echo $data['linkedin_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['linkedin_1']; ?> (clic)'><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['discord_1']; ?> (clic to copy)' onclick="copyToClipboard('#discord-thomas')"><i class="fab fa-discord"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l6">
          <div class="card z-depth-3 row">
            <div class="card-image col s12 m12 l12 xl5">
              <img src="<?php echo $data['team_img_2']; ?>" class="responsive-img" alt='Character2 Team Projects Image'>
            </div>
            <div class="card-stacked col s12 m12 l12 xl7">
              <div class="card-content">
                <h3 class="header"><?php echo $data['name_text_2']; ?></h3>
              </div>
            </div>
            <div class="card-stacked col s12">
              <p><?php echo $data['name_paragraph_2']; ?></p>
              <div class="card-action">
                <ul class="social">
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['mail_2']; ?> (clic to copy)' onclick="copyToClipboard('#email-arthur')"><i class="far fa-envelope"></i></a></li>
                  <li><a href="<?php echo $data['github_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['github_2']; ?> (clic)'><i class="fab fa-github"></i></a></li>
                  <li><a href="<?php echo $data['linkedin_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['linkedin_2']; ?> (clic)'><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='<?php echo $data['discord_2']; ?> (clic to copy)'><i class="fab fa-discord" onclick="copyToClipboard('#discord-arthur')"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container" id="index-container">
      <div class="parallax">
        <img src="<?php echo $data['index_parallax_img']; ?>" alt="Projects Parallax Image">
      </div>
    </div>


    <!-- PROJECTS -->
    <section class="container section white-text z-depth-4" id="project">
      <h2 class="header center"><?php echo $data['title_4']; ?></h2>

      <?php
        $sql = "SELECT show_projects FROM index_content";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data_project = $pre->fetch(PDO::FETCH_ASSOC);

      foreach($data_project as $dataProject){
        foreach(json_decode($dataProject, true) as $key => $value){ ?>
          <div class="row z-depth-3">
            <div class="col s12 m12 l12 xl4 center">
              <img src="<?php echo $value['img']; ?>" alt="Projects Code Image" class="responsive-img">
            </div>
            <div class="col s12 m12 l12 xl8">
              <h3 class="header"><?php echo $key; ?></h3>
              <p><?php echo $value['text']; ?></p>
            </div>
          </div>
        <?php }
      }
      ?>


    </section>

    <!-- PROJECTS MODAL -->
    <?php require ('assets/parts/projects-modal.php'); ?>

    <!-- CONTACT & FOOTER -->
    <?php require('assets/parts/footer.php'); ?>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>