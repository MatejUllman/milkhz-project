<?php 

$nazev = $_POST["nazev"];
$doba = $_POST["doba"];

$postup = $_POST["postup"];
$nar = $_POST["nar"];

$connect = new mysqli("localhost","root","","receptar");


$sql ="INSERT into recepty(nazev,postup,dobaPripravy,narocnost) VALUES('$nazev','$postup','$doba min','$nar')";

if($connect->query($sql)){
    echo "Úspěšně uloženo";
}
header('location:pridavani.html');
die();




?>