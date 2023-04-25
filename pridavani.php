<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidání</title>
    <link rel="stylesheet" href="css.css">
    <style>
        label {
            margin-left: 10px;
        }

        input {
            margin-left: 10px;
        }

        textarea {
            margin-left: 10px;

        }

        body {
            background-image: url("pozadi.png");
            background-repeat: repeat;
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
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="" class="active">Přidat vlastní recept</a></li>
        <?php
        if (isset($_SESSION["isLogged"])) {
            $isLogged = $_SESSION["isLogged"];
            echo "<li style='float:right'>
            <form action='registraceServer.php' method='post'>
            <input type='submit' id='odh' name='odh' value='Odhlásit' onclick=''>
            </form></li>";

        } else {
            $isLogged = false;
            echo "<li style='float:right'><a href='rozcestnik.html' >Přihlásit</a></li>";
        }

        ?>
    </ul>
    <div style="width: 50vw;" id="Doporucujeme">
        <h1>Přidat recept</h1>
    </div>

    <div style="height: 500px;width: 50vw;" id="doporuceno">
        <form action="serverPridaniReceptu.php" method="post">

            <label for="nazev">název:</label><br>
            <input type="text" name="nazev" id="nazev" required><br>
            <label for="doba">doba přípravy v minutách:</label><br>
            <input type="number" name="doba" id="doba" required><br>
            <label for="postup">postup:</label><br>
            <textarea style="max-width: 100vh; max-height:200px" name="postup" id="postup" cols="96" rows="14"
                maxlength="400" required></textarea><br>
            <label for="obr">obrázek:</label><br>
            <input type="text" name="obr" id="obr"><br>
            <label>náročnost:</label><br>
            <input type="radio" name="nar" value="snadné" checked id="n"><label for="n">snadné</label>
            <input type="radio" name="nar" value="střední" id="m"><label for="m">střední</label>
            <input type="radio" name="nar" value="náročné" id="l"><label for="l">náročné</label><br>
            <input type="submit" value="submit">
        </form>
    </div>

    <script>
        let kk = 0;
        setInterval(function () {
            let element = document.getElementById("postup").value;
            let elementt = document.getElementById("postup");
            let i = 30;
            let j = 3;
            if (element.length > i) {

                let text = element.split(" ");

                /*for(let k = 0; kk < text.length; k++){
                 kk++;
                     if(text[k].length > 16 ){
                         alert("Nevěřim, že by jsi takto dlouhé slovo(a) použil v receptu na jídlo!!! Nesnaž se to rozbít!!!!");
                         elementt.value = "";
                         break;
                     }
                }
                k =0;*/
                if (text.length < j) {
                    alert("Nevěřim, že by jsi takto dlouhé slovo(a) použil v receptu na jídlo!!! Nesnaž se to rozbít!!!!");
                    elementt.value = "";
                    i = 30;
                    j = 3;
                }
                j += 3;
                i += 30;
            }


        }, 1000);
    </script>

</body>

</html>