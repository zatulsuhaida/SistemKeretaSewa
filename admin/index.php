<?php
session_start();
include('connection.php');

$sql="SELECT * FROM kereta";
$result = mysqli_query($conn,$sql);  
?>
<!DOCTYPE html>
<html lang="en">

<head><style id="stndz-style"></style>
    <title>SKS</title>
    <link rel="stylesheet" href="../style.css">
   
</head>

<body>
<div data-role="page" id="page1">
<div class="header">
  <h1></h1>
  
</div>
<center>
<h1>Nama sistem: Sistem Kereta Sewa (SKS)</h1><br>
<br> Nama Programmer: <a href="admin/">admin (suhaida)</a>
</center>
 
<nav style="background-color: hotpink">
    <strong style="font-size: xx-large"></strong>
    [
    <a href="../index.php">Home</a>
    |
     <a href="listcar.php?menu=senaraiKereta">Senarai Kereta</a>
    |
     <a href="index.php?menu=daftarKereta">Daftar Kereta</a>
    |
     <a href="index.php?menu=katalaluan">Kata Laluan</a>
    |
    <a href="../logout.php">Keluar</a>
    ]
</nav>

<center><h2> Display Car List</h2></center>
<br>
<table border="1">
<tr>
<th>Idkereta</th>
<th>Modal</th>
<th>Priceperday</th>
<th>Priceperweek</th>
</tr>

<?php
if (mysqli_num_rows($result)>0)    
{

	
	while($row = mysqli_fetch_assoc($result)){
 ?>

<tr>
<td><?php echo $row["idkereta"]; ?></td>
<td><?php echo $row["modal"]; ?></td>
<td><?php echo $row["Priceperday"]; ?></td>
<td><?php echo $row["Priceperweek"]; ?></td>
</tr>

<?php

       }
	
     }
      else{
	   echo "0 results";
           }
            mysqli_close($conn);
?>

</table>
</body>
<html>
    