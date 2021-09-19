<?php 
require '../connection.php'; 
 
$idCustomer = $_GET['idCustomer']; 
 
$deleteusr = "DELETE FROM customerlist WHERE idCustomer='$idCustomer'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "listcustomer.php"; 
</script>