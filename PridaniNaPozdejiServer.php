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

$connect = new mysqli("localhost", "root", "", "receptar");
if (isset($_POST["pozdeji"])) {
    $sql = "INSERT into odlozenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqldva = "DELETE FROM recepty WHERE id = $id;";
    if ($connect->query($sql)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqldva)) {
        echo "Úspěšně uloženo";
    }
    header('location:recepty.php');
    die();

}
if (isset($_POST["oblibene"])) {


    $sqltri = "INSERT into oblibenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqlctyri = "DELETE FROM recepty WHERE id = $id;";
    if ($connect->query($sqltri)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqlctyri)) {
        echo "Úspěšně uloženo";
    }
    header('location:recepty.php');
    die();
}
if (isset($_POST["ZoblibeneDopozdeji"])) {
    $sqlpet = "INSERT into odlozenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqlsest = "DELETE FROM oblibenerecepty WHERE id = $id;";
    if ($connect->query($sqlpet)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqlsest)) {
        echo "Úspěšně uloženo";
    }
    header('location:oblibene.php');
    die();
}
if (isset($_POST["ZpozdejiDooblibene"])) {
    $sqlsedum = "INSERT into oblibenerecepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqlosm = "DELETE FROM odlozenerecepty WHERE id = $id;";
    if ($connect->query($sqlsedum)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqlosm)) {
        echo "Úspěšně uloženo";
    }
    header('location:naPozdeji.php');
    die();
}
if (isset($_POST["ZoblibeneDoreceptu"])) {
    $sqldevet = "INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqldeset = "DELETE FROM oblibenerecepty WHERE id = $id;";
    if ($connect->query($sqldevet)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqldeset)) {
        echo "Úspěšně uloženo";
    }
    header('location:oblibene.php');
    die();
}
if (isset($_POST["ZpozdejiDoreceptu"])) {
    $sqljedenact = "INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazev','$postup','$doba','$nar','$obr');";
    //DELETE FROM recepty WHERE `recepty`.`id` = $id;
    $sqldvanact = "DELETE FROM odlozenerecepty WHERE id = $id;";
    if ($connect->query($sqljedenact)) {
        echo "Úspěšně uloženo";
    }
    if ($connect->query($sqldvanact)) {
        echo "Úspěšně uloženo";
    }
    header('location:naPozdeji.php');
    die();
}
?>