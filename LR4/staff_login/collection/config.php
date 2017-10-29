<?php
/*
$con = mysqli_connect("localhost","root","") or die("Unable to connect");
mysqli_select_db($con,'logindb');

*/
$databaseHost = 'localhost';
$databaseName = 'homepage_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>