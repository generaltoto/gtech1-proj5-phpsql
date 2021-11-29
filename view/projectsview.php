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
      $pageid = $_GET['id'];

      $sql = "SELECT * FROM project WHERE project_id = $pageid";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $data = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <header class="project-header">
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
  <section class="container section z-depth-3">
      <div class="row">
          <div class="col s12 m12 l12 xl6 push-xl5">
              <h2 class="grey-text text-darken-4">The Project</h2>
              <p>
                  We had only one html page allowed which restricted a lot of possibilities. We had to focus on what was really important in the game and find the right words to avoid long
                  texts.
              </p>
          </div>
          <div class="col s12 m12 l12 xl4 pull-xl6">
              <img id="swap" class="responsive-img" src="img/d2presentation2.jpg" alt="Destiny 2 Presentation Image 1">
          </div>
      </div>
  </section>


  <!-- CAROUSSEL -->
  <div class="row" id="carousel-row">
      <h2 class="center white-text">More Destiny 2 images</h2>
      <div class="carousel z-depth-3">
          <a class="carousel-item"><img src="img/d2caroussel1.jpg" alt="Destiny 2 Screenshot Image 1"></a>
          <a class="carousel-item"><img src="img/d2caroussel2.jpg" alt="Destiny 2 Screenshot Image 2"></a>
          <a class="carousel-item"><img src="img/d2caroussel3.jpg" alt="Destiny 2 Screenshot Image 3"></a>
          <a class="carousel-item"><img src="img/d2caroussel4.jpg" alt="Destiny 2 Screenshot Image 4"></a>
          <a class="carousel-item"><img src="img/d2caroussel5.jpg" alt="Destiny 2 Screenshot Image 5"></a>
      </div>
  </div>


  <!-- SKILLS -->
  <div class="parallax-container valign-wrapper">
      <section class="container section scrollspy" id="col-color2">
          <div class="row">
              <div class="col s12 l4">
                  <h2 class="white-text">Skills acquired</h2>
              </div>
          </div>
          <div class="col s12 l6 offset-l2 white-text">
              <ul class="tabs transparent" id="tab-li">
                  <li class="tab col s6">
                      <a href="#html" class="white-text">HTML & CSS</a>
                  </li>
                  <li class="tab col s6">
                      <a href="#seo" class="white-text">SEO</a>
                  </li>
                  <li class="tab col s6">
                      <a href="#teamwork" class="white-text">Team Work</a>
                  </li>
              </ul>
              <div class="col s12" id="html">
                  <p class="flow-text">
                      HTML / CSS
                  </p>
                  <p>
                      The html langage helps you a lot to understand how to strutcure your code, and if you manage to have a perfect-structured code, 
                      almost everyone can understand what you're doing (except your grand-parents, but old people are not concidered here).
                  </p>
                  <p>
                      CSS on the other hand is maybe a bit harder to understand but gives you a ton of possibilities, it's definetly worth the learn. It also has
                      the particularity of having a syntax similar to a lot of langages such as C or Java (use of "( )", "{ }", ";").
                  </p>
              </div>
              <div class="col s12" id="seo">
                  <p class="flow-text">
                      SEO
                  </p>
                  <p>
                      The SEO might not seem that important but at soon as you want your website to be looked at by some people, you'll see that it is as important as a good
                      looking website. Everything as to be optimized if you want people to find your site before the 5th page of Google. 
                  </p>
                  <p>
                      It was new for both of us and really abstract at first, you can't really visualize how much the presence of a word at certain places in your code is that 
                      important. Some website are really helpfull to make your code clean and make your pictures as light as possible. 
                  </p>
              </div>
              <div class="col s12" id="teamwork">
                  <p class="flow-text">
                      Team Work
                  </p>
                  <p>
                      Considering we were both coming from a really scolar environement, working as a real team can be really challenging sometimes since french 
                      scholar system isn't really focused on teamwork. Working as a team and progressing as a team felt really nice. 
                  </p>
              </div>
          </div>
      </section>
      <div class="parallax">
          <img src="img/d2parallax2.jpg" alt="Destiny 2 Parallax Image 2">
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