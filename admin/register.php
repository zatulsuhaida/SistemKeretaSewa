<?php
session_start();
require '../connection.php';
?>
<html>
<head>
<title>SKS</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>
<div class="container">
<br><br><br>
<div class="center"><h2>Sistem Kereta Sewa</h2></div>
<center><br> Nama Programmer: <a href="admin/">admin (suhaida)</a></center>
</div>

<nav style="background-color: hotpink">
    <strong style="font-size: xx-large"></strong>
    [
        <a class="active" href="index.php">Home</a>
    |
        <a href="listcar.php">Car List </a>
    |
        <a href="register.php">Register Car</a>
    |
        <a href="staff_list.php">Detail Staff</a>
    ]
</nav>
<br><br>
<center><h2>Register Car</h2></center>
<form action="InsertCar.php" method="post">

<table align="center">
<tr>
<td>Idkereta :</td>
<td> <input type="text" name="idkereta" size="48"> </td>
</tr>
<tr>
<td>Modal :</td>
<td> <input type="text" name="modal" size="48"> </td>
</tr>
<tr>
<td>Priceperday :</td>
<td> <input type="text" name="priceperday" size="48"> </td>
</tr>
<tr>
<td>Priceperweek :</td>
<td> <input type="text" name="priceperweek" size="48"> </td>
</tr>
<tr>
<tr>
<td colspan="2">
	<center>
<input type="submit" value="Add" style="background-color:PaleGreen;font-size: 15px;"/>
</center>
</td>
</tr>
</table>
</form>

</body>

</html>