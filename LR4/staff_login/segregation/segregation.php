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
    $city = $_POST['city'];
    $waste = $_POST['waste'];
    $source = $_POST['source'];
	  $area = $_POST['area'];
	  $weight = $_POST['weight'];
        
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a><br>";
        $result = mysqli_query($mysqli, "INSERT INTO segregate(date1,city,waste,source,area,weight) VALUES('$date1','$city','$waste','$source','$area','$weight')");
         
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
}
?>
</body>
</html>

