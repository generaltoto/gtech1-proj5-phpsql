<!DOCTYPE html>
<html lang="en" dir="ltr" id="index">
<head>
  <title>Admin Panel</title>
  <meta name="description" content="Website management">
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
<body class="grey lighten-2">
  <?php
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $displayUser = $pre->fetch(PDO::FETCH_ASSOC);
  ?>

  <!-- HEADER & NAVBAR -->
  <header class="admin-header">
    <?php require ('assets/parts/nav.php'); ?>
    <div class="container">
      <h1 class="header center white-text">Welcome To Your Admin Panel</h1>
    </div>
  </header>

  <section>
    <div class="indigo-text text-darken-3 container">
      <ul class="tabs transparent center" id="tabAdmin">
          <li class="tab col s12">
              <a href="#theUsers" class="indigo-text text-darken-4">USERS</a>
          </li>
          <li class="tab col s12">
              <a href="#theIndex" class="indigo-text text-darken-4">INDEX MANAGELENT</a>
          </li>
          <li class="tab col s12">
              <a href="#theProjects" class="indigo-text text-darken-4">PROJECTS MANAGEMENT</a>
          </li>
      </ul>

      <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="container row center z-depth-2" id="theUsers">
        <div class="col s3 collection grey lighten-1" id="first_names_title">
          <p class="collection-title">FIRST NAME</p>
        </div>
        <div class="col s3 collection grey lighten-1" id="first_names" id="last_names_title">
           <p class="collection-title">LAST NAME</p>
        </div>
        <div class="col s5 collection grey lighten-1" id="emails" id="email_title">
          <p class="collection-title">EMAIL</p>
        </div>
        <div class="col s1 collection grey lighten-1" id="deleteBtn">
          <p class="collection-title">SUPPR</i></p>
        </div>
        <?php foreach($data as $userNames){ ?>
          <div class="col s3 collection" id="first_names">
            <p class="collection-item"><?php echo $userNames['user_first_name'] ?></p>
          </div>
          <div class="col s3 collection" id="first_names">
            <p class="collection-item"><?php echo $userNames['user_last_name'] ?></p>
          </div>
          <div class="col s5 collection" id="emails">
            <p class="collection-item"><?php echo $userNames['user_email'] ?></p>
          </div>
          <div class="col s1 collection red-text" id="deleteBtn">
            <p class="collection-title"><i class="fas fa-trash-alt"></i></p>
          </div>
        <?php } ?>
      </div>
      <div class="col s12 container" id="theIndex">
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
      <div class="col s12 container" id="theProjects">
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

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>