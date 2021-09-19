<?php  
session_start();  
require '../connection.php';  
  
$sql = "SELECT * FROM tempahan";  
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
    <a href="index.php?menu=SenaraiMaklumatTempahan">Senarai Maklumat Tempahan</a> 
    | 
    <a href="daftar.php?menu=DaftarTempahan">Daftar Tempahan</a> 
    ] 
</nav> 
 
<table border="1"> 
    <tr> 
        <th>idtempahan</th>
        <th>idkereta</th>
        <th>idmanager</th>
        <th>Nama Penyewa</th>
        <th>No Telefon</th>
        <th>Email</th>
        <th>No IC</th>
        <th>Alamat</th>
        <th>Tarikh Ambil</th> 
        <th>Masa Ambil</th> 
        <th>Tarikh Hantar</th> 
        <th>Destinasi</th>
        <th>Action</th> 
    </tr> 
    <?php  
        if (mysqli_num_rows($result) > 0) {  
  
  
            while ($row = mysqli_fetch_assoc($result)) {  
        ?>  
  
                <tr>  
                    <td><?php echo $row["idtempahan"]; ?></td>
                    <td><?php echo $row["idkereta"]; ?></td>
                    <td><?php echo $row["idmanager"]; ?></td>
                    <td><?php echo $row["NamaPenyewa"]; ?></td>
                    <td><?php echo $row["NoTelefon"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["NoIC"]; ?></td>
                    <td><?php echo $row["Alamat"]; ?></td>
                    <td><?php echo $row["tarikhambil"]; ?></td> 
                    <td><?php echo $row["masaambil"]; ?></td> 
                    <td><?php echo $row["tarikhhantar"]; ?></td> 
                    <td><?php echo $row["destinasi"]; ?></td>  

                    <td colspan="2">
                        <a href="update.php?idCustomer=<?php echo $row["idtempahan"]; ?>">Update</a>
                        <a href="delete.php?idCustomer=<?php echo $row["idtempahan"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
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