<!-- Register Form  -->
<div id="modal-register" class="modal">
  <div class="modal-content">
    <section class="section container register">
      <h2 class="center center">~ Register ~</h2>
      <form method="post" action="config/register.php">
        <div class="input-field row">
          <div class="col s12 m12 l6">
            <i class="far fa-user"></i>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName">
            <span class="invalid"><?php echo isset($_GET['firstNameErr'])?$_GET['firstNameErr']:''; ?></span>
          </div>
          <div class="col s12 m12 l6">
            <i class="fas fa-user"></i>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName">
            <span class="invalid"><?php echo isset($_GET['lastNameErr'])?$_GET['lastNameErr']:''; ?></span>
          </div>
          <div class="col s12">
            <i class="far fa-envelope"></i>
            <label for="email">Email</label>
            <input type="text" name="email">
            <span class="invalid"><?php echo isset($_GET['emailErr'])?$_GET['emailErr']:''; ?></span>
          </div>
          <div class="col s12 m12 l12 xl6">
            <i class="fas fa-lock"></i>
            <label for="password">Password</label>
            <input type="password" name="password">
            <span class="invalid"><?php echo isset($_GET['passwordErr'])?$_GET['passwordErr']:''; ?></span>
          </div>
          <div class="col s12 m12 l12 xl6">
            <label for="confirmPassword">Verify Password</label>
            <input type="password" name="confirmPassword">
            <span class="invalid"><?php echo isset($_GET['confirmPasswordErr'])?$_GET['confirmPasswordErr']:''; ?></span>
          </div>
          <p>Already have an account? <a onclick="modalCloseRegister()" href="#!">Login here</a>.</p>
        </div>
        <div class="modal-footer">
          <input type='submit' class="waves-effect waves-green btn-flat" value='Register'>
        </div>
      </form>
    </section>
  </div>
</div>
