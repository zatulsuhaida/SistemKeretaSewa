<?php 
session_start(); 
require '../connection.php'; 
 
$idusr = $_GET["idkereta"]; 
$dis_usr = "SELECT * FROM kereta WHERE idkereta='$idusr'"; 
$resultusr = $conn->query($dis_usr); 
 
$row = $resultusr->fetch_assoc(); 
?> 
<html> 
 
<head> 
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
 
    <br><br> 
    <center> 
        <h2>Update Car</h2> 
    </center> 
 
    <form name="myform" action="updateprocess.php" method="post"> 
        <center> 
            <br> 
            <b>Idkereta :</b> 
            <input type="text" name="idkereta" value="<?php echo $row["idkereta"]; ?>"> 
            <br> 
            <br> 
            <b>Modal :</b> 
            <input type="text" name="modal" value="<?php echo $row["modal"]; ?>"> 
            <br> 
            <br> 
 
            <b>Priceperday :</b> 
            <input type="text" name="priceperday" value="<?php echo $row["priceperday"]; ?>"> 
            <br> 
            <br> 
            <b>Priceperweek:</b> 
            <input type="text" name="priceperweek" value="<?php echo $row["priceperweek"]; ?>"> 
 
 
        </center> 
        <br> 
        <center> 
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" /> 
            <input type="hidden" name="idkereta" value="<?php echo $row["idkereta"]; ?>" /> 
        </center> 
    </form> 
</body> 
 
</html>

