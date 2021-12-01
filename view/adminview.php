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
              <a href="#theProjects" class="indigo-text text-darken-4">PROJECTS MANAGELENT</a>
          </li>
          <li class="tab col s12">
              <a href="#theIndex" class="indigo-text text-darken-4">INDEX MANAGEMENT</a>
          </li>
      </ul>

      <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="row center z-depth-2" id="theUsers">
        <h2 class="header">USERS</h2>
        <ul class="collapsible">
          <?php foreach($data as $userInfos){ ?>
            <li>
              <div class="collapsible-header">
                <h3 class="header"><?php echo $userInfos['user_first_name']." ".$userInfos['user_last_name']; ?></h3>
              </div>
              <div class="collapsible-body white">
                <form class="right" action="delete_project.php">
                  <input type="hidden" value="<?php echo $userInfos['user_first_name']." ".$userInfos['user_last_name']; ?>">
                  <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                </form>
                <ul>
                  <li><a>User ID : <?php echo $userInfos['user_id']; ?></a></li>
                  <li><a>First Name : <?php echo $userInfos['user_first_name']; ?></a></li>
                  <li><a>Last Name : <?php echo $userInfos['user_last_name']; ?></a></li>
                  <li><a>Email : <?php echo $userInfos['user_email']; ?></a></li>
                </ul>
                <ul class="collapsible">
                  <li>
                    <div class="collapsible-header">
                      <h4>MODIFY CONTENT</h4>
                    </div>
                    <div class="collapsible-body white">
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          <?php } ?>
        </ul>
        <form class="center" action="edit_project.php">
          <input type="hidden" value="<?php echo $projectInfos['project_id']; ?>">
          <div class="section center">
            <button type="submit" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></button>
          </div>
        </form>
        
      </div>
      
      
      <?php
        $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="row center z-depth-2" id="theProjects">
        <h2 class="header">PROJECTS</h2>
        <ul class="collapsible">
          <?php foreach($data as $projectInfos){ ?>
            <li>
              <div class="collapsible-header">
                <h3 class="header"><?php echo "Project n°".$projectInfos['project_id']." / ".$projectInfos['title_1'] ?></h3>
              </div>
              <div class="collapsible-body white">
                <form class="right" action="delete_project.php">
                  <input type="hidden" value="<?php echo $projectInfos['project_id']; ?>">
                  <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                </form>
                <h4><?php echo $projectInfos['title_2']; ?></h4>
                <p><?php echo $projectInfos['paragraph_1']; ?></p>
                <ul class="collapsible">
                  <li>
                    <div class="collapsible-header">
                      <h4>MODIFY CONTENT</h4>
                    </div>
                    <div class="collapsible-body white">

                    </div>
                  </li>
                </ul>
              </div>
            </li>
          <?php } ?>
        </ul>
        <form class="center" action="edit_project.php">
          <input type="hidden" value="<?php echo $projectInfos['project_id']; ?>">
          <div class="section center">
            <button type="submit" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></button>
          </div>
        </form>
        
      </div>

      <?php
        $sql = "SELECT * FROM index_content"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetch(PDO::FETCH_ASSOC); 
      ?>
      <div class="container row center z-depth-2" id="theIndex">
        <h2>Edit Index</h2>
        <ul class="collapsible">
          <form class="col s12" action="config/edit_index.php" method="POST">
            <div class="row">
              <?php foreach($data as $indexKey => $indexInfos){ ?>
                    <div class="row">
                      <div class="input-field col s12">
                        <label for="name"><?php echo $indexKey ?></label>
                        <textarea id="textarea1" class="materialize-textarea" name="<?php echo $indexKey ?>"><?php echo $indexInfos; ?></textarea>
                      </div>
                    </div>
              <?php } ?>
            </div>
            <button type="submit" class="btn-large right green">SAVE</button>
          </form>
        </ul>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>