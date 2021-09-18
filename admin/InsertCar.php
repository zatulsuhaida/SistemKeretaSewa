<?php
session_start();
require '../connection.php';

$idkereta = $_POST["idkereta"];
$modal = $_POST["modal"];
$priceperday = $_POST["priceperday"];
$priceperweek = $_POST["priceperweek"];


//error checking

if ($idkereta == "") {
    echo "<script>alert('Please Enter idkereta Number');window.location='register.php'</script>";
}
if ($modal == "") {
    echo "<script>alert('Please Enter modal ');window.location='register.php'</script>";
}

if ($priceperday == "") {

    echo "<script>alert('Please Enter priceperday');window.location='register.php'</script>";
}

if ($priceperweek == "") {
    echo "<script>alert('Please Enter priceperweek ');window.location='register.php'</script>";
}


$sql = "INSERT INTO kereta(idkereta,modal,priceperday,priceperweek)VALUES('$idkereta','$modal','$priceperday','$priceperweek')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='listcar.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();