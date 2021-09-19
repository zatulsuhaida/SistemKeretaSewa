<?php
session_start();
require '../connection.php';

$idusr = $_GET["idCustomer"];
$dis_usr = "SELECT * FROM customerlist WHERE idCustomer='$idusr'";
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
        <center><br> Nama Programmer: <a href="manager/">Manager (Radzi)</a></center>
    </div>

    <nav style="background-color: hotpink">
        <strong style="font-size: xx-large"></strong>
        [
        <a class="active" href="../index.php">Home</a>
        |
        <a href="listcustomer.php">Customer List </a>
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
            <b>idCustomer :</b>
            <input type="text" name="idCustomer" value="<?php echo $row["idCustomer"]; ?>">
            <br>
            <br>
            <b>Nama Penyewa :</b>
            <input type="text" name="name" value="<?php echo $row["NamaPenyewa"]; ?>">
            <br>
            <br>
            <b>No Telefon:</b>
            <input type="text" name="noTelefon" value="<?php echo $row["NoTelefon"]; ?>">
            <br>
            <br>
            <b>Email :</b>
            <input type="email" name="email" value="<?php echo $row["Email"]; ?>">
            <br>
            <br>
            <b>No IC :</b>
            <input type="text" name="noIC" value="<?php echo $row["NoIC"]; ?>">
            <br>
            <br>
            <b>Alamat :</b>
            <input type="text" name="alamat" value="<?php echo $row["Alamat"]; ?>">

        </center>
        <br>
        <center>
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" />
            <input type="hidden" name="idCustomer" value="<?php echo $row["idCustomer"]; ?>" />
        </center>
    </form>
</body>

</html>