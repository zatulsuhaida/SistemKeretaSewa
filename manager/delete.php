<?php 
require '../connection.php'; 
 
$idcustomer = $_GET['idcustomer']; 
 
$deleteusr = "DELETE FROM customer WHERE idcustomer='$idcustomer'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "index.php"; 
</script>