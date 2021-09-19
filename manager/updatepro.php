<?php  
session_start();  
require '../connection.php';  
  
$idcustomer=$_POST["idcustomer"];
$name=$_POST["name"];
$notelefon=$_POST["notelefon"];
$email=$_POST["email"];
$noic=$_POST["noic"];
$alamat=$_POST["alamat"]; //drp input hndden  
  
$sql = "UPDATE customer SET idcustomer='$idcustomer',namapenyewa='$name',notelefon='$notelefon' ,email='$email',noic='$noic',alamat='$alamat' where idcustomer='$idcustomer'";  
  
if($conn->query($sql)=== TRUE){   //true --->successfully  
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close(); 
?>