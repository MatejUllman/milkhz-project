<?php
session_start();
$nazev = $_POST["nazev"];
$doba = $_POST["dob"];
$id = $_POST["id"];
$postup = $_POST["postup"];
$nar = $_POST["nar"];
$obr = $_POST["obr"];

/*echo $nazev;
echo $doba;
echo $obr;
echo $nar;
echo $postup;
echo $id;*/

$connect = new mysqli("localhost", "root", "", "receptar");
if (isset($_POST["pozdeji"])) {
    /* $sql = "INSERT into odlozenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqldva = "DELETE FROM recepty WHERE id = $id;";
    if ($connect->query($sql)) {
    echo "Úspěšně uloženo";
    }
    if ($connect->query($sqldva)) {
    echo "Úspěšně uloženo";
    }*/

    $sqlprid = "SELECT ulozenereceptyyy FROM uzivatel where email = '$_SESSION[email]'";
    $text = "";
    $poletext = [];
    $l = 0;
    $bool = false;
    $results = $connect->query($sqlprid);
    if ($results == true) {
        while ($row = $results->fetch_object()) {
            $text .= $row->ulozenereceptyyy;
        }
        $poletext = explode(",", $text);
    }
    for ($j = 0; $j < count($poletext) - 1; $j++) {

        $pole = trim($poletext[$j]);
        if ($pole == $nazev) {
            $bool = true;
        }

    }
    if (!$bool) {
        $receptysql = "UPDATE uzivatel SET ulozenereceptyyy  =   concat(uzivatel.ulozenereceptyyy ,' ',' $nazev,')  WHERE email = '$_SESSION[email]';";
        $result = $connect->query($receptysql);
    }
    $receptysql = "UPDATE recepty SET email ='ano' where nazev Like '$nazev';";

    $resulty = $connect->query($receptysql);
    $receptysqlll = "UPDATE recepty SET kde ='ne' where nazev Like '$nazev';";
    $result = $connect->query($receptysqlll);
    header('location:recepty.php');
    die();

}
if (isset($_POST["oblibene"])) {


    /*$sqltri = "INSERT into oblibenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqlctyri = "DELETE FROM recepty WHERE id = $id;";
    if ($connect->query($sqltri)) {
    echo "Úspěšně uloženo";
    }
    if ($connect->query($sqlctyri)) {
    echo "Úspěšně uloženo";
    }*/
    $sqlprid = "SELECT ulezenereceptyy FROM uzivatel where email = '$_SESSION[email]'";
    $text = "";
    $poletext = [];
    $l = 0;
    $bool = false;
    $results = $connect->query($sqlprid);
    if ($results == true) {
        while ($row = $results->fetch_object()) {
            $text .= $row->ulezenereceptyy;
        }
        $poletext = explode(",", $text);
    }
    for ($j = 0; $j < count($poletext) - 1; $j++) {

        $pole = trim($poletext[$j]);
        if ($pole == $nazev) {
            $bool = true;
        }

    }
    if (!$bool) {
        $receptysql = "UPDATE uzivatel SET ulezenereceptyy  =   concat(uzivatel.ulezenereceptyy ,' ',' $nazev,')  WHERE email = '$_SESSION[email]';";
        $result = $connect->query($receptysql);
    }
    $receptysqll = "UPDATE recepty SET email ='ano' where nazev Like '$nazev';";
    $result = $connect->query($receptysqll);
    $receptysqlll = "UPDATE recepty SET kde ='ano' where nazev Like '$nazev';";
    $result = $connect->query($receptysqlll);
    header('location:recepty.php');
    die();
}
if (isset($_POST["ZoblibeneDopozdeji"])) {

    $sqlprid = "SELECT ulozenereceptyyy FROM uzivatel where email = '$_SESSION[email]'";
    $text = "";
    $poletext = [];
    $l = 0;
    $bool = false;
    $results = $connect->query($sqlprid);
    if ($results == true) {
        while ($row = $results->fetch_object()) {
            $text .= $row->ulozenereceptyyy;
        }
        $poletext = explode(",", $text);
    }
    for ($j = 0; $j < count($poletext) - 1; $j++) {

        $pole = trim($poletext[$j]);
        if ($pole == $nazev) {
            $bool = true;
        }

    }
    if (!$bool) {
        $receptysql = "UPDATE uzivatel SET ulozenereceptyyy  =   concat(uzivatel.ulozenereceptyyy ,' ',' $nazev,')  WHERE email = '$_SESSION[email]';";
        $result = $connect->query($receptysql);
    }

    $receptysqlll = "UPDATE recepty SET kde ='ne' where nazev Like '$nazev';";
    $result = $connect->query($receptysqlll);

    print_r($poletext);
    header('location:oblibene.php');
    die();
}
if (isset($_POST["ZpozdejiDooblibene"])) {
    /*$sqlsedum = "INSERT into oblibenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqlosm = "DELETE FROM odlozenerecepty WHERE id = $id;";
    if ($connect->query($sqlsedum)) {
    echo "Úspěšně uloženo";
    }
    if ($connect->query($sqlosm)) {
    echo "Úspěšně uloženo";
    }*/

    $sqlprid = "SELECT ulezenereceptyy FROM uzivatel where email = '$_SESSION[email]'";
    $text = "";
    $poletext = [];
    $l = 0;
    $bool = false;
    $results = $connect->query($sqlprid);
    if ($results == true) {
        while ($row = $results->fetch_object()) {
            $text .= $row->ulezenereceptyy;
        }
        $poletext = explode(",", $text);
    }
    for ($j = 0; $j < count($poletext) - 1; $j++) {

        $pole = trim($poletext[$j]);
        if ($pole == $nazev) {
            $bool = true;
        }

    }
    if (!$bool) {
        $receptysql = "UPDATE uzivatel SET ulezenereceptyy  =   concat(uzivatel.ulezenereceptyy ,' ',' $nazev,')  WHERE email = '$_SESSION[email]';";
        $result = $connect->query($receptysql);
    }
    $receptysqlll = "UPDATE recepty SET kde ='ano' where nazev Like '$nazev';";
    $result = $connect->query($receptysqlll);

    header('location:naPozdeji.php');
    die();
}







?>