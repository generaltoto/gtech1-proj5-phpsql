<!DOCTYPE html>
<html lang="en" dir="ltr">
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
      $pageid = $_GET['id'];

      $sql = "SELECT * FROM project WHERE project_id = $pageid";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <header class="project-header" style="background-image: url('<?php echo $data['img_header']; ?>');">
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

    <!-- FIRST PRESENTATION  -->
    <section class="container section z-depth-3">
        <div class="row">
            <div class="col s12 m12 l12 xl6">
                <h2 class="grey-text text-darken-4"><?php echo $data['title_3']; ?></h2>
                <p><?php echo $data['paragraph_1']; ?></p>
            </div>
            <div class="col s12 m12 l12 xl4 push-xl1">
                <img src="<?php echo $data['img_description_1']; ?>" class="responsive-img" alt="Destiny 2 Presentation Image 1">
            </div>
        </div>
    </section>

    <!-- PARALLAX & CARACTERISTICS -->
    <div class="parallax-container valign-wrapper">
      <div class="section valign-wrapper" id="section-parallax">
          <div class="row white-text center" id="col-color">
            <?php for ($i=1; $i < 4; $i++){?>
              <div class="col s12 m4 l4">
                <div class="icon-block">
                    <h2 class="deep-orange-text"><i class="material-icons"><?php echo $data['icon_'.$i]; ?></i></h2>
                    <h3><?php echo $data['min_title_'.$i]; ?></h3>
                    <p class="light"><?php echo $data['min_paragraph_'.$i]; ?></p>
                </div>
              </div>
           <?php } ?>
          </div>
      </div>
      <div class="parallax">
          <img src="<?php echo $data['img_parallax_1']; ?>" alt="Destiny 2 Parallax Image 1">
      </div>
  </div>


  <!-- SECOND PRESENTATION -->
  <section class="container section z-depth-3 white">
      <div class="row">
          <div class="col s12 m12 l12 xl6 push-xl5">
              <h2 class="grey-text text-darken-4"><?php echo $data['title_4']; ?></h2>
              <p><?php echo $data['paragraph_2']; ?></p>
          </div>
          <div class="col s12 m12 l12 xl4 pull-xl6">
              <img id="swap" class="responsive-img" src="<?php echo $data['img_description_2']; ?>" alt="Destiny 2 Presentation Image 1">
          </div>
      </div>
  </section>

    <!-- CAROUSSEL -->
    <div class="row" id="carousel-row">
        <h2 class="center white-text"><?php echo $data['title_5']; ?></h2>
        <div class="carousel z-depth-3">
        <?php for ($i=1; $i < 6; $i++){?>
            <a class="carousel-item"><img src="<?php echo $data['img_caroussel_'.$i]; ?>" alt="Destiny 2 Screenshot Image <?php echo $i; ?>"></a>
        <?php } ?>
        </div>
    </div>


     <!-- SKILLS -->
    <div class="parallax-container valign-wrapper">
        <section class="container section scrollspy" id="col-color2">
            <div class="row">
                <div class="col s12 l4">
                    <h2 class="white-text"><?php echo $data['title_6']; ?></h2>
                </div>
            </div>
            <div class="col s12 l6 offset-l2 white-text">
                <ul class="tabs transparent" id="tab-li">
                    <?php for ($i=1; $i < 4; $i++){?>
                        <li class="tab col s6">
                            <a href="#<?php echo $data['tab_title_'.$i]; ?>" class="white-text"><?php echo $data['tab_title_'.$i]; ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <?php for ($i=1; $i < 4; $i++){?>
                    <div class="col s12" id="<?php echo $data['tab_title_'.$i]; ?>">
                        <p class="flow-text"><?php echo $data['tab_title_'.$i]; ?></p>
                        <p><?php echo $data['tab_paragraph_'.$i]; ?></p>
                    </div>
                <?php } ?>
              
            </div>
        </section>
        <div class="parallax">
          <img src="<?php echo $data['img_parallax_2']; ?>" alt="Destiny 2 Parallax Image 2">
        </div>
    </div>

    <!-- PROJECTS MODAL -->
    <?php require ('assets/parts/projects-modal.php'); ?>
    
    <footer>
      <!-- CONTACT & FOOTER -->
      <?php 
        $sql = "SELECT * FROM index_content";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $data = $pre->fetch(PDO::FETCH_ASSOC);
        
        require('assets/parts/footer.php');
      ?>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>