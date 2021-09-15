<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <form action="pageHome.php" method="post">
            <h2>Login</h2>
            <div class="container"></div>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <button type="submit">Login</button>

        </form>

        <h2>DFP4063 Projek Web Programming</h2>

        <h1>Nama Sistem : Sistem Kereta Sewa (SKS)</h1>

        <div>
            <h2>CRUD</h2>
        </div>

        <ul>
            <li><a href="admin/index.php">Admin (Zatul)</a></li>
            <p>- menguruskan senarai kereta</p>

            <li><a href="manager/index.php">Manager (Radzi)</a></li>
            <p>- menguruskan senarai customer</p>

            <li><a href="customer/index.php">Customer (Syakir)</a></li>
            <p>- menguruskan senarai tempahan kereta</p>
        </ul>

        <hr>
        </hr>
    </center>
</body>

</html>