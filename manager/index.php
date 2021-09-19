<?php
session_start();
require '../connection.php';

$sql = "SELECT * FROM customerlist";
$result = mysqli_query($conn, $sql);
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
        <h2> Customer List</h2> 
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

    <table border="1">
        <tr>
            <th>idCustomer</th>
            <th>Nama Penyewa</th>
            <th>No Telefon</th>
            <th>Email</th>
            <th>No IC</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {


            while ($row = mysqli_fetch_assoc($result)) {
        ?>

                <tr>
                    <td><?php echo $row["idCustomer"]; ?></td>
                    <td><?php echo $row["NamaPenyewa"]; ?></td>
                    <td><?php echo $row["NoTelefon"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["NoIC"]; ?></td>
                    <td><?php echo $row["Alamat"]; ?></td>

                    <td colspan="2">
                        <a href="update.php?idCustomer=<?php echo $row["idCustomer"]; ?>">Update</a>
                        <a href="delete.php?idCustomer=<?php echo $row["idCustomer"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
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