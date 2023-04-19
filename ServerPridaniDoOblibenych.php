<?php

$nazev = $_POST["nazev"];
$doba = $_POST["dob"];
$id = $_POST["id"];
$postup = $_POST["postup"];
$nar = $_POST["nar"];
$obr = $_POST["obr"];

echo $nazev;
echo $doba;
echo $obr;
echo $nar;
echo $postup;
echo $id;

$connect = new mysqli("localhost","root","","receptar");

    $sql ="INSERT into oblibenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqldva = "DELETE FROM recepty WHERE id = $id;";
    if($connect->query($sql)){
        echo "Úspěšně uloženo";
    }
    if($connect->query($sqldva)){
        echo "Úspěšně uloženo";
    }
    header('location:recepty.php');
    die();
?>