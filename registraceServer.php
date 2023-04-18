<?php 

$email = $_POST["email"];


$heslo = $_POST["heslo"];

$connect = new mysqli("localhost","root","","receptar");



$selectSQL = "SELECT * FROM uzivatel WHERE email = '$email';";
$result = $connect->query($selectSQL);
if($result->num_rows >0){
    header('location:registracce.php');
    die();
}
$sql ="INSERT into uzivatel(email,heslo)VALUES('$email','$heslo');";

if($connect->query($sql)){
    echo "Úspěšně uloženo";
}

header('location:rozcestnik.html');
die();




?>