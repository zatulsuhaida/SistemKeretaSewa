<?php
session_start();
require '../connection.php';

$idusr = $_GET["idtempahan"];
$dis_usr = "SELECT * FROM tempahan WHERE idtempahan='$idusr'";
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
        <center><br> Nama Programmer: admin (suhaida)</a></center>
    </div>

    <nav style="background-color: hotpink">
        <strong style="font-size: xx-large"></strong>
        [
        <a href="../index.php">Home</a>
        |
        <a href="index.php?menu=SenaraiMaklumatTempahan">Senarai Maklumat Tempahan</a>
        |
        <a href="register.php">Daftar Tempahan</a>
        ]
    </nav>

    <br><br>
    <center>
        <h2>Update Car</h2>
    </center>

    <form name="myform" action="updateprocess.php" method="post">
        <center>
            <br>
            <b>idtempahan :</b>
            <input type="text" name="idtempahan" value="<?php echo $row["idtempahan"]; ?>">
            <br>
            <br>
            <b>Idkereta :</b>
            <input type="text" name="idkereta" value="<?php echo $row["idkereta"]; ?>">
            <br>
            <br>
            <b>idcustomer :</b>
            <input type="text" name="idcustomer" value="<?php echo $row["idcustomer"]; ?>">
            <br>
            <br>
            <b>tarikh ambik :</b>
            <input type="date" name="tarikhambik" value="<?php echo $row["tarikhambik"]; ?>">
            <br>
            <br>
            <b>masa ambik :</b>
            <input type="time" name="masaambik" value="<?php echo $row["masaambik"]; ?>">
            <br>
            <br>
            <b>tarikh hantar :</b>
            <input type="date" name="tarikhhantar" value="<?php echo $row["tarikhhantar"]; ?>">
            <br>
            <br>
            <b>destinasi:</b>
            <input type="text" name="destinasi" value="<?php echo $row["destinasi"]; ?>">


        </center>
        <br>
        <center>
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" />
            <input type="hidden" name="idtempahan" value="<?php echo $row["idtempahan"]; ?>" />
        </center>
    </form>
</body>

</html>