<?php 
require '../connection.php'; 
 
$idtempahan = $_GET['idtempahan']; 
 
$deleteusr = "DELETE FROM tempahan WHERE idtempahan='$idtempahan'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "index.php"; 
</script>