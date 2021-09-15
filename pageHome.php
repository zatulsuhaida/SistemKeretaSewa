<?php #login
require('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin') {
    $sql = "SELECT * FROM admin ";
    $row = $conn->query($sql)->fetch_object();
    echo $conn->error;
    if (password_verify($password, $row->PassAdmin)) {
        $_SESSION['admin'] = 'admin';
        header('location: admin/');
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} elseif ($username == 'manager') {
    $sql = "SELECT * FROM manager ";
    $row = $conn->query($sql)->fetch_object();
    if (password_verify($password, $row->PassManager)) {
        $_SESSION['manager'] = 'manager';
        header('location: manager/');
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
} else {
    $sql = "SELECT idpelanggan, password FROM pelanggan WHERE nama = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    $num_rows = $stmt->num_rows;
    $stmt->bind_result($idpelanggan, $pswd);
    
    if ($num_rows == 1) {
        echo $conn->error;
        $stmt->fetch();
        if (password_verify($password, $pswd)) {
            $_SESSION['idpelanggan'] = $idpelanggan;
            header('location: pelanggan/');
        } else {
            ?>
            <script>
                alert('Sorry, invalid username/password!');
                window.location = './';
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert('Sorry, invalid username/password!');
            window.location = './';
        </script>
        <?php
    }
    $stmt->close();
}