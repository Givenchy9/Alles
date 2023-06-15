<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>'
    <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "users";
        $conn = mysqli_connect("localhost", "root", "", "users");

        if($conn === false){
            die("ERROR: Iets ging fout." . mysqli_connect_error()); 
        }

        $naam = $_REQUEST['naam'];
		$achternaam = $_REQUEST['achternaam'];
		$leeftijd = $_REQUEST['leeftijd'];
        $provincie = $_REQUEST['provincie'];
		$siblings = $_REQUEST['siblings'];
        $lengte = $_REQUEST['lengte'];
        $opmerkingen = $_REQUEST['opmerkingen'];

        $sql = "INSERT INTO Sign VALUES ('$naam','$achternaam','$leeftijd','$provincie','$siblings','$lengte','$opmerkingen')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin</h3>";

            echo nl2br("\n$naam\n $achternaam\n $leeftijd \n $provincie \n $siblings \n $lengte \n $opmerkingen");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
    <style>
        #body{
            margin-top: -280px;
            background: lightblue;
        }
        #container{
            border: solid wheat 5px;
            width: 200px;
            height: 480px;
            background-color: white;
            margin: auto;
            transition: 1s;
            padding-bottom: 10px;
            margin-top: -100px;
        }
        #inputs{
            width: 50%;
            padding-top: 10px;
            padding-left: 10px;
            margin-top: 50px;
        }
        #naam{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #achternaam{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #leeftijd{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #provincie{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #siblings{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #lengte{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #opmerkingen{
            border: solid wheat 3px;
            border-radius: 20px;
            width: 170px;
        }
        #button1{
            margin-top: 10px;
            background color: wheat;
            width: 180%;
            background-color: wheat;
            border: solid black 3px;
            border-radius: 20px;
        }
        #lock{
            height: 50px;
            width: 50px;
            margin-left: 25%;
            /* margin: auto; */
        }
        .front-img{
            height: 100px;
            width: 100px;
            margin: auto;
            position: absolute;
            margin-bottom: 50px;
        }
        .back-img{
            height: 100px;
            width: 100px;
            margin: auto;
            position: absolute;
            margin-bottom: 50px;
        }
        .back-img:hover{
            height: 100px;
            width: 100px;
            margin: auto;
            opacity: 0%;
            margin-bottom: 50px;
        }
        #button2{
            margin-top: 10px;
            background color: wheat;
            width: 180%;
            background-color: wheat;
            border: solid black 3px;
            border-radius: 20px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        #button3{
            margin-top: 10px;
            background color: wheat;
            width: 180%;
            background-color: wheat;
            border: solid black 3px;
            border-radius: 20px;
        }
    </style>
    <script>
        function myFunction(){
            document.getElementById("container").style.backgroundColor = "black";
        }
        function validateFrom() {
                console.log("het werkt")
                let a = document.getElmentById("naam").value;
                let b = document.getElmentById("achternaam").value;
                let c = document.getElmentById("leeftijd").value;
                let d = document.getElmentById("lengte").value;

                if (a == "") {
                    document.getElementById("naam").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Voornaam  invullen!!!"
                    return false
                } else {
                    document.getElementById("naam").style.backgroundColor = "green"
                    document.getElementById("naam").innerHTML = ""
                }

                if (b == "") {
                    document.getElementById("achternaam").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Achternaam invullen!!!"
                    return false
                } else {
                    document.getElementById("achternaam").style.backgroundColor = "green"
                    document.getElementById("achternaam").innerHTML = ""
                }

                document.getElementById("naam").style.backgroundColor = "green"
                if (inp.id == "leeftijd" || inp.id == "lengte") {
                if (inp.value.length > 3 ) {
                    inp.style.backgroundColor = "green"
                } else {
                    inp.style.backgroundColor = "red"
                }

                document.getElementById("naam").style.backgroundColor = "green"
                if (inp.id == "naam" || inp.id == "achternaam") {
                if (inp.value.length < 3 ) {
                    inp.style.backgroundColor = "green"
                } else {
                    inp.style.backgroundColor = "red"
                }
            }
        }
        }
    </script>
</head> 
<body id="body">
    <div id="container">
        <form id="form" action="Signin.php" method="post">
        <div id="lock">
            <img class="front-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102439.png">
            <img class="back-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102433.png">
        </div>
            <div id="inputs">
                <label>Voornaam<br><input id="naam" type="text" placeholder="User Name" name="naam" onkeyup="validateFrom()"></label><br>
                <label>Achternaam<input id="achternaam" type="text" name="achternaam"></label><br>
                <label>Leeftijd<br><input id="leeftijd" type="number" min="12" max="65" name="leeftijd"></label><br>
                <label>Provincie
                <select name="provincie" id="provincie">
                    <option value="Nederland">Nederland</option>
                    <option value="Groningen">Groningen</option>
                    <option value="Drenthe">Drenthe</option>
                    <option value="Flevoland">Flevoland</option>
                    <option value="Friesland">Friesland</option>
                    <option value="Gelderland">Gelderland</option>
                    <option value="Noord-Holland">Noord-Holland</option>
                    <option value="Zuid-Holland">Zuid-Holland</option>
                    <option value="Overijssel">Overijssel</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="Zeeland">Zeeland</option>
                    <option value="opel">Noord-Brabant</option>
                    <option value="Limburg">Limburg</option>
                </select>
                </label>
                <label>Broers of Zussen?
                <select name="siblings" id="siblings">
                    <option value="geen">geen</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="meer dan 5">meer dan 5</option>
                </select>
                </label>
                <label>lengte CM<br><input id="lengte" type="number" min="160" max="210" name="lengte"></label><br>
                <label>Opmerkingen<br><input type="text" id="opmerkingen" name="opmerkingen"></label><br>
                <input id="button1" type="submit" value="Verzenden" onclick="validateFrom()">
                <button id="button2"><a href="Login.php">Inloggen</a></button>
                <p id="demox"></p>
                <!-- <button id="button3" onclick="myFunction()">Eye-Modus</button>  -->
            </div>
        </form>
    </div>
</body>
</html> 