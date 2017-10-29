<?php

	// Import PHPMailer classes into the global namespace
	// These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	if(isset($_POST['submit'])) {
		$date = $_POST['date'];
		$email =$_POST['email'];
		$message = $_POST['message'];
		$ran = rand();

	//Load composer's autoloader
	require 'vendor/autoload.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	   // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'projectsample0@gmail.com';                 // SMTP username
	    $mail->Password = 'sample2017';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('projectsample0@gmail.com', 'MNP-Gov');

	    $mail->addAddress($email);     // Add a recipient


	    $body = "<p><strong>Acknowledgement</strong>,<br><br> Date:-" . $date ."<br> Complaint ID:- ". $ran . " <br>Message:- ". $message ."</p>";

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Complaint';
	    $mail->Body    = $body;
	    $mail->AltBody = strip_tags($body);

	    if($mail->send()) {
				 echo "<script> alert('Acknowledgement has been sent');</script>";
			}
			else {
				echo "<script> alert('Acknowledgement not sent');</script>";
			}

	} catch (Exception $e) {
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}
?>
<!DOCTYPE html>
 <html>
	 <head>
		 <!--Import Google Icon Font-->
		 <link href="fonts/font.css" rel="stylesheet">
		 <!--Import materialize.css-->
		 <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
			<link href="fonts/gfont.css" rel="stylesheet">
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
							 padding-top: 60px;
					 }
		 h1 {
			 font-family: 'Acme', sans-serif;
			 text-align: center;
			 font-size: 60px;
		 }
			 </style>

		 <!--Let browser know website is optimized for mobile-->
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	 </head>

	 <body>

					 <ul id="slide-out" class="side-nav fixed z-depth-4">
									 <li><div class="user-view">
										 <div class="background">
										 </div>
										 <a href="#!user">
												<img class="circle" src="images/admin.jpg">
												 <!--<i class="material-icons large white">account_circle</i>-->
										 </a>
										 <a href="#!name"><span class="white-text name">Santosh</span></a>
										 <a href="#!email"><span class="white-text email">santosh.sc53@gmail.com</span></a>
									 </div></li>
									 <li><a href="../Home.php"><i class="material-icons">home</i>HOME</a></li>
									 <li><div class="divider"></div></li>
									 <li><a class="waves-effect" href="../logout.php"><i class="material-icons">account_circle</i>LOGOUT</a></li>
								 </ul>
								 <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

								 <div class="row">
											 <div class="col s3"></div>
											 <div class="col s9">
															 <nav class="top-nav z-depth-4">
																			 <div class="container">
																				 <div class="nav-wrapper"><a class="page-title">
																					 <h2 class="title">
																							<div class="text">PUBLIC SERVICES</div>
																					 </h2>
																				 </a></div>
																			 </div>
															 </nav>


											 </div>
									 </div>

									 <div class="row">
													 <div class="col s3"></div>
													 <div class="col s9">
														 <h1>Acknowledgement</h1>
																	 <div class="row">
																					 <form method="post" action="resp.php">
																						 <div class="row">
																							 <div class="input-field col s11">
																									 <i class="material-icons prefix medium">access_time</i>
																								 <input type="text" class="datepicker" name="date">
																								 <label for="date">Date</label>
																							 </div>
																						 </div>
																							 <div class="row">
																								 <div class="input-field col s11">
																										 <i class="material-icons prefix medium">mode_comment</i>
																										 <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
																										 <label for="textarea1">Message</label>
																									 </div>
																							 </div>

																							 <div class="row">
																								 <div class="input-field col s11">
																									 <i class="material-icons prefix medium">drafts</i>
																									 <input id="email" type="email" class="validate" name="email">
																									 <label for="email" data-error="wrong" data-success="right">Email</label>
																								 </div>
																							 </div>

										 											<div class="row">
																						 <div class="col s4"></div>
																						 <div class="col s4">
																							<button class="btn waves-effect waves-light btn-large" type="submit" name="submit">Submit
																										 <i class="material-icons right">send</i>
																							 </button>
																							 </div>
																					 </div>
																					 </form>


													 </div>
											 </div>
	 </body>
	 <!--Import jQuery before materialize.js-->
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	 <script>
				$(".button-collapse").sideNav();

				$('.datepicker').pickadate({ selectMonths: true, // Creates a dropdown to control month selectYears: 15, // Creates a dropdown of 15 years to control year, today: 'Today', clear: 'Clear', close: 'Ok', closeOnSelect: false // Close upon selecting a date,
				 });
	 </script>
 </html>
