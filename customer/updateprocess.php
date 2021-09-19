<?php  
session_start();  
require '../connection.php';  
  
$idtempahan=$_POST["idtempahan"];
$idkereta=$_POST["idkereta"];
$idcustomer=$_POST["idcustomer"];
$tarikhambil=$_POST["tarikhambil"];
$masaambil=$_POST["masaambil"];
$tarikhhantar=$_POST["tarikhhantar"];
$destinasi=$_POST["destinasi"]; //drp input hndden  
  
$sql = "UPDATE tempahan SET idtempahan='$idtempahan',idkereta='$idkereta',idcustomer='$idcustomer',tarikhambil='$tarikhambil',masaambil='$masaambil',tarikhhantar='$tarikhhantar',destinasi='$destinasi' where idtempahan='$idtempahan'";  
  
if($conn->query($sql)=== TRUE){   //true --->successfully  
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close(); 
?>