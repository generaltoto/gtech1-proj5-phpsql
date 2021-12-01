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
      <div class="container" id="theUsers">
        <h2 class="header center">USERS</h2>
        <table class="center" >
          <thead>
            <tr>
              <th>ID</th>
              <th>ROLE</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>EMAIL</th>
              <th>SUPPR</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $userNames){ ?>
              <tr>
                <th><?php echo $userNames['user_id']; ?></th>
                <th><?php echo ($userNames['user_role'] == 2) ? 'ADMIN' : ''; ?></th>
                <th><?php echo $userNames['user_first_name']; ?></th>
                <th><?php echo $userNames['user_last_name']; ?></th>
                <th><?php echo $userNames['user_email']; ?></th>
                <th>
                  <form method="post" action="config/delete_user.php" class="col s12 m12 l1 red-text">
                    <input type="hidden" name='delete' value="<?php echo $userNames['user_id'] ?>">
                    <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                  </form>
                </th>
              </tr>
            <?php } ?>
          </tbody>
        </table>
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
              <div class="collapsible-header"><p class="header"><?php echo "Project n°".$projectInfos['project_id']." / ".$projectInfos['title_1'] ?></p></div>
              <div class="collapsible-body">
                <h3><?php echo $projectInfos['title_2']; ?></h3>
                <p><?php echo $projectInfos['paragraph_1']; ?></p>
                <form class="right" action="delete_project.php">
                  <input type="hidden" value="<?php echo $projectInfos['project_id']; ?>">
                  <button type="submit" name="deleteProject" class="collection-title btn-floating waves-effect waves-light grey lighten-1"><i class="fas fa-edit"></i></button>
                  <button type="submit" class="btn-floating waves-effect waves-light red"><i class="fas fa-trash-alt"></i></button>
                </form>
              </div>
            </li>
          <?php } ?>
        </ul>
        <form class="center" action="edit_project.php">
          <input type="hidden" value="<?php echo $projectInfos['project_id']; ?>">
          <button type="submit" class="btn-large center green">ADD A PROJECT</i></button>
        </form>
        
      </div>

      <?php
        $sql = "SELECT * FROM index_content"; 
        $pre = $pdo->prepare($sql); 
        $pre->execute();
        $data = $pre->fetchAll(PDO::FETCH_ASSOC); 
      ?>
      <div class="container row center z-depth-2" id="theIndex">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore adipisci fuga laudantium dignissimos. Adipisci, iste? Praesentium quam similique magni aliquam nemo totam eius accusamus obcaecati facilis quas, saepe reprehenderit nam.</p>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>