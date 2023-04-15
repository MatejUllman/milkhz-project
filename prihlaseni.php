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
        }
        textarea{
            margin-left: 10px;
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
        <li style="float:right"><a href="" class = "active">Přihlásit</a></li>
      </ul>
      <div style="width: 50vw;" id="Doporucujeme"><h1 >Přihlásit</h1></div>
      
      <div style="height: 500px;width: 50vw;" id="doporuceno">
        <form action="serverPridaniReceptu.php" method="post">

        
        </form>
      </div>



</body>
</html>