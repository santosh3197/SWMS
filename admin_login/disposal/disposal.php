<html>
<head>
    <title>Collection Details</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
$id="";
$date1="";
$city="";
$source="";
$area="";
$weight="";
$bookmark="";
 
if(isset($_POST['submit'])) {    
    $date1 = $_POST['date1'];
    $city = $_POST['city'];
    $source = $_POST['source'];
     $area = $_POST['area'];
	  $weight = $_POST['weight'];
	  $bookmark = $_POST['bookmark'];
        
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a><br>";
        $result = mysqli_query($mysqli,"INSERT INTO disposal (date1,city,source,area,weight,bookmark) VALUES('$date1','$city','$source','$area','$weight','$bookmark')");
         
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
}
?>
</body>
</html>

