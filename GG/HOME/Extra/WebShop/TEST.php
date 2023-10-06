<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="Css-JS-PHP/css.css">
    <script src="Css-JS-PHP/js.js"></script>
    <script src="https://kit.fontawesome.com/d781f1c539.js" crossorigin="anonymous"></script>
</head> 
<?php

    $firstname = $_POST['fname'];
    $password = $_POST['pass'];

    $firstname = stripslashes($firstname);
    $password = stripslashes($password);

    $conn = mysqli_connect("localhost", "root", "", "webshop");

    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_select_db($conn, "webshop");

    // Prepare a statement with a parameterized query
    $stmt = mysqli_prepare($conn, "SELECT * from users where firstname = ? and password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $firstname, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    if (!empty($row) && $row['firstname'] == $firstname && $row['password'] == $password){
        // echo "Welcome " . $row['firstname']; 
    } else {
        echo "Failed to login!";
        header("Location: error.php");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
<body id="body">
    <header id="header">
        <button id="eye" onclick="myFunctionEye()">Eye-Mode</button>
        <button id="eye-off" onclick="myFunctionEyeOff()">Eye-Mode Off</button>
        <div id="title">
            <h1 id="title1">Webshop</h1>
        </div>
        <div id="welcome">
            <?php echo "Welcome, " . $row['firstname']; ?>
        </div>
    </header>
    <nav id="nav">
        <div id="nav-div">
            <button class="nav-divs" id="nav-div1" onclick="myFunctionPage1()">Shirts</button>
            <button class="nav-divs" id="nav-div2" onclick="myFunctionPage2()">Shorts</button>
            <button class="nav-divs" id="nav-div3" onclick="myFunctionPage3()">Shoes</button>
            <button class="nav-divs" id="nav-div4" onclick="myFunctionPage4()">Others</button>
        <div>
    </nav>
    <div id="page1">
        <button id="page1-exit" onclick="myFunctionPage1Exit()">X</button>
        <div id="page1-buttons">
            <button class="page1-button" id="page1-button1" onclick="myFunctionPage11()">Primier Leauge</button>
            <button class="page1-button" id="page1-button2" onclick="myFunctionPage12()">LaLiga</button>
            <button class="page1-button" id="page1-button3" onclick="myFunctionPage13()">SerieA</button>
            <button class="page1-button" id="page1-button4" onclick="myFunctionPage14()">Bundesliga</button>
            <button class="page1-button" id="page1-button5" onclick="myFunctionPage15()">Eredevisie</button>
            <button class="page1-button" id="page1-button6" onclick="myFunctionPage16()">Ligue1</button>
            <button class="page1-button" id="page1-button6" onclick="myFunctionPage17()">South-America</button>
            <button class="page1-button" id="page1-button6" onclick="myFunctionPage18()">Others</button>
        </div>
        <div id="page11">
            <button class="page-buttonx" onclick="myFunctionPagesX11()">X</button>
            <div id="page11-buttons">
                <button class="page11-button" onclick="myFunctionPage11z()">Arsenal</button>
                <button class="page11-button" onclick="myFunctionPage12z()">Aston Villa</button>
                <button class="page11-button" onclick="myFunctionPage13z()">Bournemouth</button>
                <button class="page11-button" onclick="myFunctionPage14z()">Brentford</button>
                <button class="page11-button" onclick="myFunctionPage15z()">Brighton</button>
                <button class="page11-button" onclick="myFunctionPage16z()">Burnley</button>
                <button class="page11-button" onclick="myFunctionPage17z()">Chelsea</button>
                <button class="page11-button" onclick="myFunctionPage18z()">Crystal Palace</button>
                <button class="page11-button" onclick="myFunctionPage19z()">Everton</button>
                <button class="page11-button" onclick="myFunctionPage20z()">Fulham</button>
                <button class="page11-button" onclick="myFunctionPage21z()">Leeds United</button>
                <button class="page11-button" onclick="myFunctionPage22z()">Leicester City</button>
                <button class="page11-button" onclick="myFunctionPage25z()">Liverpool</button>
                <button class="page11-button" onclick="myFunctionPage26z()">Man City</button>
                <button class="page11-button" onclick="myFunctionPage27z()">Man United</button>
                <button class="page11-button" onclick="myFunctionPage28z()">Newcastle United</button>
                <button class="page11-button" onclick="myFunctionPage23z()">Nottingham Bos</button>
                <button class="page11-button" onclick="myFunctionPage24z()">Sheffield United</button>
                <button class="page11-button" onclick="myFunctionPage25z()">Southampton</button>
                <button class="page11-button" onclick="myFunctionPage26z()">Stoke City</button>
                <button class="page11-button" onclick="myFunctionPage27z()">Tottenham</button>
                <button class="page11-button" onclick="myFunctionPage28z()">Watford</button>
                <button class="page11-button" onclick="myFunctionPage24z()">Bromwich Albion</button>
                <button class="page11-button" onclick="myFunctionPage25z()">West Ham United</button>
                <button class="page11-button" onclick="myFunctionPage26z()">Wolverhampton</button>
            </div>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" name="page11-checkbox8" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" name="page11-checkbox9" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" name="page11-checkbox10" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" name="page11-checkbox11" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page12">
        <button class="page-buttonx" onclick="myFunctionPagesX12()">X</button>
            <div class="page-blocks">
            <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                </form>
            </div>
            <h3>*All cards are worth 100$*</h3>
        </div>
        <div id="page13">
        <button class="page-buttonx" onclick="myFunctionPagesX13()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page14">
        <button class="page-buttonx" onclick="myFunctionPagesX14()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page15">
        <button class="page-buttonx" onclick="myFunctionPagesX15()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page15-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page16">
        <button class="page-buttonx" onclick="myFunctionPagesX16()">X</button>
            <div class="page-blocks">

            </div>
        </div>
    </div>
    <div id="page2">
        <button id="page2-exit" onclick="myFunctionPage2Exit()">X</button>
        <div id="page2-buttons">
            <button class="page2-button" id="page2-button1" onclick="myFunctionPage21()">Concoles</button>
            <button class="page2-button" id="page2-button2" onclick="myFunctionPage22()">Games</button>
            <button class="page2-button" id="page2-button3" onclick="myFunctionPage23()">Controllers</button>
            <button class="page2-button" id="page2-button4" onclick="myFunctionPage24()">Labo</button>
            <button class="page2-button" id="page2-button5" onclick="myFunctionPage25()">Accesoires</button>
        </div>
        <div id="page21">
            <button class="page-buttonx" onclick="myFunctionPagesX21()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" name="page11-checkbox1" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" name="page11-checkbox2" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" name="page11-checkbox3" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" name="page11-checkbox4" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" name="page11-checkbox5" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" name="page11-checkbox6" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" name="page11-checkbox7" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" name="page11-checkbox8" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" name="page11-checkbox9" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" name="page11-checkbox10" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" name="page11-checkbox11" value=""><br><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page22">
        <button class="page-buttonx" onclick="myFunctionPagesX22()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page23">
        <button class="page-buttonx" onclick="myFunctionPagesX23()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page24">
        <button class="page-buttonx" onclick="myFunctionPagesX24()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page25">
        <button class="page-buttonx" onclick="myFunctionPagesX25()">X</button>
            <div class="page-blocks">

            </div>
        </div>
    </div>
    <div id="page3">
        <button id="page3-exit" onclick="myFunctionPage3Exit()">X</button>
        <div id="page3-buttons">
            <button class="page3-button" id="page3-button1" onclick="myFunctionPage31()">Concoles</button>
            <button class="page3-button" id="page3-button2" onclick="myFunctionPage32()">Games</button>
            <button class="page3-button" id="page3-button3" onclick="myFunctionPage33()">Controllers</button>
            <button class="page3-button" id="page3-button4" onclick="myFunctionPage34()">Batteries</button>
            <button class="page3-button" id="page3-button5" onclick="myFunctionPage35()">Accesoires</button>
        </div>
        <div id="page31">
            <button class="page-buttonx" onclick="myFunctionPagesX31()">X</button>
            <div class="page-blocks">
                dnsjidhiuaeiudsaidhw
            </div>
        </div>
        <div id="page32">
        <button class="page-buttonx" onclick="myFunctionPagesX32()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page33">
        <button class="page-buttonx" onclick="myFunctionPagesX33()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page34">
        <button class="page-buttonx" onclick="myFunctionPagesX34()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page35">
        <button class="page-buttonx" onclick="myFunctionPagesX35()">X</button>
            <div class="page-blocks">

            </div>
        </div>
    </div>
    <div id="page4">
        <button id="page4-exit" onclick="myFunctionPage4Exit()">X</button>
        <div id="page4-buttons">
            <button class="page4-button" id="page4-button1" onclick="myFunctionPage41()">Concoles</button>
            <button class="page4-button" id="page4-button2" onclick="myFunctionPage42()">Games</button>
            <button class="page4-button" id="page4-button3" onclick="myFunctionPage43()">Controllers</button>
            <button class="page4-button" id="page4-button4" onclick="myFunctionPage44()">Bundels</button>
            <button class="page4-button" id="page4-button5" onclick="myFunctionPage45()">Accesoires</button>
        </div>
        <div id="page41">
            <button class="page-buttonx" onclick="myFunctionPagesX41()">X</button>
            <div class="page-blocks">
                dnsjidhiuaeiudsaidhw
            </div>
        </div>
        <div id="page42">
        <button class="page-buttonx" onclick="myFunctionPagesX42()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page43">
        <button class="page-buttonx" onclick="myFunctionPagesX43()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page44">
        <button class="page-buttonx" onclick="myFunctionPagesX44()">X</button>
            <div class="page-blocks">

            </div>
        </div>
        <div id="page45">
        <button class="page-buttonx" onclick="myFunctionPagesX45()">X</button>
            <div class="page-blocks">

            </div>
        </div>
    </div>
    <main id="main">
        <div id="buttons">
            <a href="../TEST.php" traget="blanc"><button class="buttons" id="button-nav1">PC<img class="main-img" src="Foto/Computer-Desktop-PC-PNG-Background-Clip-Art.png"></button></a>
            <button class="buttons" id="button-main2">N<img class="main-img" src="Foto/Nintendo-Logo-Transparent-PNG.png"></button>
            <button class="buttons" id="button-main3">Xbox<img class="main-img" src="Foto/1200px-Xbox_one_logo.svg.png"></button>
            <button class="buttons" id="button-main4">PS<img class="main-img" src="Foto/navy-playstation-png-logo-5.png"></button>
            <button class="buttons" id="button-main5">Others<img class="main-img" src="Foto/2560px-Stadia_logo.svg.png"></button>
        </div>
    </main>
    <footer>
        <a id="logout" onclick="myFunctionAlert()" href="Login.php">Logout</a>
    </footer>
<body>



