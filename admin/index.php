<<<<<<< HEAD
<?php 
session_start(); 
require '../connection.php'; 
 
$sql = "SELECT * FROM kereta"; 
$result = mysqli_query($conn, $sql); 
 
?> 
 
<html> 
 
<head> 
    <title>Admin Page</title> 
    <title>SKS</title> 
    <link rel="stylesheet" href="../style.css"> 
</head> 
 
<body> 
    <div class="container"> 
        <br><br><br> 
        <div class="center"> 
            <h2>Sistem Kereta Sewa</h2> 
        </div> 
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
 
 
    <center> 
        <h2>Welcome </h2> 
    </center> 
</body> 
 
</html>
=======
<?php
session_start();
require '../connection.php';

<<<<<<< HEAD
$sql = "SELECT * FROM kereta";
$result = mysqli_query($conn, $sql);
=======
$sql="SELECT * FROM kereta";
$result = mysqli_query($conn,$sql);

>>>>>>> c7b93156bf30fe726167130d930b46272afe4f16
?>

<<<<<<< HEAD
<head>
  <style id="stndz-style"></style>
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

    <center>
      <h2> Display Car List</h2>
    </center>
    <br>
    <table border="1">
      <tr>
        <th>Idkereta</th>
        <th>Modal</th>
        <th>Priceperday</th>
        <th>Priceperweek</th>
      </tr>

      <?php
      if (mysqli_num_rows($result) > 0) {


        while ($row = mysqli_fetch_assoc($result)) {
      ?>

          <tr>
            <td><?php echo $row["idkereta"]; ?></td>
            <td><?php echo $row["modal"]; ?></td>
            <td><?php echo $row["Priceperday"]; ?></td>
            <td><?php echo $row["Priceperweek"]; ?></td>
          </tr>

      <?php

        }
      } else {
        echo "0 results";
      }
      mysqli_close($conn);
      ?>

    </table>
</body>
<html>
=======
<html>

<head>
<title>Admin Page</title>
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


<center><h2>Welcome </h2>
</center>
</body>
</html>
>>>>>>> c7b93156bf30fe726167130d930b46272afe4f16
>>>>>>> 11790e4264b7cd2abed78f3dc13bd64501261dd4
