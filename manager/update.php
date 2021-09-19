<?php
session_start();
require '../connection.php';

$idusr = $_GET["idcustomer"];
$dis_usr = "SELECT * FROM customer WHERE idcustomer='$idusr'";
$resultusr = $conn->query($dis_usr);

$row = $resultusr->fetch_assoc();
?>
<html>

<head>
    <title>SKS</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <br><br><br>
        <div class="center">
            <h2>Sistem Kereta Sewa</h2>
        </div>
        <center><br> Nama Programmer: <a>Manager (Radzi)</a></center>
    </div>

    <nav style="background-color: hotpink">
        <strong style="font-size: xx-large"></strong>
        [
        <a class="active" href="../index.php">Home</a>
        |
        <a href="index.php">Customer List </a>
        |
        <a href="register.php">Register Customer</a>
        |
        <a href="../index.php">Log out</a>
        ]
    </nav>

    <br><br>
    <center>
        <h2>Update Customer</h2>
    </center>

    <form name="myform" action="updatepro.php" method="post">
        <center>
            <br>
            <b>idcustomer :</b>
            <input type="text" name="idcustomer" value="<?php echo $row["idcustomer"]; ?>">
            <br>
            <br>
            <b>Nama Penyewa :</b>
            <input type="text" name="name" value="<?php echo $row["namapenyewa"]; ?>">
            <br>
            <br>
            <b>No Telefon:</b>
            <input type="text" name="notelefon" value="<?php echo $row["notelefon"]; ?>">
            <br>
            <br>
            <b>Email :</b>
            <input type="email" name="email" value="<?php echo $row["email"]; ?>">
            <br>
            <br>
            <b>No IC :</b>
            <input type="text" name="noic" value="<?php echo $row["noic"]; ?>">
            <br>
            <br>
            <b>Alamat :</b>
            <input type="text" name="alamat" value="<?php echo $row["alamat"]; ?>">

        </center>
        <br>
        <center>
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" />
            <input type="hidden" name="idcustomer" value="<?php echo $row["idcustomer"]; ?>" />
        </center>
    </form>
</body>

</html>