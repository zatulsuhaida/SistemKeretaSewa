<?php 
require '../connection.php'; 
 
$idkereta = $_GET['idkereta']; 
 
$deleteusr = "DELETE FROM kereta WHERE idkereta='$idkereta'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "listcar.php"; 
</script>