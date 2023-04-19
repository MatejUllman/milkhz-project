<?php 
    session_start();
?>
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
            margin-top:21%;
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
        p {
     font-family: 'Times New Roman', Times, serif;
        }
        
    </style>
</head>
<body >
    <ul><!-- rgb(185, 214, 242)  style="background-color:#cddded ;"-->
        <li><a class="active" href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="oblibene.php">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="pridavani.php">Přidat vlastní recept</a></li> 
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
      <div id="Doporucujeme">
        <h1 >Doporučujeme</h1>
       
    </div>
      
      <div id="doporuceno">
      <?php
        $connect = new mysqli("localhost", "root", "", "receptar");

        $sql = "SELECT * FROM recepty order by id asc;";
        $a = 0;
        $results = $connect->query($sql);
        if ($results == true) {

            while ($row = $results->fetch_object()) {
                if($a < 4){
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
<div style='border-image: url(pozadi.png)30 round ;border-bottom: 6px solid transparent; width:100%; height:24%; '>
    <input type='hidden' name='$row->id' id='$row->id' value='$row->postup'>

    
    <div style=' width:400px;display:block;float:left'>
        <img style='float:left' src='$row->obrazek ' width='160px' height='120px'>
        <div style=''>
            <h2 style='display:inline;'>$row->nazev</h2><br>
            <p style='display:inline;'>Náročnost: $row->narocnost</p>
           
        </div>
        <div style=''>
        <p>doba přípravy: $row->dobaPripravy</p>
        
        </div>
        
    </div>
   
    <div style='float:right;margin-right:20px;'> 
        <button type='button' class='b' onclick=document.location='recepty.php'>Více podrobností</button>
       
    </div>

    

    
</div>
    <!--<p>$row->postup</p>-->
";}


    ?>

    <script src="text.js"></script>



</body>
</html>
