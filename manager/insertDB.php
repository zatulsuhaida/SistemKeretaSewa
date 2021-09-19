<?php
session_start();
require '../connection.php';

$idCustomer=$_POST["idCustomer"];
$name=$_POST["name"];
$noTelefon=$_POST["noTelefon"];
$email=$_POST["email"];
$noIC=$_POST["noIC"];
$alamat=$_POST["alamat"];

//error checking

if($idCustomer==""){
	echo "<script>alert('Please Enter idCustomer');window.location='register.php'</script>";
}

if($name==""){
	echo "<script>alert('Please Enter name ');window.location='register.php'</script>";
}

if($noTelefon==""){
	
	echo "<script>alert('Please Enter noTelefon');window.location='register.php'</script>";
}

if($email==""){
	echo "<script>alert('Please Enter email ');window.location='register.php'</script>";
}

if($noIC==""){
	echo "<script>alert('Please Enter No IC');window.location='register.php'</script>";
}
if($alamat==""){
	echo "<script>alert('Please Enter alamat ');window.location='register.php'</script>";
}

$sql ="INSERT INTO customerlist(idCustomer,NamaPenyewa,NoTelefon,Email,NoIC,Alamat)VALUES('$idCustomer','$name','$noTelefon','$email','$noIC','$alamat')"; 

if($conn->query($sql)=== TRUE){   //true --->successfully
	echo "<script>alert('Register Add Successfully');window.location='index.php'</script>";
}
else{
	echo "Error:". $sql."<br>".$conn->error;
}
$conn->close();
