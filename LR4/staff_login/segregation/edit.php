<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];    
    $date1 = $_POST['date1'];
    $city = $_POST['city'];
    $source = $_POST['source'];
	$area = $_POST['area'];
	$weight = $_POST['weight'];
	$bookmark = $_POST['bookmark'];
        
    
    // checking empty fields
       if( empty($date1) ||empty($city) ||empty($waste) || empty($source) || empty($area) || empty($weight)) {
	   
        if(empty($date1)) {
            echo "<font color='red'>date field is empty.</font><br/>";
        }

        if(empty($city)) {
            echo "<font color='red'>city field is empty.</font><br/>";
        }
        if(empty($waste)) {
            echo "<font color='red'>waste field is empty.</font><br/>";
        } 
        if(empty($source)) {
            echo "<font color='red'>source field is empty.</font><br/>";
        }
         if(empty($area)) {
            echo "<font color='red'>area field is empty.</font><br/>";
        }
		 if(empty($weight)) {
            echo "<font color='red'>weight field is empty.</font><br/>";
        }      
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE segregate SET date1='$date1',city='$city',source='$source',waste='$waste',area='$area',weight='$weight' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM segregate WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $date1 = $res['date1'];
    $city = $res['city'];
    $waste = $res['waste'];
    $source = $res['source'];
    $area = $res['area'];
    $weight = $res['weight'];
   
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <link href="fonts/font.css" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
 <link href="fonts/gfont.css" rel="stylesheet">
    <title>Edit Data</title>
    <style>
        .container {
          padding-top: 50px; 
        }
        .head {
          font-family: 'Acme', sans-serif;
         text-align: center;
         padding-top: 40px;
        }
        h1{
          color: black;
        }
    </style>
</head>
 
<body>
<div class="head">
<h1>Update</h1>
</div>

<div class="container">
<form name="form1" method="post" action="edit.php">
    <div class="row">
    <div class="input-field col s6">
        <i class="material-icons prefix medium">access_time</i>
      <input  type="text" class="datepicker" name="date1">
      <label for="date">Date</label>
    </div>
   
    <div class="input-field col s6">
        <i class="material-icons prefix medium">business</i>
      <input id="city"  type="text" class="validate" name="city">
      <label for="city">City</label>
    </div>
  </div>
  
  <div class="row">
    <div class="input-field col s12">
       <i class="material-icons prefix medium">insert_chart</i>
       <input id="waste" type="text" class="validate" name="waste">
      <label for="waste">Waste Types</label>
    </div>
  </div>

    <div class="row">
        <div class="input-field col s12">
                <i class="material-icons prefix medium">mode_comment</i>
                <input id="source" type="text" class="validate" name="source">
              <label for="source">Source</label>
        </div>
    </div>
            
<div class="row">
    <div class="input-field col s12">
       <i class="material-icons prefix medium">insert_chart</i>
      <input id="loc" type="text" class="validate" name="area">
      <label for="loc">Area</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
       <i class="material-icons prefix medium">shopping_basket</i>
      <input id="weight"  type="text" class="validate" name="weight" >
      <label for="weight">Weight</label>
    </div>
</div>
    <center> <button name="submit"  class="btn waves-effect waves-light btn-large" >Submit
            <i class="material-icons right">send</i>
            </button></center>
    </form>
    </div>
</body>
</html>