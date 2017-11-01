<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style1.css">

<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
</head>
<body style="background-color:#bdc3c7">
	
	<form class="myform" action="register.php"method="post" enctype="multipart/form-data" >
		<div id="main-wrapper">
		<center>
            <h2><font color="aqua">Registration Form</font></h2>
			<img id="uploadPreview" src="imgs/avatar.png" class="avatar"/><br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
		</center>
	
		
			<label><b>First Name:</b></label><br>
			<input name="firstname" type="text" class="inputvalues" placeholder="Type your First name" required/><br>

			<label><b>Last Name:</b></label><br>
			<input name="lastname" type="text" class="inputvalues" placeholder="Type your Last Name" required/><br>

			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>

			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>

			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>

			<label><b>Email:</b></label><br>
			<input name="email" type="email" class="inputvalues" placeholder="Type your Email Address" required/><br>

			<label><b>Phone No.:</b></label><br>
			<input name="phone" type="text" class="inputvalues" placeholder="Enter 10 Digit Number" required/><br>

			<label><b>Gender</b></label>
     		<input type="radio" name="gender" value="male">Male
      		<input type="radio" name="gender" value="female">Female<br>
			
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<center><a href="index.php"><input type="button" id="back_btn" value="Already Logged In"/></a></center>
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				$firstname =$_POST['firstname'];
				$lastname =$_POST['lastname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				$email =$_POST['email'];
				$phone =$_POST['phone'];
				
				$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];
				
				$directory = 'uploads/';
			$target_file = $directory.$img_name;
				
				$male_status = 'unchecked';
				$female_status = 'unchecked';

				$gender = $_POST['gender'];

				if ($gender == 'male') {
					$male_status = 'checked';
				}	
				else if ($gender == 'female') {
				$female_status = 'checked';
				}

				if($password==$cpassword)
				{
					
					$query= "select * from fileuploadtable WHERE username='$username'";
					$query_run = mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
					}
					else if(file_exists($target_file))
					{
						echo '<script type="text/javascript"> alert("Image file already exists.. Try another image file") </script>';
					}
					
					else if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}
					else if(strlen($phone)<10 || strlen($phone)>10 )
					{
						echo '<script type="text/javascript"> alert("phone number is incorrect") </script>';
					}
					else
					{
						move_uploaded_file($img_tmp,$target_file); 	
						$query= "insert into fileuploadtable values('','$firstname','$lastname','$username','$password','$email','$phone','$gender','$target_file')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
				}
				else
				{
					echo '<script type="text/javascript"> alert("Password and confirm password does not match!")</script>';	
				}
			}
		?>
	</div>
</body>
</html>