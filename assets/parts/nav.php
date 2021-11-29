<?php require ('connexion_login.php'); ?>
<?php require ('connexion_register.php'); ?>

<!-- NAVBAR -->
<nav class="nav-wrapper z-depth-3">
  <div class="container">
      <a href="index.php" class="brand-logo">Portfolio</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a class="modal-trigger" data-target="modal-projects">Projects</a></li>
        <li><a class="modal-trigger waves-effect waves-light btn text-color grey darken-4" data-target="modal-contact" id="nav-button">CONTACT US</a></li>
        <li><a class='dropdown-trigger btn-floating waves-effect waves-light grey darken-4' href='#' data-target='dropdown2'><i class="material-icons">account_circle</i></a></li>
      </ul>
  </div>
</nav>

<!-- Dropdown Structure -->
<ul id='dropdown2' class='dropdown-content'>
  <li><a class="modal-trigger" data-target="modal-login" href="connexion_login.php">Login</a></li>
  <li><a class="modal-trigger" data-target="modal-register" href="connexion_register.php">Register</a></li>
</ul>

<!-- Mobile NAVBAR -->
<ul class="sidenav" id="mobile-demo">
  <li><a href="index.php">Home</a></li>
  <li><a class="modal-trigger" data-target="modal-projects">Projects</a></li>
  <li><a class="modal-trigger waves-effect waves-light btn grey darken-4" data-target="modal-contact">CONTACT US</a></li>
  <li><a class='dropdown-trigger modal-trigger waves-effect waves-light btn grey darken-4' href='#' data-target='dropdown1'>Account</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id='dropdown1' class='dropdown-content'>
  <li><a class="modal-trigger" data-target="modal-login" href="connexion_login.php">Login</a></li>
  <li><a class="modal-trigger" data-target="modal-register" href="connexion_register.php">Register</a></li>
</ul>
