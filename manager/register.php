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
        <br> Nama Programmer: <a href="manager/">Manager (Radzi)</a> 
    </center> 
    </pre>
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
    <br>

    <form method="post" action="insertDB.php">
        <table border="0">
            <tr>
                <th colspan="2">
                    <h1>Register Customer</h1>
                </th>
            </tr>
            <tr>
                <th>idCustomer :</th>
                <td><input type="text" name="idCustomer" required></td>
            </tr>
            <tr>
                <th>Nama Penyewa :</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <th>No Telefon :</th>
                <td><input type="text" name="noTelefon" required></td>
            </tr>
            <tr>
                <th>Email :</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>No IC :</th>
                <td><input type="text" name="noIC" required></td>
            </tr>
            <tr>
                <th>Alamat :</th>
                <td><textarea id="address" name="alamat" rows="5" cols="40" required></textarea></td>
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