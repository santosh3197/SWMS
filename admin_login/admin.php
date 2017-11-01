<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="fonts/font.css" rel="stylesheet">

    <!--Acme font-->
    <link href="fonts/gfont.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
      .background {
  background-color:lightseagreen;
}
      .top-nav {
          margin-top: -53px;
          margin-left: -28px;
          height: 200px;
          background-color: lightseagreen;
      }
      .title {
          font-family: 'Acme', sans-serif;
          font-size: 90px;
          text-align: center;
          padding-top: 55px;
      }
      #head {
          font-family: 'Acme',sans-serif;
          text-align: center;
          padding-top: 150px;
          padding-bottom: 30px;
          font-size: 80px;
          padding-left:350px;
        }
  </style>
  </head>
  <body>
      <!--Side Navigation-->
      <ul id="slide-out" class="side-nav fixed z-depth-4">
        <li><div class="user-view">
          <div class="background">
          </div>
          <a href="#!user">
             <img class="circle" src="images/admin.jpg">
              <!--<i class="material-icons large white">account_circle</i>-->
          </a>
          <a href="#!name"><span class="white-text name">santosh</span></a>
          <a href="#!email"><span class="white-text email">santosh.sc53@gmail.com</span></a>
        </div></li>
        <li><a href="admin.php"><i class="material-icons">home</i>HOME</a></li>
        <li><div class="divider"></div></li>
        <!--<li><a class="waves-effect" href="#!"><i class="material-icons">assignment_ind</i>STAFF LOGINS</a></li>-->
        <li><a class="waves-effect" href="collection/index.php"><i class="material-icons">collections</i>COLLECTION DETAILS</a></li>
        <li><a class="waves-effect" href="segregation/index.php"><i class="material-icons">developer_board</i>SEGREGATION DETAILS</a>    </li>
        <li><a class="waves-effect" href="transportation/index.php"><i class="material-icons">local_shipping</i>TRANSPORT DETAILS</a></li>
        <li><a class="waves-effect" href="disposal/index.php"><i class="material-icons">delete_sweep</i>DISPOSAL DETAILS</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="logout.php"><i class="material-icons">account_circle</i>LOGOUT</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
         
      <!--Title-->
      <div class="row">
            <div class="col s3"></div>
            <div class="col s9">
                    <nav class="top-nav z-depth-4">
                            <div class="container">
                              <div class="nav-wrapper"><a class="page-title">
                                <h2 class="title">
                                   <div class="text">ADMINISTRATOR</div>
                                </h2>      
                               </a></div>
                            </div>
                    </nav>
           </div>
        </div>
        <h1 id="head" class="black-text">Welcome</h1>
  </body>
   <!--Import jQuery before materialize.js-->
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
</html>
      