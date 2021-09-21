<?php
session_start();
require '../connection.php';

$idtempahan=$_POST["idtempahan"];
$idkereta=$_POST["idkereta"];
$idcustomer=$_POST["idcustomer"];
$tarikhambil=$_POST["tarikhambil"];
$masaambil=$_POST["masaambil"];
$tarikhhantar=$_POST["tarikhhantar"];
$destinasi=$_POST["destinasi"];


//error checking

if($idtempahan==""){
	echo "<script>alert('Please Enter idtempahan');window.location='register.php'</script>";
}
if($idkereta==""){
	echo "<script>alert('Please Enter idkereta');window.location='register.php'</script>";
}
if($idcustomer==""){
	echo "<script>alert('Please Enter idcustomer');window.location='register.php'</script>";
}

if($tarikhambil==""){
	echo "<script>alert('Please Enter tarikhambil');window.location='register.php'</script>";
}

if($masaambil==""){
	
	echo "<script>alert('Please Enter masaambil');window.location='register.php'</script>";
}

if($tarikhhantar==""){
	echo "<script>alert('Please Enter tarikhhantar');window.location='register.php'</script>";
}

if($destinasi==""){
	echo "<script>alert('Please Enter destinasi');window.location='register.php'</script>";
}

$sql ="INSERT INTO tempahan(idtempahan,idkereta,idcustomer,tarikhambil,masaambil,tarikhhantar,destinasi)VALUES('$idtempahan','$idkereta','$idcustomer','$tarikhambil','$masaambil','$tarikhhantar','$destinasi')"; 


if($conn->query($sql)=== TRUE){   //true --->successfully
	echo "<script>alert('Register Add Successfully');window.location='register.php'</script>";
}
else{
	echo "Error:". $sql."<br>".$conn->error;
}
$conn->close();
