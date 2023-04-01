<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů</title>
    <link rel="stylesheet" href="css.css">
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
      <div id="Doporucujeme"><h1 >Doporučujeme</h1></div>
      
      <div id="doporuceno">
        <form action="serverPridaniReceptu.php" method="post">

        <label for="nazev"></label>
        <input type="text" name="nazev" id="nazev"><br>
        <label for="doba"></label>
        <input type="text" name="doba" id="doba"><br>
        <label for="postup"></label>
        <textarea name="postup" id="postup" cols="80" rows="30"></textarea><br>
        <label for="obr"></label>
        <input type="text" name="obr" id="obr"><br>
        <input type="radio" name="nar" value="snadné" ><label>obtížnost</label>
        <input type="radio" name="nar" value="střední" ><label>obtížnost</label>
        <input type="radio" name="nar" value="náročné" ><label>obtížnost</label>
        </form>
      </div>



</body>
</html>
