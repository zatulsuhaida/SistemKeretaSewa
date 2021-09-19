<?php  
session_start();  
require '../connection.php';  
  
$idCustomer=$_POST["idCustomer"];
$name=$_POST["name"];
$noTelefon=$_POST["noTelefon"];
$email=$_POST["email"];
$noIC=$_POST["noIC"];
$alamat=$_POST["alamat"]; //drp input hndden  
  
$sql = "UPDATE customerlist SET idCustomer='$idCustomer',NamaPenyewa='$name',NoTelefon='$noTelefon' ,Email='$email',NoIC='$noIC',Alamat='$alamat' where idCustomer='$idCustomer'";  
  
if($conn->query($sql)=== TRUE){   //true --->successfully  
  echo "<script>alert('Update Successfully');window.location='index.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close(); 
?>