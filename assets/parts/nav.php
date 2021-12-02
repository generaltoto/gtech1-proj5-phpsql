<?php
  require ('connexion_login.php');
  require ('connexion_register.php');
  require ('assets/parts/projects-modal.php');

  // to print bonjour depending on if you registered or logged in
  if (isset($_SESSION['user'][':firstName'])){
    $bonjour = $_SESSION['user'][':firstName'];
  } elseif (isset($_SESSION['user']['user_first_name'])){
    $bonjour = $_SESSION['user']['user_first_name'];
  }
  ?>

<!-- NAVBAR ON PC -->
<nav class="nav-wrapper z-depth-3">
  <div class="container">
      <a href="index.php" class="brand-logo">Portfolio</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a class="modal-trigger" data-target="modal-projects">Projects</a></li>
        <li><a class="modal-trigger waves-effect waves-light btn text-color grey darken-4" data-target="modal-contact" id="nav-button">CONTACT US</a></li>

        <!-- changing button to trigger the correct button with the correct dropdown -->
        <?php if($_SESSION['login'] == false) { ?>
          <li><a class='dropdown-trigger btn-floating waves-effect waves-light grey darken-4' href='#' data-target='dropdown_out'><i class="material-icons">account_circle</i></a></li>
        <?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 0) { ?>
          <li><a class='dropdown-trigger btn-floating waves-effect waves-light grey darken-4' href='#' data-target='dropdown_in'><i class="material-icons">account_circle</i></a></li>
        <?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 2) { ?>
          <li><a class='dropdown-trigger btn-floating waves-effect waves-light grey darken-4' href='#' data-target='dropdown_admin'><i class="material-icons">account_circle</i></a></li>
        <?php } ?>

        <li><span> <?php echo ($_SESSION['login'] == true) ? "Bonjour ".$bonjour : 'You are logged out'; ?> </span></li>  
      </ul>
  </div>
</nav>

<!-- dropdown structure  -->
<?php if($_SESSION['login'] == false) { // not logged in --> Log In & Register?> 
  <ul id='dropdown_out' class='dropdown-content'>
    <li><a class="modal-trigger" data-target="modal-login" href="connexion_login.php">Log In</a></li>
    <li><a class="modal-trigger" data-target="modal-register" href="connexion_register.php">Register</a></li> 
  </ul>

<?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] < 2) { // logged in but not admin --> Log Out ?>
  <ul id='dropdown_in' class='dropdown-content'>
    <li><a href="config/logout.php">Log Out</a></li>
  </ul>

<?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 2) { // logged in and admin --> Log Out & Admin ?>
  <ul id='dropdown_admin' class='dropdown-content'>
    <li><a href="config/logout.php">Log Out</a></li>
    <li><a href="admin.php">Admin</a></li>
  </ul>
<?php } ?>


<!-- MOBILE NAVBAR -->
<ul class="sidenav" id="mobile-demo">
  <li><a href="index.php">Home</a></li>
  <li><a class="modal-trigger" data-target="modal-projects">Projects</a></li>
  <li><a class="modal-trigger waves-effect waves-light btn grey darken-4" data-target="modal-contact">CONTACT US</a></li>

  <!-- changing button to trigger the correct button with the correct dropdown -->
  <?php if($_SESSION['login'] == false) { ?>
    <li><a class='dropdown-trigger modal-trigger waves-effect waves-light btn grey darken-4' href='#' data-target='dropdown_out_phone'>Account</a></li>
  <?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 0) { ?>
    <li><a class='dropdown-trigger modal-trigger waves-effect waves-light btn grey darken-4' href='#' data-target='dropdown_in_phone'>Account</a></li>
  <?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 2) { ?>
    <li><a class='dropdown-trigger modal-trigger waves-effect waves-light btn grey darken-4' href='#' data-target='dropdown_admin_phone'>Account</a></li>
  <?php } ?>
</ul>

<!-- dropdown strcture -->
<?php if($_SESSION['login'] == false) { // not logged in --> Log In & Register?> 
  <ul id='dropdown_out_phone' class='dropdown-content'>
    <li><a class="modal-trigger" data-target="modal-login" href="connexion_login.php">Log In</a></li>
    <li><a class="modal-trigger" data-target="modal-register" href="connexion_register.php">Register</a></li> 
  </ul>

<?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] < 2) { // logged in but not admin --> Log Out ?>
  <ul id='dropdown_in_phone' class='dropdown-content'>
    <li><a href="config/logout.php">Log Out</a></li>
  </ul>

<?php } elseif ($_SESSION['login'] == true && $_SESSION['role'] == 2) { // logged in and admin --> Log Out & Admin ?>
  <ul id='dropdown_admin_phone' class='dropdown-content'>
    <li><a href="config/logout.php">Log Out</a></li>
    <li><a href="../admin.php">Admin</a></li>
  </ul>
<?php } ?>
