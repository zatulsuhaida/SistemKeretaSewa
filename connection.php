<?php 
 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sks"; 
 
 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
 
 
if (!$conn) { 
    die("Connection failed:" . mysqli_connect_error());   //display error if the server cannot be connected 
} 
?>