<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přečíst později</title>
    <link rel="stylesheet" href="css.css">
    <style>
        .b {
            height: 30px;
            margin-top: 5%;
            background-color: #dbe8f8;
            border: none;
            color: black;
            padding: 1px 12px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .b:hover {
            background-color: #cbddf4;
        }

        #nk {
            position: absolute;
            top: 350px;
            left: 115px
        }

        .popis {
            padding-left: 20px;
            padding-right: 20px;
        }

        body {
            background-image: url("pozadi.png");
            background-repeat: repeat;
        }

        div {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        div::-webkit-scrollbar {
            display: none;
        }

        #odh:last-child {
            border-right: none;
        }

        li #odh {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border: none;
            background-color: #0353a4;
            border-left: 1px solid #bbb;
            height: 46px;
        }

        li #odh:hover:not(.active) {
            background-color: #111;
        }
    </style>
</head>

<body style="background-color: #cddded;">
    <ul>
        <li><a href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="oblibene.php">Oblíbené</a></li>
        <li><a class="active" href="">Na později</a></li>
        <li><a href="pridavani.php">Přidat vlastní recept</a></li>
        <?php
        if (isset($_SESSION["isLogged"])) {
            $isLogged = $_SESSION["isLogged"];
            echo "<li style='float:right'>
            <form action='registraceServer.php' method='post'>
            <input type='submit' id='odh' name='odh' value='Odhlásit' onclick=''>
            </form></li>";
        } else {
            $isLogged = false;
            echo "<li style='float:right'><a href='rozcestnik.html'>Přihlásit</a></li>";
        }

        ?>
    </ul>
    <!-- 
        
      
      
      zde udělej css-ka 
    
    
    
    -->
    <h1 style="margin-left: 5%;">Recepty na později</h1>
    <div style="display:flex; ">
        <div style="margin-left: 5%; display: inline-block; display:flex; flex-direction: column; overflow:auto" id="doporuceno">
            <?php
            $connect = new mysqli("localhost", "root", "", "receptar");

            $sql = "SELECT * FROM odlozenerecepty order by id asc;";
            $i = 0;
            $results = $connect->query($sql);
            if ($results == true) {

                while ($row = $results->fetch_object()) {
                    $i++;
                    vypis($row);
                }
                if ($i == 0) {
                    echo "<div id='nk'>
                    <h1>Nepřidali jste sem žádné recepty!!!</h1>
                </div>
                  ";
                }
                $i = 0;
            }
            ?>
        </div>
        <div style="float:right;background-color: whitesmoke;margin:auto;max-width:500px" class="doporuceno" id='neco'>

        </div>
    </div>
    <?php
    function vypis($row)
    {
        // zde udělej css-ka

        echo "
<div style='border-image: url(pozadi.png)30 round ;border-bottom: 10px solid transparent; width:100%; height:160px'>
    <input type='hidden' name='$row->id' id='$row->id' value='$row->postup'>

    
    <div style=' width:400px;display:block;float:left'>
        <img style='float:left' src='$row->obrazek ' width='175px' height='160px'>
        <div style=''>
            <h2 style='display:inline;padding:0 10px'>$row->nazev</h2><br><br>
            <p style='display:inline;padding-left:10px'>Náročnost: $row->narocnost</p><br><br>
            <p style='padding-left:10px;display:inline'>Doba přípravy: $row->dobaPripravy</p>
        </div>
        
    </div>
   
    <div style='float:right;'>
        <button type='button' class='b' onclick='vypis($row->id)'>Zobrazit postup</button><br>
        

        <form action='PridaniNaPozdejiServer.php' method='post'>
        <input type='hidden' name='id' id='id' value='$row->id'>
        <input type='hidden' name='postup' id='postup' value='$row->postup'>
        <input type='hidden' name='obr' id='obr' value='$row->obrazek'>
        <input type='hidden' name='nazev' id='nazev' value='$row->nazev'>
        <input type='hidden' name='nar' id='nar' value='$row->narocnost'>
        <input type='hidden' name='dob' id='dob' value='$row->dobaPripravy'>
        <input type='submit' class='b' name='ZpozdejiDooblibene' value='Přidat do oblíbených'><br>
        <input type='submit' class='b' name='ZpozdejiDoreceptu' value='Odstranit'>
        </form>
    </div>

    

    
</div>
    <!--<p>$row->postup</p>-->
";
    }


    ?>

    <script src="text.js"></script>
</body>

</html>