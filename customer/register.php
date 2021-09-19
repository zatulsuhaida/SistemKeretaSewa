<?php
session_start();
require '../connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKS - manager</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <pre>
    <center> 
        <h2> Daftar Customer</h2> 
        <br> Nama Programmer: <a>Customer (Syakir)</a> 
    </center> 
    </pre>
    <nav style="background-color: hotpink">
        <strong style="font-size: xx-large"></strong>
        [
        <a class="active" href="../index.php">Home</a>
        |
        <a href="index.php">Senarai Maklumat Tempahan </a>
        |
        <a href="register.php">Daftar Tempahan</a>
        ]
    </nav>
    <br>

    <form method="post" action="inserttempahan.php">
        <table border="0">
            <tr>
                <th colspan="2">
                    <h1>Register tempahan</h1>
                </th>
            </tr>
            <tr>
                <th>idtempahan :</th>
                <td><input type="text" name="idtempahan" required></td>
            </tr>
            <tr>
                <th>idkereta :</th>
                <td><input type="text" name="idkereta" required></td>
            </tr>
            <tr>
                <th>idcustomer :</th>
                <td><input type="text" name="idcustomer" required></td>
            </tr>
            <tr>
                <th>tarikh ambil :</th>
                <td><input type="date" name="tarikhambil" required></td>
            </tr>
            <tr>
                <th>masa ambil :</th>
                <td><input type="time" name="masaambil" required></td>
            </tr>
            <tr>
                <th>tarikh hantar :</th>
                <td><input type="date" name="tarikhhantar" required></td>
            </tr>
            <tr>
                <th>destinasi :</th>
                <td><input type="text" name="destinasi" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
    <br>
</body>

</html>