<?php 

$email = $_POST["email"];


$heslo = $_POST["heslo"];

$connect = new mysqli("localhost","root","","receptar");


$sql ="INSERT into uzivatel(email,heslo)VALUES('$email','$heslo');";

if($connect->query($sql)){
    echo "Úspěšně uloženo";
}

header('location:rozcestnik.html');
die();




?>