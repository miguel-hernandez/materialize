<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>


    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Gestión Escolar MS</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="mobile.html">Cerrar sesión</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>

      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br><br>
          <h1 class="header center orange-text">Starter Template</h1>
          <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
          </div>
          <div class="row center">
            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
          </div>
          <br><br>

        </div>
      </div><!-- .section no-pad-bot -->


      <div class="container">
        <div class="section">

          <!--   Icon Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Speeds up development</h5>

                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                <h5 class="center">User Experience Focused</h5>

                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Easy to work with</h5>

                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
              </div>
            </div>
          </div>

        </div>
        <br><br>
      </div>

      <footer class="page-footer orange">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Company Bio</h5>
              <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Settings</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
              </ul>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Connect</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
          </div>
        </div>
      </footer>


      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>



      <div class="sidenav-overlay"></div><div class="drag-target"></div></body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">

    (function($){
      $(function(){
        $('.sidenav').sidenav();
      }); // end of document ready
    })(jQuery); // end of jQuery name space

    </script>
  </body>
</html>
