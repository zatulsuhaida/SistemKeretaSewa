<?php
session_start();
include('connection.php');

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

</html>