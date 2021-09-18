<?php
session_start();
require '../connection.php';

$modal=$_POST['modal'];
$priceperday=$_POST['priceperday'];
$priceperweek=$_POST['priceperweek'];
$idkereta=$_POST['idkereta']; //drp input hndden

$sql = "UPDATE kereta SET idkereta='$idkereta',modal='$modal',priceperday='$priceperday',priceperweek='$priceperweek' where idkereta='$idkereta'";

if($conn->query($sql)=== TRUE){   //true --->successfully
		echo "<script>alert('Update Successfully');window.location='listcar.php'</script>";
}
else{
	echo "Error:". $sql."<br>".$conn->error;
}
$conn->close();


?>