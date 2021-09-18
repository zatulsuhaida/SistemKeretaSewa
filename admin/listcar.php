<?php 
session_start(); 
require '../connection.php'; 
 
$sql = "SELECT * FROM kereta"; 
$result = mysqli_query($conn, $sql); 
?> 
 
<html> 
 
<head> 
    <title>SKS</title> 
    <link rel="stylesheet" href="../style.css"> 
</head> 
 
<body> 
    <center> 
        <h2> Display Car List</h2> 
        <br> Nama Programmer: admin (suhaida)</a> 
    </center> 
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="../index.php">Home</a> 
        | 
        <a href="listcar.php">Car List </a> 
        | 
        <a href="register.php">Register Car</a>
        ] 
    </nav> 
    <br> 
    <table border="1"> 
        <tr> 
            <th>Idkereta</th> 
            <th>Modal</th> 
            <th>Priceperday</th> 
            <th>Priceperweek</th> 
            <th>Action</th> 
        </tr> 
 
        <?php 
        if (mysqli_num_rows($result) > 0) { 
 
 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?> 
 
                <tr> 
                    <td><?php echo $row["idkereta"]; ?></td> 
                    <td><?php echo $row["modal"]; ?></td> 
                    <td><?php echo $row["priceperday"]; ?></td> 
                    <td><?php echo $row["priceperweek"]; ?></td> 
                    <td colspan="2"> 
                        <a href="updatecar.php?idkereta=<?php echo $row["idkereta"]; ?>">Update</a> 
                        <a href="deletecar.php?idkereta=<?php echo $row["idkereta"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a> 
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