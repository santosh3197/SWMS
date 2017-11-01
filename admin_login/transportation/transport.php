<html>
<head>
    <title>Collection Details</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['submit'])) {    
    $date1 = $_POST['date1'];
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
	$waste = $_POST['waste'];
	$weight = $_POST['weight'];
    $driver_name = $_POST['driver_name'];
    $contact_no = $_POST['contact_no'];
    $licence_no = $_POST['licence_no'];
    $vehicle_no = $_POST['vehicle_no'];

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a><br>";
        $result = mysqli_query($mysqli,"INSERT INTO transports(date1,company_name,addrss,waste,weight,driver_name,contact_no,licence_no,vehicle_no) VALUES('$date1','$compant_name','$address','$waste','$weight','$driver_name','$contact_no','$licence_no','$vehicle_no')");
         
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
}
?>
</body>
</html>

