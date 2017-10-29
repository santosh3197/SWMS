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
       if( empty($date1) ||empty($city) || empty($source) || empty($area) || empty($weight) || empty($bookmark)) {

        if(empty($date1)) {
            echo "<font color='red'>date field is empty.</font><br/>";
        }

        if(empty($city)) {
            echo "<font color='red'>city field is empty.</font><br/>";
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
		 if(empty($bookmark)) {
            echo "<font color='red'>bookmark field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE disposal SET date1='$date1',city='$city',source='$source',area='$area',weight='$weight',bookmark='$bookmark' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM disposal WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $date1 = $res['date1'];
    $city = $res['city'];
    $source = $res['source'];
    $area = $res['area'];
    $weight = $res['weight'];
    $bookmark = $res['bookmark'];
}
?>
<html>
<head>
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
           <input id="source" type="text" class="validate" name="source">
          <label for="source">Waste Types</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix medium">edit_location</i>
          <input id="loc" type="text" class="validate" name="area">
          <label for="loc">Dump Area</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix medium">shopping_basket</i>
          <input id="weight"  type="text" class="validate" name="weight" >
          <label for="weight">Weight</label>
        </div>
      </div>
        <div class="row">

              <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix medium">mode_comment</i>
                  <textarea id="textarea1" class="materialize-textarea" name="bookmark"></textarea>
                  <label for="textarea1">Any Bookmarks</label>
                </div>
              </div>

          </div>

          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
          <center><button class="btn waves-effect waves-light btn-large" type="submit" name="update">Update
            <i class="material-icons right">send</i>
          </button></center>
    </form>
  </div>
</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>

    $('.datepicker').pickadate({ selectMonths: true, // Creates a dropdown to control month selectYears: 15, // Creates a dropdown of 15 years to control year, today: 'Today', clear: 'Clear', close: 'Ok', closeOnSelect: false // Close upon selecting a date,
    });

    $(document).ready(function() {
    $('select').material_select();
    });
</script>
</html>
