<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepty</title>
    <link rel="stylesheet" href="css.css">
    <style>
        .b{
            margin:5px;
        }
    </style>
</head>
<body style="background-color: rgb(185, 214, 242);">
    <ul>
        <li><a  href="HlavniStrana.html">Domů</a></li>
        <li><a class="active" href="recepty.html">Recepty</a></li>
        <li><a href="">Oblíbené</a></li>
        <li><a href="">Na později</a></li>
        <li><a href="pridavani.html">Přidat vlastní recept</a></li> 
        <li style="float:right"><a href="">Přihlásit</a></li>
      </ul>
      <div id="recept"><h1 >Recepty</h1></div>
<div style="display:flex; ">
      <div style="margin-left: 5%; display: inline-block; display:flex;flex-direction: column;" id="doporuceno">
      <?php
     $connect = new mysqli("localhost","root","","receptar");

     $sql = "SELECT * FROM recepty order by id asc;";
     
     $results = $connect->query($sql);
     if($results == true){
         
        while($row = $results->fetch_object()){
           
            vypis($row);
        }
     }
     function vypis($row){
       // zde udělej css-ka
        echo "
        <div style='display:flex;'>
        <div style=' width:127px;'>
        <h1>$row->nazev</h1><br>
        <!--<p>$row->postup</p>-->
        <p>Náročnost: $row->narocnost</p>
        <!-- style='margin-left:250px;' -->
        </div>
        <div style='margin-left:100px; width:327px;'>
        <img src='$row->obrazek ' width='120px' height='105px'>
        <p>doba přípravy: $row->dobaPripravy</p>
        </div>
        <div style='margin-top:50px;'>
        <button type='button' class='b' >zobrazit postup</button>
        <button type='button' class='b'>přidat do oblíbených</button>  
        <button type='button' class='b'>přečíst později</button> 
        </div>
        </div>
        ";
        
     }
        
    ?>
    
    
    </div>
        <div style="float: right; margin-right: 5%;" id="doporuceno">
        <h2>Zde se objeví postu přípravy receptu</h2>
    </div>
</div>
</body>
</html>