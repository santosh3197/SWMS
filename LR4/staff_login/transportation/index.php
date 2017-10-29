<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM stud ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM transports ORDER BY id ASC"); // using mysqli_query instead
?>
<html>
<head>    
    <title>Homepage</title>
    <link href="fonts/font.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 <link href="fonts/gfont.css" rel="stylesheet">
    <style>
        .add {
          padding: 2rem;
        }
        table {
          margin-left: 20px;
        }
    </style>
</head>
 
<body>
<div class="add"> 
<a href="transport.html" class="waves-effect waves-light btn hoverable"><i class="material-icons left">add</i>Add New Data</a>
</div>
 
<table width='80%' border=0 class="bordered z-depth-3">
        <tr bgcolor='#CCCCCC'>
			<td><b>Date</b></td>
            <td><b>Company Name</b></td>
            <td><b>Address</b></td>
            <td><b>Waste Type</b></td>
			<td><b>Weight</b></td>
            <td><b>Driver Name</b></td>
            <td><b>Contact No</b></td>
            <td><b>Licence No</b></td>
            <td><b>Vehicle No</b></td>            
            <td><b>Update</b></td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['date1']."</td>";
            echo "<td>".$res['company_name']."</td>";
            echo "<td>".$res['address']."</td>";   
			echo "<td>".$res['waste']."</td>";
			echo "<td>".$res['weight']."</td>"; 
            echo "<td>".$res['driver_name']."</td>";
            echo "<td>".$res['contact_no']."</td>";
            echo "<td>".$res['licence_no']."</td>";
            echo "<td>".$res['vehicle_no']."</td>"; 	
            echo "<td><a href=\"edit.php? id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>