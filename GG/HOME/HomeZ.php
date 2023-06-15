<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/d781f1c539.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Extra/Css.css">
    <script src="Extra/JS.js"></script>
    <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "users";
        $conn = mysqli_connect("localhost", "root", "", "gg");

        if($conn === false){
            die("ERROR: Iets ging fout." . mysqli_connect_error()); 
        }

        $titleinput = $_REQUEST['titleinput'];

        $sql = "INSERT INTO titel VALUES ('$titleinput')";

        if(mysqli_query($conn, $sql)){

            echo nl2br("\n$titleinput");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</head> 
<body id="body">
    <header id="header">
        <div id="button-group">
            <button id="webshop" type="button"><a href="webshop/Login/Login.php">Webshop</a></button>
            <button type="button" onclick="myFunction()" id="eye">Eye-Modus<img id="img-eye" src="Extra/Foto/Home/bulb-icon.webp"></button>
            <button id="tijd-button" type="button" onclick="myFunctionTijd()">Tijd/Datum<img id="img-tijd" src="Extra/Foto/Home/61227klok"></button>
        </div>
        <a href="HomeZ.php"><div id="Givenchy"><h1 id="Givenchy1">Givenchy</h1></div></a>

        <div id="profile">
            <a id="A-header" href="https://github.com/Givenchy9" target="blanc"><img id="profile-picture" src="Extra/Foto/Home/GITHUB-LOGO-768x432.png"></a>
        </div> 
    </header>
    

    <nav>
        <div id="div1">
            <button class="jaren" onclick="myFunctiona()">Jaar1</button>
            <button class="jaren">Jaar2</button>
            <button class="jaren">Jaar3</button>
            
        </div>

        <div id="div2">
            <button class="exitx" onclick="myFunctionExitx()">X</button>
            <button class="semesters" onclick="myFunctionb()">Semester1</button><button class="exit" onclick="myFunctionExit1()">X</button>
            <div id="div20">
            <button class="aaa"><a href="Extra/jaar 1/Semester1/Semester1/Semester1.php" target="blanc">Semester1</a></button>
            </div>

            <button class="semesters" onclick="myFunctionc()">Semester2</button><button class="exit" onclick="myFunctionExit2()">X</button>
            <div id="div21">
                <button class="exit1" onclick="myFunctionExit3()">X</button>
                <button onclick="myFunctiond()" class="opdrachten">Basis</button>
                <div id="div22">
                    <button class="aaa"><a href="Extra/jaar 1/Semester2/Basis Opdrachten/Array.php" target="blanc">Array</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/Circle.txt" target="blanc">Circle</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/Deelbaar.txt" target="blanc">Deelbaar</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/Geheimschrijver.txt" target="blanc">Geheim<br>schijver</a></button>
                    <button class="aaa"><a href="Extra/jaar 1/Semester2/Basis Opdrachten/Hoofdletters.php" target="blanc">Hoofdletters</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/leeftijd" target="blanc">Leeftijd</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/leeftijdgrenzen" target="blanc">Leeftijds<br>grens</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Basis Opdrachten/Mail to Username" target="blanc">Mail to username</a></button>
                </div>
                <button class="opdrachten" onclick="myFunctione()">Frontend</button>
                <button class="exit1" onclick="myFunctionExit4()">X</button>
                    <div id="div23">
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/Afbeeldingen/Afbeeldingen.html" target="blanc">Afbeeldingen</a></button>
                        <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/FRONTEND/casino (niet af)/casino.html" target="blanc">Casino</a></button>
                        <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/FRONTEND/ColorGame/ColorGame.html" target="blanc">Color<br>Game</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/eerstewebsite/eerstewebsite1.html" target="blanc">Eerste<br>website</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/Events/Events.html" target="blanc">Events</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/Input value/input value.html" target="blanc">Input<br>Value</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/Tabellen/Tabellen.html" target="blanc">Tabellen</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/Tafels/Tafels.html" target="blanc">Tafels</a></button>
                        <button class="aaa"><a href="Extra/jaar 1/Semester2/FRONTEND/VUE3/VUE3.html" target="blanc">VUE3</a></button>
                    </div>
                <button class="opdrachten">Backend</button>
                <button class="exit1" onclick="myFunctionExit5()">X</button>
                <button class="opdrachten" onclick="myFunctiong()">Games</button>
                <button class="exit1" onclick="myFunctionExit6()">X</button>
                    <div id="div25">
                        <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Games/Game1.html" target="blanc">Blok</a></button>
                        <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Games/interval.html" target="blanc">Interval</a></button>
                    </div>
                <button class="opdrachten" onclick="myFunctionh()">JS</button>
                <button class="exit1" onclick="myFunctionExit7()">X</button>
                <div id="div26">
                <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/JS/JS-navbar.html" target="blanc">Navigation<br>Bar</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Form/FormZ/FormZ.html" target="blanc">Form<br>Validate</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Form/form0.html" target="blanc">Form1</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Form/form1.html" target="blanc">Form2</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Rekenmachiene/Rekenmachiene1.html" target="blanc">Reken1</a></button>
                    <button class="aaa"><a class="niet-klaar" href="Extra/jaar 1/Semester2/Rekenmachiene/Rekenmachiene2.html" target="blanc">Reken2</a></button>
                </div>
                <button class="opdrachten" onclick="myFunctioni()">PHP</button>
                <button class="exit1" onclick="myFunctionExit8()">X</button>
                <div id="div27">
                    <button class="aaa"><a href="Login.php" target="blanc">Login</a></button>
                </div>
                <button class="opdrachten" onclick="myFunctioni()">JSON</button>
                <button class="exit1" onclick="myFunctionExit8()">X</button>
                <div id="div28">
                    <button class="aaa"><a href="Extra/jaar 1/JSON/json.json" target="blanc">json</a></button>
                </div>
            </div>
        </div>
    </nav>


    <main id="main">
         <aside id="leftAside" class="open">
         <p id="tijd"></p>
            <p id="todo">
                <p id="todo2"></p></p>
         </aside>
        <div id="ctrlBar" onclick="showHideAside()">
            &lt;
        </div>
        <section>

            <video autoplay="" loop="" muted="" opacity="200%" width="500" height="500">
                <source type="video/mp4" src="Extra/Foto/Video/Y2Mate.is - The Official FIFA World Cup Qatar 2022™ Theme  FIFA World Cup 2022 Soundtrack-EXXe-G-_lxI-480p-1654706430302.mp4">
            </video>

        </section>
        <aside id="rightAside" class="open">
        <button id="logout"><a id="logout1" href="../Login.php" onclick="myFunctionAlert()">Logout</a></button>
        </aside>
     </main>
     <footer id="footer">
        <button onclick="myFunctionFooter()">Verzin een leuke titel voor deze pagina<button onclick="myFunctionFooterExit()">X</button></button>
        <div id="footer1">
            <form metod="post">
                <input id="titleinput" name="titleinput" type="text" placeholder="Voer naam voor titel" onkeyup="myFunctionFooterTitle()">
                <input type="submit" id="titleknopp">      
                <p id="demoF"></p> 
            </from>
        </div>
     </footer>
</body>
</html> 