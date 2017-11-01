<?php
/*
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'logindb');

*/
$databaseHost = 'localhost';
$databaseName = 'logindb';
$databaseUsername = 'root';
$databasePassword = '';
 
$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>