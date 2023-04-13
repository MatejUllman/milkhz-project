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
        <li><a class="active" href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="pridavani.html">Přidat vlastní recept</a></li> 
        <li style="float:right"><a href="">Přihlásit</a></li>
      </ul>
      <div id="Doporucujeme">
        <h1 >Doporučujeme</h1>
        <p>Zde se objeví první 3 recepty</p>
    </div>
      
      <div id="doporuceno">
      <?php
        $connect = new mysqli("localhost", "root", "", "receptar");

        $sql = "SELECT * FROM recepty order by id asc;";
        $a = 0;
        $results = $connect->query($sql);
        if ($results == true) {

            while ($row = $results->fetch_object()) {
                if($a < 3){
                vypis($row);
                $a++;
                }
            }
        }
        ?>
      </div>
      <?php
      function vypis($row)
    {
        // zde udělej css-ka

        echo "
<div style='border: 2px solid black; width:99.5%; height:33.33%'>
    <input type='hidden' name='$row->id' id='$row->id' value='$row->postup'>

    
    <div style=' width:400px;display:block;float:left'>
        <img style='float:left' src='$row->obrazek ' width='160px' height='145px'>
        <div style=''>
            <h1 style='display:inline;'>$row->nazev</h1><br>
            <p style='display:inline;'>Náročnost: $row->narocnost</p>
           
        </div>
        <div style=''>
        <p>doba přípravy: $row->dobaPripravy</p>
        
        </div>
        
    </div>
   
    <div style='float:right;margin:10px'> 
        <button type='button' class='b'>přidat do oblíbených</button><br><br>
        <button type='button' class='b'>přečíst později</button><br><br>
        <button type='button' class='b' onclick=document.location='recepty.php'>Více podrobností</button>
       <!-- <a style='padding:5px;border:2px solid black;' href='recepty.php'>Více podrobností</a> -->
    </div>

    

    
</div>
    <!--<p>$row->postup</p>-->
";}


    ?>

    <script src="text.js"></script>



</body>
</html>
