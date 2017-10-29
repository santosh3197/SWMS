<?php
	session_start();
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Google fonts-->
      <link rel="stylesheet" href="fonts/gfont.css">
      <!--Import Google Icon Font-->
      <link href="fonts/font.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        nav ul li a{
           color: black;
        }
        .container {
          text-align: center;
        }
        #head {
          font-family: 'Acme',sans-serif;
          text-align: center;
          padding-top: 40px;
          padding-bottom: 30px;
          font-size: 80px;
        }
        .row {
          margin-left: 40px;
          margin-right: 40px;
        }
        body {
          background-image: url(images/bg.jpg);
          height: 100vh;
          background-size: cover;
          background-position: center;
        }
      </style>
    </head>

    <body>
      <!--Navigation Bar-->
      <div class="nav-fixed">
        <nav>
            <div class="nav-wrapper white black-text">
              <a href="#" class="brand-logo black-text">Logo</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="Home.html"><i class="material-icons left">home</i>Home</a></li>
                <li><a href="collection/collection.html"><i class="material-icons left">collections</i>Collection</a></li>
                <li><a href="segregation/segregation.htm"><i class="material-icons left">developer_board</i>Segregation</a></li>
                <li><a href="transportation/transport.html"><i class="material-icons left">local_shipping</i>Tranportation</a></li>
                <li><a href="disposal/disposal.html"><i class="material-icons left">delete_sweep</i>Disposal</a></li>
                <li><a href="service/resp.php"><i class="material-icons left">directions_bus</i>Services</a></li>
                <li><a href="logout.php"><i class="material-icons left">account_circle</i>Logout</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <!--Slider-->
        <div class="slider z-depth-5">
            <ul class="slides">
            <!--  <li>
                <img src="https://lorempixel.com/580/250/nature/1">
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>-->
              <li>
                <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                <div class="caption left-align">
                  <h3>MISSION</h3>
                  <h5 class="light grey-text text-lighten-3">To make adequate provision to make all cities, towns and villages clean by ensuring door-to-door collection of garbage, segregation at source, safe transportation of Waste and its scientific disposal.</h5>
                </div>
              </li>
              <li>
                <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                <div class="caption right-align">
                  <h3>VISION</h3>
                  <h5 class="light black-text text-lighten-3">To be a leader in the development, implementation, and maintenance of innovative and sustainable waste reduction, recycling and collection services within an engaged community. </h5>
                </div>
              </li>
              <li>
                <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                <div class="caption center-align">
                  <h3>GOAL</h3>
                  <h5 class="light grey-text text-lighten-3">Securing ecologically sustainable development while promoting justifiable economic and social development, Avoiding and minimizing the generation of waste,Reducing, re-using, recycling and recovering waste, Promoting and ensuring the effective delivery of waste services.</h5>
                </div>
              </li>
            </ul>
          </div>


    <!--Title-->
        <h1 id="head" class="black-text">Management Process</h1>

      <!--Cards-->
      <div class="container">
        <!--Card 1-->
        <div class="row">
                <div class="col s6 m6">
                    <div class="card z-dept-3 hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/transport1.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">COLLECTION<i class="material-icons right">more_vert</i></span>
                          <p><a href="collection/collection.html">Link</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">COLLECTION<i class="material-icons right">close</i></span>
                          <p>Waste collection is the collection of solid waste from
                              point of production (residential, industrial commercial,
                              institutional) to the point of treatment or disposal.
                              Municipal solid waste is collected in several ways:</p>
                              <ul>
                                <li>House-to-House</li>
                                <li> Community Bins</li>
                                <li>Curbside Pick-Up</li>
                                <li>Self Delivered</li>
                                <li> Contracted or Delegated Service</li>
                              </ul>
                        </div>
                      </div>
                    </div>

            <!--Card 2-->
                <div class="col s6 m6">
                    <div class="card z-depth-3 hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/separate.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">SEGREGATION<i class="material-icons right">more_vert</i></span>
                          <p><a href="segregation/segregation.htm">Link</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">SEGREGATION<i class="material-icons right">close</i></span>
                          <p>There are certain wastes / garbage items are kept aside to be sold to Kabadiwala or the Person who
                              Buy old items. These can newspaper, used bottles, magazines, carry bags, old books, Oil cans,
                              Glass, Paper Etc. Waste can be segregated:</p>
                              <ul>
                                <li>Bio Degradable Waste</li>
                                <li>Non Bio Degradable Waste</li>
                              </ul>
                        </div>
                      </div>
                  </div>
              </div>


        <!--Card 3-->
        <div class="row">
            <div class="row">
                <div class="col s6 m6">
                    <div class="card z-dept-3 hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/transport.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">TRANSPORT<i class="material-icons right">more_vert</i></span>
                          <p><a href=transportation/transport.html>Link</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">TRANSPORT<i class="material-icons right">close</i></span>
                          <p>Hazardous waste transporters are individuals or entities that move hazardous waste from one site to another by highway, rail, water, or air. Hazardous waste transporters play an integral role in the hazardous waste management system by delivering hazardous waste from its point of generation to ultimate destination. This includes transporting hazardous waste from a generator's site to a facility that can recycle, treat, store or dispose of the waste. It can also include transporting treated hazardous waste to a site for further treatment or disposal.</p>
                        </div>
                      </div>
                    </div>

            <!--Card 4-->
                <div class="col s6 m6">
                    <div class="card z-depth-3 hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/disposal.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">DISPOSAL<i class="material-icons right">more_vert</i></span>
                          <p><a href="disposal/disposal.html">Link</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">DISPOSAL<i class="material-icons right">close</i></span>
                          <p>It is used to dispose of solid, liquid and gaseous waste. It is recognized as a practical method of disposing of certain hazardous waste materials (such as biological medical waste). Incineration is a controversial method of waste disposal, due to issues such as emission of gaseous pollutants.</p>
                        </div>
                      </div>
                  </div>
              </div>
        </div>
      </div>

        <!--Footer-->
        <footer class="page-footer grey darken-1">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">MIRA_RD-BHAYANDAR MNP</h5>
                  <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2014 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
          </footer>

    </body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	   <script>
        $(document).ready(function(){
          $('.slider').slider({full_width:true});
        });
      </script>
  </html>
