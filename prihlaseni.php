
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
    <link rel="stylesheet" href="css.css">
    <style>
        label{
            margin-left: 10px;
        }
        input{
            margin-left: 10px;
            margin-top:5px;
        }
        #l{
            margin-left: 10px;
            background-color: olive;
            border: none;
            cursor:pointer;
            height:30px;
            width:100px;
        }
        textarea{
            margin-left: 10px;
        }
        body {
            background-image: url("pozadi.png");
            background-repeat: repeat;
        }
        div{
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        div::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body style="background-color: #cddded;">
    <ul>
        <li><a  href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="pridavani.php" >Přidat vlastní recept</a></li>
        <?php 
        if(isset($_SESSION["isLogged"])){
            $isLogged = $_SESSION["isLogged"];
            echo "<li style='float:right'>
            <form action='registraceServer.php' method='post'>
            <input type='submit' id='odh' name='odh' value='Odhlásit' onclick=''>
            </form></li>";
            
        }else{
            $isLogged = false;
            echo "<li style='float:right'><a href='rozcestnik.html' class = 'active'>Přihlásit</a></li>";
        }

        ?>

       
      </ul>
      <div style=" width:300px; margin:auto" id="Doporucujeme"><h1 >Přihlášení</h1></div>
      

      <div style="height: 250px;width: 30vw; margin-top:100px;" id="doporuceno">
        <form action="registraceServer.php" method="post">
        <label for="email">email: </label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="heslo" >heslo: </label><br>
        <input type="password" name="hesloj" id="hesloj" required><br>
        
        <input type="submit" name="prihlaseni" id='l' value="Registrovat" onclick="">
        </form>

        
    
      </div>



</body>
</html>