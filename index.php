 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> Company Portal</title>
    </head>

    <body>

        <div class="navbar-fixed">
          <nav class="blue darken-2">
            <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">Agung Profile</a>
               <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="">About US</a></li>
                <li><a href="">Clients</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">Contact Us</a></li>
              </ul>
              </div>
              </div>
            </nav>
          </div>


          <!-- sidenav -->

          <ul class="sidenav" id="mobile-nav">
            <li><a href="">About US</a></li>
            <li><a href="">Clients</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Portfolio</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>


          <!-- slider -->
          <div class="slider">
            <ul class="slides">
              <li>
                <img src="img/slider/1.png"> 
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="img/slider/2.png"> 
                <div class="caption left-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                <img src="img/slider/3.png"> 
                <div class="caption right-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>

    <!-- About -->
    <section id="abot" class="about">
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">About Us</h3>
          <div class="col m6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>

          <div class="col m6">
            <p>WEB DEVELOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 95%"></div>
            </div>

            <p>APP DEVELOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 80%"></div>
            </div>

            <p>MOBILE DEVELOPMENT</p>
            <div class="progress">
              <div class="determinate blue" style="width: 95%"></div>
            </div>
          </div>

        </div>
      </div>
      
    </section>


    <!-- clients -->
    <div class="parallax-container">
      <div class="parallax"><img src="img/slider/4.png"></div>

      <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 center">
            <img src="img/clients/gojek.png">
          </div>
          <div class="col m4 center">
            <img src="img/clients/tokopedia.png">
          </div>
          <div class="col m4 center">
            <img src="img/clients/traveloka.png">
          </div>

        </div>
      </div>
    </div>

        

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>
         const sideNav = document.querySelectorAll('.sidenav');
         M.Sidenav.init(sideNav);


         const slider = document.querySelectorAll('.slider');
         M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
         });

         const parallax = document.querySelectorAll('.parallax');
         M.Parallax.init(parallax, {
          responsiveThreshold: 3
         });


      </script>






    </body>
  </html>