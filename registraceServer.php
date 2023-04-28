<?php
session_start();
$emaill = "";
if (isset($_POST["registrace"])) {
    $email = $_POST["email"];
    $heslo = $_POST["heslo"];

    $connect = new mysqli("localhost", "root", "", "receptar");

    //$hashedHeslo = password_hash($heslo,PASSWORD_DEFAULT);

    $selectSQL = "SELECT * FROM uzivatel WHERE email = '$email';";
    $result = $connect->query($selectSQL);
    if ($result->num_rows > 0) {
        header('location:registracce.php');
        die();
    }
    $sql = "INSERT into uzivatel(email,heslo)VALUES('$email','$heslo');";

    if ($connect->query($sql)) {
        echo "Úspěšně uloženo";
    }

    header('location:rozcestnik.html');
    die();

}
if (isset($_POST["odh"])) {
    session_destroy();
    $connect = new mysqli("localhost", "root", "", "receptar");

    $sqlobl = "SELECT * FROM oblibenerecepty;";
    $sqlpoz = "SELECT * FROM odlozenerecepty;";
    $receptysql = "UPDATE recepty SET email =''";
    $resulty = $connect->query($receptysql);
    $nazvy = [];
    $postup = [];
    $doba = [];
    $narocnost = [];
    $obr = [];
    $idobl = [];
    $idodl = [];

    $results = $connect->query($sqlobl);
    if ($results == true) {

        while ($row = $results->fetch_object()) {
            array_push($nazvy, $row->nazev);
            array_push($postup, $row->postup);
            array_push($doba, $row->dobaPripravy);
            array_push($narocnost, $row->narocnost);
            array_push($obr, $row->obrazek);
            array_push($idobl, $row->nazev);

        }
    }

    $result = $connect->query($sqlpoz);
    if ($result == true) {

        while ($row = $result->fetch_object()) {
            array_push($nazvy, $row->nazev);
            array_push($postup, $row->postup);
            array_push($doba, $row->dobaPripravy);
            array_push($narocnost, $row->narocnost);
            array_push($obr, $row->obrazek);
            array_push($idodl, $row->nazev);
        }
    }

    for ($i = 0; $i < count($nazvy); $i++) {
        $sqlzpet = "INSERT into recepty(nazev,postup,dobaPripravy,narocnost,obrazek) VALUES('$nazvy[$i]','$postup[$i]','$doba[$i]','$narocnost[$i]','$obr[$i]');";
        if ($connect->query($sqlzpet)) {
            echo "Úspěšně uloženo";
        }
    }
    for ($i = 0; $i < count($idobl); $i++) {
        $_SESSION["text"] .= $idobl[$i] . ',';
    }
    for ($i = 0; $i < count($idodl); $i++) {
        $_SESSION["textt"] .= $idodl[$i] . ',';

    }

    $receptysql = "UPDATE uzivatel SET ulezenereceptyy =   concat(uzivatel.ulezenereceptyy,' ',' $_SESSION[text]')  WHERE email = '$_SESSION[email]';";
    $result = $connect->query($receptysql);
    $receptysqll = "UPDATE uzivatel SET ulozenereceptyyy = concat(uzivatel.ulozenereceptyyy,' ',' $_SESSION[textt]') WHERE email = '$_SESSION[email]';";
    $resultst = $connect->query($receptysqll);

    $poletext = explode(",", $_SESSION['text']);
    $poletextt = explode(",", $_SESSION['textt']);
    for ($i = 0; $i < count($poletext); $i++) {
        /*$eamilkpridani = "UPDATE recepty set email ='$_SESSION[email]' where nazev LIKE '$poletext[$i]'; ";
        $resulty = $connect->query($eamilkpridani);*/
    }
    for ($i = 0; $i < count($poletextt); $i++) {
        /* $eamilkpridani = "UPDATE recepty set email ='$_SESSION[email]' where nazev LIKE '$poletextt[$i]'; ";
        $resulty = $connect->query($eamilkpridani);*/
    }


    /*
    $receptysqlll = "UPDATE recepty SET kde ='';";
    $result = $connect->query($receptysqlll);*/
    $sqlsm = "DELETE FROM oblibenerecepty;";
    $connect->query($sqlsm);
    $sqlsma = "DELETE FROM odlozenerecepty;";
    $connect->query($sqlsma);
    header('location:HlavniStrana.php');
    die();
}

if (isset($_POST["prihlaseni"])) {
    $emaill = $_POST["email"];
    $heslo = $_POST["hesloj"];
    $_SESSION["email"] = $emaill;
    $connect = new mysqli("localhost", "root", "", "receptar");

    $selectSQL = "SELECT * FROM uzivatel WHERE email = '$emaill';";


    $_SESSION["text"] = "";
    $_SESSION["textt"] = "";

    /*$poletext = explode(",", $_SESSION['text']);
    $poletextt = explode(",", $_SESSION['textt']);
    for ($i = 0; $i < count($poletext); $i++) {
    $eamilkpridani = "UPDATE recepty set email ='$emaill' where nazev LIKE '$poletext[$i]'; ";
    $resulty = $connect->query($eamilkpridani);
    }
    for ($i = 0; $i < count($poletextt); $i++) {
    $eamilkpridani = "UPDATE recepty set email ='$emaill' where nazev LIKE '$poletextt[$i]'; ";
    $resulty = $connect->query($eamilkpridani);
    }*/

    $result = $connect->query($selectSQL);
    if ($result->num_rows > 0) {
        $user = $result->fetch_object();
        if ($user->heslo == $heslo) {
            echo "přihlášen";
            $_SESSION["isLogged"] = true;
            header('location:HlavniStrana.php');
            die();
        } else
            echo "špatné heslo";

        header('location:prihlaseni.php');
        die();
    } else {
        echo "uživatel neexistuje";

        header('location:prihlaseni.php');
        die();
    }


}
?>