<?php 
session_start(); 
require '../connection.php'; 
 
$sql = "SELECT * FROM kereta"; 
$result = mysqli_query($conn, $sql); 
 
?> 
 
<html> 
 
<head> 
    <title>Admin Page</title> 
    <title>SKS</title> 
    <link rel="stylesheet" href="../style.css"> 
</head> 
 
<body> 
    <div class="container"> 
        <br><br><br> 
        <div class="center"> 
            <h2>Sistem Kereta Sewa</h2> 
        </div> 
        <center><br> Nama Programmer: <a href="admin/">admin (suhaida)</a></center> 
    </div> 
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="index.php">Home</a> 
        | 
        <a href="listcar.php">Car List </a> 
        | 
        <a href="register.php">Register Car</a> 
        | 
        <a href="staff_list.php">Detail Staff</a> 
        ] 
    </nav> 
 
 
    <center> 
        <h2>Welcome </h2> 
    </center> 
</body> 
 
</html>