<!DOCTYPE html>
<html lang="en" dir="ltr" id="index">
  <head>
    <title>Team Projects : Quick Presentation</title>
    <meta name="description" content="Presentation of our team projects through 3 different pages.">
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.png">
    <!-- Import Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <header class="index-header">
      <!-- NAVBAR & BACKGROUND -->
      <nav class="nav-wrapper z-depth-3">
        <div class="container">
            <a href="#" class="brand-logo">Portfolio</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="project1.html">Destiny 2</a></li>
              <li><a href="project2.html">HunterZ</a></li>
              <li><a href="project3.html">Beneath The Sins</a></li>
              <li><a class="modal-trigger waves-effect waves-light btn text-color grey darken-4" data-target="modal-contact" id="nav-button">CONTACT US</a></li>
            </ul>
        </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="index.html">Home</a></li>
          <li><a href="project1.html">Destiny 2</a></li>
          <li><a href="project2.html">HunterZ</a></li>
          <li><a href="project3.html">Beneath The Sins</a></li>
          <li><a class="modal-trigger waves-effect waves-light btn grey darken-4" data-target="modal-contact">CONTACT US</a></li>
        </ul>
        <div class="container">
          <br><br>
          <h1 class="header center white-text">Team Projects</h1>
          <div class="row center">
              <h2 class="header col s12 light white-text">Discover our projects through this website</h2>
          </div>
      </div>
    </header>

    <!-- COPY SECTION  -->
    <section id="hidden">
      <h2>hidden section</h2>
      <p id="discord-thomas">general tøtø#5096</p>
      <p id="discord-arthur">Arthur~#0042</p>
      <p id="email-thomas">tdelorme@gaming.tech</p>
      <p id="email-arthur">ajouve@gaming.tech</p>
    </section>


    <!-- TEAM -->
    <div class="container z-depth-4" id="team">
      <h2 class="header white-text center">The Team</h2>
      <div class="row white-text">
        <div class="col s12 m12 l6">
          <div class="card z-depth-3 row">
            <div class="card-image col s12 m12 l12 xl5 center">
              <img src="img/indexthomas.jpg" class="responsive-img" alt='Thomas Delorme Team Projects Image'>
            </div>
            <div class="card-stacked col s12 m12 l12 xl7">
              <div class="card-content">
                <h3 class="header">Thomas Delorme</h3>
              </div>
            </div>
            <div class="card-stacked col s12">
              <p>
                "I’m 17 years old and I got my baccalaureate in France (during the pandemic for what it’s worth). 
                I am currently studying computing sciences at Gaming Campus and made this awesome website with my partner to show what I could learn from scratch in 3 weeks." 
              </p>
              <div class="card-action">
                <ul class="social">
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='tdelorme@gaming.tech (clic to copy)' onclick="copyToClipboard('#email-thomas')"><i class="far fa-envelope"></i></a></li>
                  <li><a href="https://github.com/generaltoto" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='generaltoto (clic)'><i class="fab fa-github"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/thomas-delorme-94abb8221/" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='Thomas Delorme (clic)'><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='general tøtø#5096 (clic to copy)' onclick="copyToClipboard('#discord-thomas')"><i class="fab fa-discord"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l6">
          <div class="card z-depth-3 row">
            <div class="card-image col s12 m12 l12 xl5">
              <img src="img/indexarthur.jpg" class="responsive-img" alt='Arthur Jouve Team Projects Image'>
            </div>
            <div class="card-stacked col s12 m12 l12 xl7">
              <div class="card-content">
                <h3 class="header">Arthur Jouve</h3>
              </div>
            </div>
            <div class="card-stacked col s12">
              <p>
                "I am Arthur, I have been working at the gaming campus for 1 year. 
                I am trained at developing on various projects in video games industry and web. This is why I am actually working on this fantastic project with my fabulous mate. It's a beautiful day, isn't it ?" 
              </p>
              <div class="card-action">
                <ul class="social">
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='ajouve@gaming.tech (clic to copy)' onclick="copyToClipboard('#email-arthur')"><i class="far fa-envelope"></i></a></li>
                  <li><a href="https://github.com/Falaron" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='Falaron (clic)'><i class="fab fa-github"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/arthur-jouve-113293211/" target='_blank' class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='Arthur Jouve (clic)'><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#" class="tooltipped btn-floating btn-large teal darken-3" data-tooltip='Arthur~#0042 (clic to copy)'><i class="fab fa-discord" onclick="copyToClipboard('#discord-arthur')"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container" id="index-container">
      <div class="parallax">
          <img src="img/indexparallax.jpg" alt="Projects Parallax Image">
      </div>
    </div>

    <!-- PROJECTS -->
    <section class="container section white-text z-depth-4" id="project">
      <h2 class="header center">Our projects so far ...</h2>
      <div class="row z-depth-3">
        <div class="col s12 m12 l12 xl4 center">
          <img src="img/indexcode.jpg" alt="Projects Code Image" class="responsive-img">
        </div>
        <div class="col s12 m12 l12 xl8">
          <h3 class="header">Destiny 2 website</h3>
          <p>
            2 weeks to create a website presenting a beloved game, when half of the group 
            don’t know anything about html, css or JavaScript … That’s what we can call a challenge, which turned out pretty well.
          </p>
          <p>
            Destiny 2 is a massive game with a lot of content to cover, only two hard-fans could manage to sum everything up. We hope being able to post
            it soon.
          </p>
        </div>
      </div>
      <div class="row z-depth-3">
        <div class="col s12 m12 l12 xl4 push-xl8 center">
          <img src="img/indexhz.jpg" alt="Project HunterZ Image" class="responsive-img">
        </div>
        <div class="col s12 m12 l12 xl8 pull-xl4">
          <h3 class="header">HunterZ Minecraft Server</h3>
          <p>
            This is a modpack, an additional content of Minecraft made by our team. It gives you acces to a new gameplay, map and way of playing. 
            The goal is to survive in a zombie-infested world.
            You will have at your disposal hundreds of unique items that will allow you to fight, search for materials to fight, 
            in a universe as disturbing as it is exciting.
          </p>
        </div>
      </div>
      <div class="row z-depth-3">
        <div class="col s12 m12 l12 xl4 center">
          <img src="img/indexbts.jpg" alt="Projects Beneath The Sins Image" class="responsive-img">
        </div>
        <div class="col s12 m12 l12 xl8">
          <h3 class="header">Beneath The Sins</h3>
          <p>This is a Game Concept of a lifetime. A project that requires a lot of effort, creativity and skill to hope to develop a playable and enjoyable game.</p>
          <p>Beneath the Sins plunges you into a dark universe. Imprisoned 6 feet under the ground after committing the deadly sins, you will have to overcome your greatest fears to hope to redeem yourself, if you can...</p>
        </div>
      </div>
    </section>

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
          <h2 class="white-text">Arthur</h2>
          <ul class="social">
              <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='ajouve@gaming.tech (clic to copy)'><i class="far fa-envelope" onclick="copyToClipboard('#email-arthur')"></i></a></li>
              <li><a href="https://github.com/Falaron" target='_blank' rel="nofollow" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='Falaron (clic)'><i class="fab fa-github"></i></a></li>
              <li><a href="https://www.linkedin.com/in/arthur-jouve-113293211/" target='_blank' rel="nofollow" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='Arthur Jouve (clic)'><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='Arthur~#0042 (clic to copy)'><i class="fab fa-discord" onclick="copyToClipboard('#discord-arthur')"></i></a></li>
          </ul>
        </div>
        <div class="col s12 l3">
        <h2 class="white-text">Thomas</h2>
        <ul class="social">
            <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='tdelorme@gaming.tech (clic to copy)'><i class="far fa-envelope" onclick="copyToClipboard('#email-thomas')"></i></a></li>
            <li><a href="https://github.com/generaltoto" target='_blank' rel="nofollow" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='generaltoto (clic)'><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/thomas-delorme-94abb8221/" target='_blank' rel="nofollow" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='Thomas Delorme (clic)'><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#" class="tooltipped btn-floating btn-small teal darken-3" data-tooltip='general tøtø#5096 (clic to copy)' onclick="copyToClipboard('#discord-thomas')"><i class="fab fa-discord"></i></a></li>
        </ul>
        </div>
        <div class="col s12 l3">
          <h2 class="white-text">Menu</h2>
          <ul>
              <li><a href="index.html" class="grey-text text-lighten-3">Home</a></li>
              <li><a href="project1.html" class="grey-text text-lighten-3">Destiny 2 project</a></li>
              <li><a href="project2.html" class="grey-text text-lighten-3">HunterZ project</a></li>
              <li><a href="project3.html" class="grey-text text-lighten-3">Beneath the sins project</a></li>
          </ul>
        </div>
        <div class="col s12 l3">
          <h2 class="white-text">Some Links</h2>
          <ul>
              <li><a href="https://bungie.net" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Destiny 2 official page</a></li>
              <li><a href="https://hunterz-assaderie.com" target='_blank' class="grey-text text-lighten-3">HunterZ official page</a></li>
              <li><a href="#" class="grey-text text-lighten-3" id="easteregg-color">Beneath the Sins Project</a></li>
              <li><a href="https://gamingcampus.fr" target='_blank' rel="nofollow" class="grey-text text-lighten-3">Gaming Campus</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-copyright">
          <div class="container">&copy; All right reserved toto & tutur</div>
      </div>
      </div>
  </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>