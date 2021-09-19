<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM tempahan
JOIN customer ON tempahan.idcustomer = customer.idcustomer
JOIN kereta ON tempahan.idkereta = kereta.idkereta";
$result = mysqli_query($conn, $sql);
?>

<html>

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
            <br> Nama Programmer: <a>Customer (Syakir)</a>
        </center>
        <br>
        <p><b>Senarai Maklumat Tempahan</b></p>
        <hr>
        </hr>

        <nav style="background-color: hotpink">
            <strong style="font-size: xx-large"></strong>
            [
            <a href="../index.php">Home</a>
            |
            <a href="index.php">Senarai Maklumat Tempahan</a>
            |
            <a href="register.php">Daftar Tempahan</a>
            ]
        </nav>

        <table border="1">
            <tr>
                <th>idtempahan</th>
                <th>idkereta</th>
                <th>idcustomer</th>
                <th>nama penyewa</th>
                <th>no telefon</th>
                <th>email</th>
                <th>no ic</th>
                <th>alamat</th>
                <th>tarikh ambil</th>
                <th>masa ambil</th>
                <th>tarikh hantar</th>
                <th>destinasi</th>
                <th>action</th>
            </tr>
            <?php
            if (mysqli_num_rows($result)) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <tr>
                        <td><?php echo $row["idtempahan"]; ?></td>
                        <td><?php echo $row["idkereta"]; ?></td>
                        <td><?php echo $row["idcustomer"]; ?></td>
                        <td><?php echo $row["namapenyewa"]; ?></td>
                        <td><?php echo $row["notelefon"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["noic"]; ?></td>
                        <td><?php echo $row["alamat"]; ?></td>
                        <td><?php echo $row["tarikhambil"]; ?></td>
                        <td><?php echo $row["masaambil"]; ?></td>
                        <td><?php echo $row["tarikhhantar"]; ?></td>
                        <td><?php echo $row["destinasi"]; ?></td>

                        <td colspan="2">
                            <a href="update.php?idtempahan=<?php echo $row["idtempahan"]; ?>">Update</a>
                            <a href="delete.php?idtempahan=<?php echo $row["idtempahan"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        </td>
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

</html>