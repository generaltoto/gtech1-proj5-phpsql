<!-- CONTACT -->
<div class="container center contact">
  <button data-target="modal-contact" class="btn-large modal-trigger grey darken-4 z-depth-3">Contact Us</button>
</div>
<div id="modal-contact" class="modal">
  <div class="modal-content">
    <section class="section container contact">
      <h2 class="header center">~ Contact Us ~</h2>
      <form>
        <div class="input-field row">
          <div class="col s12 m12 l6">
            <i class="fas fa-user"></i>
            <label for="fname">First Name</label>
            <input type="text" id="fname">
          </div>
          <div class="col s12 m12 l6">
            <i class="far fa-user"></i>
            <label for="lname">Last Name</label>
            <input type="text" id="lname">
          </div>
        </div>
        <div class="input-field row">
          <div class="col s12">
            <i class="far fa-envelope"></i>
            <label for="email">Your email</label>
            <input type="email" id="email">
          </div>
          <div class="col s12">
            <i class="fas fa-reply"></i>
            <label for="text">Your message</label>
            <textarea id="text" class="materialize-textarea" cols='30' rows='10'></textarea>
          </div>
        </div>
      </form>
    </section>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
  </div>
</div>

<!-- FOOTER -->
<footer class="page-footer teal darken-4" id="footer">
  <div class="container center">
  <div class="row">
    <div class="col s12 l3">
      <h2 class="white-text"><?php echo $data['name_text_2']; ?></h2>
      <ul class="social">
        <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['mail_2']; ?> (clic to copy)' onclick="copyToClipboard('#email-arthur')"><i class="far fa-envelope"></i></a></li>
        <li><a href="<?php echo $data['github_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['github_2']; ?> (clic)'><i class="fab fa-github"></i></a></li>
        <li><a href="<?php echo $data['linkedin_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['linkedin_2']; ?> (clic)'><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['discord_2']; ?> (clic to copy)'><i class="fab fa-discord" onclick="copyToClipboard('#discord-arthur')"></i></a></li>
      </ul>
    </div>
    <div class="col s12 l3">
    <h2 class="white-text"><?php echo $data['name_text_1']; ?></h2>
    <ul class="social">
      <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['mail_1']; ?> (clic to copy)' onclick="copyToClipboard('#email-thomas')"><i class="far fa-envelope"></i></a></li>
      <li><a href="<?php echo $data['github_link_1']; ?>" target='_blank' class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['github_1']; ?> (clic)'><i class="fab fa-github"></i></a></li>
      <li><a href="<?php echo $data['linkedin_link_2']; ?>" target='_blank' class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['linkedin_1']; ?> (clic)'><i class="fab fa-linkedin"></i></a></li>
      <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='<?php echo $data['discord_1']; ?> (clic to copy)' onclick="copyToClipboard('#discord-thomas')"><i class="fab fa-discord"></i></a></li>
    </ul>
    </div>
    <div class="col s12 l3">
      <h2 class="white-text">Some Projects</h2>
      <ul>
          <li><a href="https://bungie.net" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Destiny 2 official page</a></li>
          <li><a href="https://hunterz-assaderie.com" target='_blank' class="grey-text text-lighten-3">HunterZ official page</a></li>
          <li><a href="#" class="grey-text text-lighten-3" id="easteregg-color">Beneath the Sins Project</a></li>
          <li><a href="https://gamingcampus.fr" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Gaming Campus</a></li>
      </ul>
    </div>
    <div class="col s12 l3">
      <h2 class="white-text">Legal Section</h2>
      <div class="container">
        <ul>
            <li><a href="https://en.wikipedia.org/wiki/Privacy_policy" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Legal and privacy policy</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Terms_of_service" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Terms of service</a></li>
        </ul>
      </div>
    </div>
  </div>
    <div class="footer-copyright">
        <div class="container">&copy; All right reserved toto & tutur</div>
    </div>
  </div>
</footer>