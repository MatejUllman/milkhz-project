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
        label{
            margin-left: 10px;
        }
        input{
            margin-left: 10px;
            margin-top:5px;
        }
        input[type="submit"]{
            margin-left: 30px;
            background-color: #f5f5f5;
            color:blue;
            border: none;
            cursor:pointer;
            height:30px;
            width:100px;
            text-decoration: underline;
        }
        input[type="submit"]:hover{
            margin-left: 30px;
            background-color: #f5f5f5;
            color:red;
            border: none;
            cursor:pointer;
            height:30px;
            width:100px;
        }
        textarea{
            margin-left: 10px;
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
        #odh:last-child {
        border-right: none;
    }

li #odh {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border:none;
  background-color:#0353a4;
  border-left:1px solid #bbb;
  height:46px;
}

li #odh:hover:not(.active) {
  background-color: #111;
}
#k{
    width:200px;
    margin:auto;
    padding-top:40px
}
    </style>
</head>
<body style="background-color: #cddded;">
    <ul>
        <li><a  href="HlavniStrana.php">Domů</a></li>
        <li><a href="recepty.php">Recepty</a></li>
        <li><a href="oblibene.php">Oblíbené</a></li>
        <li><a href="naPozdeji.php">Na později</a></li>
        <li><a href="pridavani.php" >Přidat vlastní recept</a></li>
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
      <div style=" width:300px" id="Doporucujeme"><h1  style="margin-left:30px" >Registrovat</h1></div>
      
      <div style="height: 250px;width: 30vw; margin-top:100px" id="doporuceno">
      <div id='k'>
        <form action="registraceServer.php" method="post">
        <label for="email">email: </label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="heslo" >heslo: </label><br>
        <input type="password" name="heslo" id="heslo" required><br>
        <label for="heslod" >potvrzení hesla: </label><br>
        <input type="password" name="heslod" id="heslod" required><br>
       <!--TO OPRAVÍŠ FILIPE JE MI TO JEDNO TOHLE JE VYDÍRÁNÍ ZABIJUTI HOUSENKU-->
        <input type="submit" value="Registrovat" name="registrace" onclick="kontrolastejnosti(event)">
        </form>
        </div>
      </div>
       
        <script>
           
           
            function kontrolastejnosti(event){

                let heslo = document.getElementById('heslo').value;
                let heslod = document.getElementById('heslod').value;
                
                for(let i = 0; i < heslod.length; i++){
                    if(heslod[i] == " "){
                        event.preventDefault();
                        alert("Zkoušíš to rozbít nebo co?");
                    }
                    
                }

                if (heslo != heslod) {
                    event.preventDefault();
                    alert("Nemáš stejný hesla kokote!!");
                    
                } else if (heslo.length < 6) {
                    event.preventDefault();
                    alert("Moc krátký kokote!! (musí být delší než 6 znaků)");
                }else if(heslo.trim() == ""){
                    event.preventDefault();
                    alert("Zkoušíš to rozbít nebo co?");
                }
            }
            
        </script>

</body>
</html>