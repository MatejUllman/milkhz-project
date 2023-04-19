<?php 

$nazev = $_POST["nazev"];
$doba = $_POST["doba"];

$postup = $_POST["postup"];
$nar = $_POST["nar"];
$obr = $_POST["obr"];
$connect = new mysqli("localhost","root","","receptar");


$sql ="INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba min','$nar','$obr')";

if($connect->query($sql)){
    echo "Úspěšně uloženo";
}
header('location:pridavani.php');
die();




?>