<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];    
    $date1 = $_POST['date1'];
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $waste = $_POST['waste'];
	$weight = $_POST['weight'];
    $driver_name = $_POST['driver_name'];
    $contact_no = $_POST['contact_no'];
    $licence_no = $_POST['licence_no'];
    $vehicle_no = $_POST['vehicle_no'];

    // checking empty fields
       if( empty($date1) ||empty($company_name) || empty($address) || empty($waste) || empty($weight) || empty($driver_name) || empty($contact_no) || empty($licence_no) || empty($vehicle_no)) {
	   
        if(empty($date1)) {
            echo "<font color='red'>date field is empty.</font><br/>";
        }

        if(empty($company_name)) {
            echo "<font color='red'>company name field is empty.</font><br/>";
        }
        
        if(empty($address)) {
            echo "<font color='red'>address field is empty.</font><br/>";
        }
         if(empty($waste)) {
            echo "<font color='red'>waste field is empty.</font><br/>";
        }
		 if(empty($weight)) {
            echo "<font color='red'>weight field is empty.</font><br/>";
        }
		 if(empty($driver_name)) {
            echo "<font color='red'>driver_name field is empty.</font><br/>";
        }   
        if(empty($contact_no)) {
            echo "<font color='red'>contact_no field is empty.</font><br/>";
        }  
        if(empty($licence_no)) {
            echo "<font color='red'>licence_no field is empty.</font><br/>";
        }  
        if(empty($vehicle_no)) {
            echo "<font color='red'>vehicle no field is empty.</font><br/>";
        }      
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE transports SET date1='$date1',company_name='$company_name',address='$address',waste='$waste',weight='$weight',driver_name='$driver_name',contact_no='$contact_no',licence_no='$licence_no',vehicle_no='$vehicle_no' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM transports WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
    $date1 = $res['date1'];
    $company_name = $res['company_name'];
    $address = $res['address'];
	$waste = $res['waste'];
	$weight = $res['weight'];
    $driver_name = $res['driver_name'];
    $contact_no = $res['contact_no'];
    $licence_no = $res['licence_no'];
    $vehicle_no = $res['vehicle_no'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <link href="fonts/font.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="fonts/gfont.css" rel="stylesheet">

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
    
<form name="form1" method="post" action="edit.php">
<div class="row">
    <div class="col s2"></div>
          <div class="col s8">
                  <div class="row">
                          <class="col s12">
                            <div class="row">
                              <div class="input-field col s12">
                                <i class="material-icons prefix medium">access_time</i>
                                <input name="date1" type="text" class="datepicker">
                                <label for="date1">Date</label>
                              </div>
                            </div>
                  </div>
                
                  <h3>Company Details</h3><br>
                
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix medium">business</i>
                            <input id="company_name" name="company_name" type="text" class="validate">
                            <label for="company_name">Company Name</label>
                          </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                  <i class="material-icons prefix medium">border_color</i>
                                  <textarea id="textarea1" name="address" class  ="materialize-textarea"></textarea>
                                  <label for="textarea1">Address</label>
                            </div>
                          </div>
                
                            <div class="row">
                                <div class="input-field col s12">
                                   <i class="material-icons prefix medium">insert_chart</i>
                                    <input id="waste" name="waste" type="text" class="validate">
                                  <label for="waste">Waste Types</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix medium">shopping_basket</i>
                                  <input id="weight" name="weight" type="text" class="validate">
                                  <label for="weight">Weight</label>
                                </div>
                            </div>

                                <h4>Driver Details</h4><br>
              
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix medium">person</i>
                                            <input type="text" name="driver_name" class="validate">
                                            <label for="driver_name">Driver Name</label>
                                        </div>
                        
                                        <div class="input-field col s6">
                                            <i class="material-icons prefix medium">call</i>
                                            <input id="contact_no"  name="contact_no"type="text" class="validate">
                                            <label for="contact_no">Contact No.</label>
                                        </div>
                                    </div>
                      
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix medium">contact_phone</i>
                                        <input id="licence_no" name="licence_no" type="text" class="validate">
                                        <label for="licence_no">Licence No.</label>
                                    </div>
                
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix medium">airport_shuttle</i>
                                        <input id="vehicle_no" name="vehicle_no" type="text" class="validate">
                                        <label for="vehicle_no">Vehicle No.</label>
                                    </div>
                                </div>
                           
                                    <center><button class="btn waves-effect waves-light btn-large" type="submit" name="submit">Submit
                                    <i class="material-icons right">send</i>
                                    </button></center>
                            </div>
                    </div>
                </div>
</form>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
<script>
         $(".button-collapse").sideNav();
        
         $('.datepicker').pickadate({ selectMonths: true, // Creates a dropdown to control month selectYears: 15, // Creates a dropdown of 15 years to control year, today: 'Today', clear: 'Clear', close: 'Ok', closeOnSelect: false // Close upon selecting a date,
          });
    </script>
</html>