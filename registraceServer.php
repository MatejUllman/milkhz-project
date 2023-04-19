<?php 



    session_start();

    
        
    




if(isset($_POST["registrace"])){
$email = $_POST["email"];
$heslo = $_POST["heslo"];

$connect = new mysqli("localhost","root","","receptar");

//$hashedHeslo = password_hash($heslo,PASSWORD_DEFAULT);

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

}
if (isset($_POST["odh"])){
    session_destroy();
    header('location:HlavniStrana.php');
        die();
}
if(isset($_POST["prihlaseni"])){
    $email = $_POST["email"];
    $heslo = $_POST["hesloj"];

    $connect = new mysqli("localhost","root","","receptar");

    $selectSQL = "SELECT * FROM uzivatel WHERE email = '$email';";

    $result = $connect->query($selectSQL);
    if($result->num_rows >0){
    $user = $result->fetch_object();
    if($user->heslo == $heslo){
        echo"přihlášen";
        $_SESSION["isLogged"] = true;
        header('location:prihlaseni.php');
        die();
    }else
        echo"špatné heslo";
        
        header('location:prihlaseni.php');
        die();
    }else {
        echo "uživatel neexistuje";
        
        header('location:prihlaseni.php');
        die();
    }


}

?>