<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKS</title>
</head>
<body>
<center>

  <form action="index.php" method="post">
    <h3>Login</h3>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>

    <button type="submit">Login</button>

  </form>
<body>
<pre>
<center>
<h2>Projek Web Programming</h2>
        
<h1>Nama Sistem : Sistem Kereta Sewa (SKS)</h1>
            
<a href="manager">Manager (Zatul)</a>
-menguruskan senarai maklumat pelanggan
-menguruskan senarai maklumat tayangan
            
<a href="staff">Staff (Radzi)</a>
-menguruskan senarai kereta
            
<a href="pelanggan">Pelanggan (Syakir)</a>
-menguruskan senarai tempahan

<hr></hr>

Database SKS

Pelanggan (idPelanggan, username, password, namapenuh, icno, email, phoneno)

Manager (password)

Staff (password)

<hr></hr> 



<table border="1">
    <?php
        echo "<h1>Table Tempahan</h1>";
    ?>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>    
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
</table>


<table border="1">
    <?php
        echo "<h1>Table Pelanggan</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>  
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr> 
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
</table>

<table border="1">
    <?php
        echo "<h1>Table Manager</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>Password</td>
      <td>Varchar (150)</td>
      <td></td>
    </tr>
</table> 

<table border="1">
    <?php
        echo "<h1>Table Staff</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>Password</td>
      <td>Varchar (150)</td>
      <td></td>
    </tr>
</table>

<hr></hr>

</center>        
</pre>

</body>
</html>