<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů</title>
    <link rel="stylesheet" href="css.css">
    <style>
        #doporuceno{
            background-color: whitesmoke;
            width: 50vw;
            margin: auto;
            height: 500px;
        }
    </style>
</head>
<body style="background-color: rgb(185, 214, 242);">
    <ul>
        <li><a  href="HlavniStrana.html">Domů</a></li>
        <li><a href="">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="">Na později</a></li>
        <li><a href="" class = "active">přidat recepty</a></li>
        <li style="float:right"><a href="">Přihlásit</a></li>
      </ul>
      <div id="Doporucujeme"><h1 >Přidat recept</h1></div>
      
      <div id="doporuceno">
        <form action="serverPridaniReceptu.php" method="post">

        <label for="nazev">název:</label><br>
        <input type="text" name="nazev" id="nazev" required><br>
        <label for="doba">doba přípravy v minutách:</label><br>
        <input type="text" name="doba" id="doba" required><br>
        <label for="postup">postup:</label><br>
        <textarea name="postup" id="postup" cols="106" rows="14" required></textarea><br>
        <label for="obr">obrázek:</label><br>
        <input type="text" name="obr" id="obr"><br>
        <label >náročnost:</label><br>
        <input type="radio" name="nar" value="snadné" checked><label>snadné</label>
        <input type="radio" name="nar" value="střední" ><label>střední</label>
        <input type="radio" name="nar" value="náročné" ><label>náročné</label><br>
        <input type="submit" value="submit">
        </form>
      </div>



</body>
</html>
