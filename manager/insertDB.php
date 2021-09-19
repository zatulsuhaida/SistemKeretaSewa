<?php
session_start();
require '../connection.php';

$idcustomer=$_POST["idcustomer"];
$name=$_POST["name"];
$notelefon=$_POST["notelefon"];
$email=$_POST["email"];
$noic=$_POST["noic"];
$alamat=$_POST["alamat"];

//error checking

if($idcustomer==""){
	echo "<script>alert('Please Enter idcustomer');window.location='register.php'</script>";
}

if($name==""){
	echo "<script>alert('Please Enter name ');window.location='register.php'</script>";
}

if($notelefon==""){
	
	echo "<script>alert('Please Enter notelefon');window.location='register.php'</script>";
}

if($email==""){
	echo "<script>alert('Please Enter email ');window.location='register.php'</script>";
}

if($noic==""){
	echo "<script>alert('Please Enter noic');window.location='register.php'</script>";
}
if($alamat==""){
	echo "<script>alert('Please Enter alamat ');window.location='register.php'</script>";
}

$sql ="INSERT INTO customer(idcustomer,namapenyewa,notelefon,email,noic,alamat)VALUES('$idcustomer','$name','$notelefon','$email','$noic','$alamat')"; 

if($conn->query($sql)=== TRUE){   //true --->successfully
	echo "<script>alert('Register Add Successfully');window.location='index.php'</script>";
}
else{
	echo "Error:". $sql."<br>".$conn->error;
}
$conn->close();
