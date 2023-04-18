<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domů</title>
    <link rel="stylesheet" href="css.css">
    <style>
         .b{
            height:50px;
            margin-top:50px;
            background-color: #dbe8f8; 
            border: none; 
            color: black; 
            padding: 12px 24px; 
            text-align: center;
            display: inline-block; 
            font-size: 16px; 
            cursor: pointer;
            border-radius: 8px; 
            box-shadow: 2px 2px 4px rgba(0,0,0,0.3); 
        }
        .b:hover{
            background-color: #cbddf4;
            
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
<body >
    <ul><!-- rgb(185, 214, 242)  style="background-color:#cddded ;"-->
        <li><a class="active" href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="pridavani.html">Přidat vlastní recept</a></li> 
        <li style="float:right"><a href="rozcestnik.html">Přihlásit</a></li>
      </ul>
      <div id="Doporucujeme">
        <h1 >Doporučujeme</h1>
       
    </div>
      
      <div style="overflow:auto" id="doporuceno">
      <?php
        $connect = new mysqli("localhost", "root", "", "receptar");

        $sql = "SELECT * FROM recepty order by id asc;";
        $a = 0;
        $results = $connect->query($sql);
        if ($results == true) {

            while ($row = $results->fetch_object()) {
                if($a < 5){
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
<div style='border-image: url(pozadi.png)30 round ;border-bottom: 6px solid transparent; width:100%; height:29%; '>
    <input type='hidden' name='$row->id' id='$row->id' value='$row->postup'>

    
    <div style=' width:400px;display:block;float:left'>
        <img style='float:left' src='$row->obrazek ' width='160px' height='145px'>
        <div style=''>
            <h2 style='display:inline;'>$row->nazev</h2><br>
            <p style='display:inline;'>Náročnost: $row->narocnost</p>
           
        </div>
        <div style=''>
        <p>doba přípravy: $row->dobaPripravy</p>
        
        </div>
        
    </div>
   
    <div style='float:right;margin:10px'> 
        <!--<button type='button' class='b'>přidat do oblíbených</button><br><br>-->
        <!--<form action='PridaniNaPozdejiServer.php' method='post'>
        <input type='hidden' name='id' id='id' value='$row->id'>
        <input type='hidden' name='postup' id='postup' value='$row->postup'>
        <input type='hidden' name='obr' id='obr' value='$row->obrazek'>
        <input type='hidden' name='nazev' id='nazev' value='$row->nazev'>
        <input type='hidden' name='nar' id='nar' value='$row->narocnost'>
        <input type='hidden' name='dob' id='dob' value='$row->dobaPripravy'>
        <input type='submit' value='přečíst později'>
        </form><br>-->
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
