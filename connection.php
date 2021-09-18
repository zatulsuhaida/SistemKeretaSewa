<<<<<<< HEAD
<?php 
 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "sks"; 
 
 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
 
 
if (!$conn) { 
    die("Connection failed:" . mysqli_connect_error());   //display error if the server cannot be connected 
} 
=======
<?php
<<<<<<< HEAD:admin/connection.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sks";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());   //display error if the server cannot be connected
=======
$servername ="localhost";  
$username="root";   
$password="";   
$dbname="sks";   

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn)
{
die("Connection failed:".mysqli_connect_error());   //display error if the server cannot be connected
>>>>>>> c7b93156bf30fe726167130d930b46272afe4f16:connection.php
}
>>>>>>> 11790e4264b7cd2abed78f3dc13bd64501261dd4
?>