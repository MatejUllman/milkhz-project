<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" href="css.css">
    <style>
        .b {
            height: 50px;
            width: 200px;
            margin-top: 10%;
            background-color: #dbe8f8;
            border: none;
            color: black;
            padding: 12px 24px;
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

        label {
            margin-left: 10px;
        }

        /* input{
            margin-left: 10px;
            margin-top:5px;
        }
        input[type="submit"]{
            margin-left: 30px;
            
           
            
            cursor:pointer;
            height:30px;
            width:100px;
            
        }
        input[type="submit"]:hover{
            margin-left: 30px;
           
           
            cursor:pointer;
            height:30px;
            width:100px;
        }*/
        textarea {
            margin-left: 10px;
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

        #k {
            width: 200px;
            margin: auto;
            padding-top: 40px
        }

        #m {
            width: 40px;
            height: 40px;
            position: absolute;
            background-color: none;
            opacity: 0%;
            cursor: pointer;
        }
    </style>
</head>

<body style="background-color: #cddded;">
    <ul>
        <li><a href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="oblibene.php">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
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
            echo "<li style='float:right'><a href='rozcestnik.html' class = 'active'>Přihlásit</a></li>";
        }

        ?>
    </ul>
    <div style=" width:300px" id="Doporucujeme">
        <h1 style="margin-left:30px">Registrovat</h1>
    </div>

    <div style="height: 250px;width: 30vw; margin-top:100px" id="doporuceno">
        <div id='k'>
            <form action="registraceServer.php" method="post">
                <label for="email">email: </label><br>
                <input type="email" name="email" id="email" required><br>
                <label for="heslo">heslo: </label><br>
                <input type="password" name="heslo" id="heslo" required><br>
                <label for="heslod">potvrzení hesla: </label><br>
                <input type="password" name="heslod" id="heslod" required><br>
                <!--TO OPRAVÍŠ FILIPE JE MI TO JEDNO TOHLE JE VYDÍRÁNÍ ZABIJUTI HOUSENKU-->
                <input type="submit" value="Registrovat" class='b' id='emai' name="registrace"
                    onclick="kontrolastejnosti(event)">
            </form>
            <button id='m' onclick="Kontrolaemail()"></button>
        </div>
    </div>

    <script>


        function kontrolastejnosti(event) {

            let heslo = document.getElementById('heslo').value;
            let heslod = document.getElementById('heslod').value;

            for (let i = 0; i < heslod.length; i++) {
                if (heslod[i] == " ") {
                    event.preventDefault();
                    alert("Zkoušíš to rozbít nebo co?");
                }

            }

            if (heslo != heslod) {
                event.preventDefault();
                alert("Nemáš stejný hesla!!");

            } else if (heslo.length < 6) {
                event.preventDefault();
                alert("Moc krátký heslo!! (musí být delší než 6 znaků)");
            } else if (heslo.trim() == "") {
                event.preventDefault();
                alert("Zkoušíš to rozbít nebo co?");
            }
        }
        function Kontrolaemail() {
            let email = document.getElementById("emai");

            email.style.color = 'blue';
            email.style.backgroundColor = '#f5f5f5';
            email.style.border = 'none';
            email.style.textDecoration = 'underline';

            email.addEventListener("mouseleave", function () {
                email.style.color = 'blue';
                email.style.backgroundColor = '#f5f5f5';
                email.style.border = 'none';
                email.style.textDecoration = 'underline';
            });

            email.addEventListener("mouseenter", function () {
                email.style.color = 'red';
                email.style.backgroundColor = '#f5f5f5';
                email.style.border = 'none';
                email.style.textDecoration = 'underline';

            });
        }

    </script>

</body>

</html>