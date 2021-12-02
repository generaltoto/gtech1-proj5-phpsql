<!-- Login Form -->
<div id="modal-login" class="modal" >
  <div class="modal-content">
    <section class="section container contact">
      <h2 class="header center">~ Login ~</h2>
      <form method="post" action="config/login.php">
        <div class="input-field row">
          <div class="col s12">
            <i class="far fa-envelope"></i>
            <label for="email">Email</label>
            <input type="email" name="email">
            <span class="red-text"><?php echo isset($_GET['emailErr'])?$_GET['emailErr']:''; ?></span>
          </div>
          <div class="col s12">
            <i class="fas fa-lock"></i>
            <label for="password">Password</label>
            <input type="password" name="password">
            <span class="red-text"><?php echo isset($_GET['passwordErr'])?$_GET['passwordErr']:''; ?></span>
          </div>
          <p>Don't have an account? <a onclick="modalCloseLogin()" href="#!"">Register here</a>.</p>
          <span class="invalid"><?php echo isset($_GET['loginErr'])?$_GET['loginErr']:''; ?></span>
        </div>
        <div class="modal-footer">
          <input type="submit" class="waves-effect waves-green btn-flat" value="login">
        </div>
      </form>
    </section>
  </div>
</div>
