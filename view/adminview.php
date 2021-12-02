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
    <?php require ('config/imageDetection.php'); ?>
    <div class="container">
      <h1 class="header center white-text">Welcome To Your Admin Panel</h1>
    </div>
  </header>

  <!-- TAB MENU -->
  <section>
    <div class="indigo-text text-darken-3 container">
      <ul class="tabs transparent center" id="tabAdmin">
          <li class="tab col s12">
              <a href="#theUsers" class="indigo-text text-darken-4">USERS</a>
          </li>
          <li class="tab col s12">
              <a href="#theProjects" class="indigo-text text-darken-4">PROJECTS MANAGEMENT</a>
          </li>
          <li class="tab col s12">
              <a href="#theIndex" class="indigo-text text-darken-4">INDEX MANAGEMENT</a>
          </li>
      </ul>

      <!-- User Tab -->
      <?php
        $sql = "SELECT * FROM user"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="row center z-depth-2" id="theUsers">
        <h2 class="header">USERS</h2>
        <ul class="collapsible expandable">
          <?php foreach($data as $userInfos){ ?>
            <li>
              <div class="collapsible-header"><h3 class="header"><?php echo $userInfos['user_first_name']." ".$userInfos['user_last_name'] ?></h3></div>
              <div class="collapsible-body">
                <form class="right" action="delete_project.php">
                  <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                </form>
                <ul>
                  <li><p>USER ID : <?php echo $userInfos['user_id']; ?></p></li>
                  <li><p>FIRST NAME : <?php echo $userInfos['user_first_name']; ?></p></li>
                  <li><p>LAST NAME : <?php echo $userInfos['user_last_name']; ?></p></li>
                  <li><p>USER ROLE : <?php echo ($userInfos['user_role']) ? 'Admin' : ''; ?></p></li>
                  <li><p>EMAIL : <?php echo $userInfos['user_email']; ?></p></li>
                </ul>
                <ul class="collapsible expandable">
                  <li>
                    <div class="collapsible-header">
                      <p>MODIFY CONTENT</p>
                    </div>
                    <div class="collapsible-body white">
                      <div class="section center">
                        <form class="col s12" action="config/edit_user.php?id=<?php echo $userInfos['user_id'] ?>" method="POST">
                          <div class="row">
                            <?php foreach($data as $userKey => $userInfos){ ?>
                              <div class="input-field col s12">
                                <label for="name"><?php echo $userKey ?></label>
                                <textarea id="textarea3" class="materialize-textarea" name="<?php echo $userKey ?>"><?php echo $userInfos; ?></textarea>
                              </div>
                            <?php } ?>
                          </div>
                          <button type="submit" class="btn-large right green">SAVE</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
      
      <!-- Project Tab -->
      <?php
        $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="row center z-depth-2" id="theProjects">
        <h2 class="header">PROJECTS</h2>
        <ul class="collapsible expandable">
          <?php foreach($data as $projectInfos){ ?>
            <li>
              <div class="collapsible-header"><h3 class="header"><?php echo "Project n°".$projectInfos['project_id']." / ".$projectInfos['title_1'] ?></h3></div>
              <div class="collapsible-body">
                <form class="right" method="post" action="config/delete_project.php">
                  <input type="hidden" name="deleteProject" value="<?php echo $projectInfos['project_id']; ?>">
                  <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                </form>
                <h4><?php echo $projectInfos['title_2']; ?></h4>
                <p><?php echo $projectInfos['paragraph_1']; ?></p>
                <ul class="collapsible expandable">
                  <li>
                    <div class="collapsible-header">
                      <p>MODIFY CONTENT</p>
                    </div>
                    <div class="collapsible-body white">
                      <div class="section center">
                        <form class="col s12" action="config/edit_project.php?id=<?php echo $projectInfos['project_id'] ?>" method="POST">
                          <div class="row">
                            <?php foreach($projectInfos as $projectKey => $projectInfos){ ?>
                              <div class="input-field col s12">
                                <label for="name"><?php echo $projectKey ?></label>
                                <textarea id="textarea" class="materialize-textarea" name="<?php echo $projectKey ?>"><?php echo $projectInfos; ?></textarea>
                              </div>
                            <?php } ?>
                          </div>
                          <button type="submit" class="btn-large right green">SAVE</button>
                        </form>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          <?php } ?>
        </ul>
        <button type="submit" class="modal-trigger btn-floating btn-large waves-effect waves-light green" data-target="modal-add-project"><i class="material-icons">add</i></button>
      </div>
      
      <?php
        $sql = "SELECT * FROM project"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <!-- Modal Project Add -->
      <div id="modal-add-project" class="modal">
        <div class="modal-content">
          <section class="section container">
            <h2>Create Your Own Project !</h2>
            <form class="col s12" action="config/add_project.php" method="post">
              <div class="row">
                <?php foreach($data[0] as $projectKey => $projectInfos){ ?>
                  <div class="input-field col s12">
                    <label for="name"><?php echo $projectKey ?></label>
                    <textarea id="textarea" class="materialize-textarea" name="<?php echo $projectInfos ?>"></textarea>
                  </div>
                <?php } ?>
              </div>
              <button type="submit" class="btn-large right green">SAVE</button>
            </form>
          </section>
        </div>
        <div class="modal-footer">

        </div>
      </div>
      
      <!-- Index Tab -->
      <?php
        $sql = "SELECT * FROM index_content"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetch(PDO::FETCH_ASSOC); 
      ?>
      <div class="container row center z-depth-2 white" id="theIndex">
        <h2>Edit Index</h2>
        <ul class="collapsible">
          <form class="col s12" action="config/edit_index.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <?php foreach($data as $indexKey => $indexInfos){
                if(isImage($indexInfos) == true){ ?>
                  <div class="row">
                    <div class="file-field input-field">
                      <div class="btn">
                          <span>File</span>
                          <input type="file" name=<?php echo $indexKey ?>>
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" name=<?php echo $indexKey ?> placeholder=<?php echo "'$indexKey'" ?>>
                      </div>
                    </div>
                  </div>
              <?php } else { ?>
                    <div class="row">
                      <div class="input-field col s12">
                        <label for="name"><?php echo $indexKey ?></label>
                        <textarea id="textarea1" class="materialize-textarea" name="<?php echo $indexKey; ?>"><?php echo $indexInfos; ?></textarea>
                      </div>
                    </div>
              <?php } 
              } ?>
            </div>
            <div>
              <input type="submit" class="btn-large right green" value="Save">
            </div>
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