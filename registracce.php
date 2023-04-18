<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" href="css.css">
    <style>
        label{
            margin-left: 10px;
        }
        input{
            margin-left: 10px;
            margin-top:5px;
        }
        input[type="submit"]{
            margin-left: 10px;
            background-color: #fff;
        }
        textarea{
            margin-left: 10px;
        }
        body {
            background-image: url("pozadi.png");
            background-repeat: repeat;
        }
    </style>
</head>
<body style="background-color: #cddded;">
    <ul>
        <li><a  href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="" >Přidat vlastní recept</a></li>
        <li style="float:right"><a href="rozcestnik.html" class = "active">Přihlásit</a></li>
      </ul>
      <div style=" width:300px" id="Doporucujeme"><h1  style="margin-left:30px" >Registrovat</h1></div>
      
      <div style="height: 250px;width: 30vw; margin-top:100px" id="doporuceno">
        <form action="" method="post">
        <label for="heslo">heslo: </label><br>
        <input type="text" name="heslo" id="heslo"><br>
        <label for="heslod">potvrzení hesla: </label><br>
        <input type="text" name="heslod" id="heslod"><br>
        <label for="email">email: </label><br>
        <input type="text" name="email" id="email"><br>
        <input type="submit" value="Registrovat">
        </form>
      </div>



</body>
</html>