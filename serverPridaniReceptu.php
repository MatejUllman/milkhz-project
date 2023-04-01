<?php 

$nazev = $_POST["nazev"];
$doba = $_POST["doba"];
$doba += " min";
$postup = $_POST["postup"];
$nar = $_POST["nar"];

$connect = new mysqli("localhost","root","","receptar");


$sql ="";




?>