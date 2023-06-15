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
            <button class="nav-divs" id="nav-div1" onclick="myFunctionPage1()">PC</button>
            <button class="nav-divs" id="nav-div2" onclick="myFunctionPage2()">Nintendo</button>
            <button class="nav-divs" id="nav-div3" onclick="myFunctionPage3()">Xbox</button>
            <button class="nav-divs" id="nav-div4" onclick="myFunctionPage4()">PS</button>
        <div>
    </nav>
    <div id="page1">
        <button id="page1-exit" onclick="myFunctionPage1Exit()">X</button>
        <div id="page1-buttons">
            <button class="page1-button" id="page1-button1" onclick="myFunctionPage11()">PC's</button>
            <button class="page1-button" id="page1-button2" onclick="myFunctionPage12()">Games</button>
            <button class="page1-button" id="page1-button3" onclick="myFunctionPage13()">Keyboards</button>
            <button class="page1-button" id="page1-button4" onclick="myFunctionPage14()">mouse</button>
            <button class="page1-button" id="page1-button5" onclick="myFunctionPage15()">Headset</button>
            <button class="page1-button" id="page1-button6" onclick="myFunctionPage16()">Others</button>
        </div>
        <div id="page11">
            <button class="page-buttonx" onclick="myFunctionPagesX11()">X</button>
            <button onclick="myFunctionShowCart()">show cartX</button>
            
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox"   class="cb_sc" id="page11-checkbox1" onclick="myFunctionShowCart()" value="700">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show <br><p><strong>(700$)</strong>      HP Laptop1      </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic1a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox"   class="cb_sc" id="page11-checkbox2" value="1200">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(1200$)</strong>  Macbook         </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic2a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox"   class="cb_sc" id="page11-checkbox3" value="300">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(950$)</strong>    HP Victus       </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic3a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox"   class="cb_sc" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(800$)</strong>       Asus Laptop     </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic4a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox"   class="cb_sc" id="page11-checkbox5" value="100">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(200$)</strong>    Legend Notebook     </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic5a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox"   class="cb_sc" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(1300$)</strong>      MSI Laptop      </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic6a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox"   class="cb_sc" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(1200$)</strong>      Asus ROG        </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic7a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox"   class="cb_sc" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(1200$)</strong>      Asus TUF        </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic8a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox"   class="cb_sc" id="page11-checkbox9" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(600$)</strong>       HP Laptop2      </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic9a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox"  class="cb_sc" id="page11-checkbox10" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(400$)</strong>      Asus Vivobook   </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic10a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox"  class="cb_sc" id="page11-checkbox11" value="234">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(1200$)</strong>  Razer Laptop    </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic11a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic11-.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox"  class="cb_sc" id="page11-checkbox12" value="777">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(700$)</strong>   HP Laptop       </p><img class="page-pics" id="page11-pics11" src="Foto/Page/page11-pic12a.jpg"><img class="page-pics" id="page11-pics1" src="Foto/Page/page11-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page12">
        <button class="page-buttonx" onclick="myFunctionPagesX12()">X</button>
            <div class="page-blocks">
            <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page12-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page12-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page12-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/page12-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page12-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page12-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page12-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page12-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page12-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><img class="page-pics" id="page11-pics11" src="Foto/Page/pc11.jpg"></div>
                </form>
            </div>
            <h3>*All cards are worth 100$*</h3>
        </div>
        <div id="page13">
        <button class="page-buttonx" onclick="myFunctionPagesX13()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page13-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(100$)</strong><br>keyboard1</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page13-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(35$)</strong><br>keyboard2</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page13-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong><br>keyboard3</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page13-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong><br>keyboard4</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page13-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong><br>keyboard5</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page13-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong><br>keyboard6</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page13-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong><br>keyboard7</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page13-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong><br>keyboard8</p><img class="page-pics13" id="page11-pics11" src="Foto/Page/page13-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page14">
        <button class="page-buttonx" onclick="myFunctionPagesX14()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(30$)</strong>Tust Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(15$)</strong>Esperana Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(70$)</strong>Razer Orochi Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(60$)</strong>Razer Naga Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(40$)</strong>Razer DeathAdder Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(140$)</strong>Razer Viper V2 Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(10$)</strong>Standaard Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<p><strong>(100$)</strong>Apple Mouse<br></p><img class="page-pics14" id="page11-pics11" src="Foto/Page/page14-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page15">
        <button class="page-buttonx" onclick="myFunctionPagesX15()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong>SteelSeries<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>PS Headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(150$)</strong>HyperX 1<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(170$)</strong>HyperX 2<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong>Trust Headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>Trust PS headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong>Turtle Beach recon<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(27$)</strong>Shark Headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>Razer Headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong>HyperX 3<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(25$)</strong>Blue Led Headset<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(50$)</strong>Crossair<br></p><img class="page-pics15" id="page11-pics11" src="Foto/Page/page15-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page16">
        <button class="page-buttonx" onclick="myFunctionPagesX16()">X</button>
            <div class="page-blocks">
                <h2>Comming Soon</h2>
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
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(180$)</strong> NES</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(160$)</strong> Super NES</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(110$)</strong> Nintendo 64</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(230$)</strong> Game Cube</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong> Wii</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Wii U</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(350$)</strong> Switch (mario kart)</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(280$)</strong> Switch</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox9" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(210$)</strong> Switch Lite</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox10" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(350$)</strong> Switch Oled</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox11" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong> Nintendo DS</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox12" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(90$)</strong> Nintendo 2DS</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic12.jpg"></div>
                    <div class="page-pic" id="page11-pic13"><input type="checkbox" class="checkbox" id="page11-checkbox13" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(100$)</strong> Nintendo 3DS</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic12.jpg"></div>
                    <div class="page-pic" id="page11-pic14"><input type="checkbox" class="checkbox" id="page11-checkbox14" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(120$)</strong> Nintendo 2DS XL</p><img class="page-pics" id="page11-pics11" src="Foto/Page/page21-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page22">
        <button class="page-buttonx" onclick="myFunctionPagesX22()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(50$)</strong> Mario Bros deluxe</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong> Splatoon3</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Mario Kart 8 Deluxe</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic3.webp"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong> kirby</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic4.webp"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong> Lego City Undercover</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Go Vacation</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic6.webp"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Animal Crossing</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic7.webp"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Pokemon Diamond</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic8.webp"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox9" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong> Minecraft</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic9.webp"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox10" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Mario Party9</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox11" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Inazuma Eleven Strikers</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox12" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Inazuma Eleven Strikers</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic12.jpg"></div>
                    <div class="page-pic" id="page11-pic13"><input type="checkbox" class="checkbox" id="page11-checkbox13" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong> Inazuma Elven Victory Road</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic13.jpg"></div>
                    <div class="page-pic" id="page11-pic14"><input type="checkbox" class="checkbox" id="page11-checkbox14" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong> Wii Sports</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page22-pic14.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page23">
        <button class="page-buttonx" onclick="myFunctionPagesX23()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(50$)</strong>Mario Pro Controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>Pro Controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong> Afterglow Pro Controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(35$)</strong>Wii controller/nunchuck</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Wii controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>Wii controller 2x</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(15$)</strong>Wii classic controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Wii pro controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox9" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(10$)</strong>Fake switch controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox10" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Switch Nes controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox11" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Switch N64 controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox12" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(25$)</strong>Switch N64 2 controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page23-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page24">
        <button class="page-buttonx" onclick="myFunctionPagesX24()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>Nintendo Labo robot</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(105$)</strong>Labo variety kit</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong>Nintendo Switch car kit</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Labo Comstomisation</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>Nintendo Labo camera kit</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(50$)</strong>Nintendo Switch Case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(10$)</strong>Nintendo Labo Box</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(15$)</strong>Labo Acarde Kit</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page24-pic8.webp"></div>
                </form>
            </div>
        </div>
        <div id="page25">
        <button class="page-buttonx" onclick="myFunctionPagesX25()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(10$)</strong>Nintendo Steering Wheel</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(15$)</strong>Nintendo Switch Case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(5$)</strong>Switch contoller Standaard</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(10$)</strong>Switch Load Station</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Joy-Con Tennis case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(10$)</strong>Joy-Con controller case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong>Nintendo Switch Ears</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong>TB Recon 70 Headset</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page25-pic8.jpg"></div>
                </form>
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
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(40$)</strong>Xbox 360</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong>Xbox one</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(200$)</strong>Xbox one x</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic3.webp"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(140$)</strong>Xbox one s</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(300$)</strong>Xbox series s</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(500$)</strong>Xbox series x</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(350$)</strong>Xbox series s (Epic Games)</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(370$)</strong>Xbox series s bundle</p></p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page31-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page32">
        <button class="page-buttonx" onclick="myFunctionPagesX32()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(80$)</strong>forza horizon 5</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(50$)</strong>Nicelodeon kart racer</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong>Minecraft</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>ARK</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(30$)</strong>Lego Jurrassic World</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>Madden</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>Halo 5</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong>Flight Simulator</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page32-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page33">
        <button class="page-buttonx" onclick="myFunctionPagesX33()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller white</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller Black</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller Blue</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(120$)</strong>xbox Elite Controller 2</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller pink</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller green</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(120$)</strong>xbox Elite Controller 2 B</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>xbox Controller Minecraft Edition</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page33-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page34">
        <button class="page-buttonx" onclick="myFunctionPagesX34()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 1</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 2</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 3</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 4</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 5</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 6</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 7</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Batteries 8</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page34-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page35">
        <button class="page-buttonx" onclick="myFunctionPagesX35()">X</button>
            <div class="page-blocks">
            <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(60$)</strong>Xbox elite controller case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Xbox Usb</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(70$)</strong>GameSir X2 Pro-Xbox</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(110$)</strong>BACKBONE One (phone)</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(20$)</strong>Razer Kishi</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(25$)</strong>Xbox caherger kit</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(25$)</strong>Xbox Chat Headet</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show id<br><p><strong>(120$)</strong>Xbox SD box</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page35-pic8.jpg"></div>
                </form>
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
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(40$)</strong>Playstation 1</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(60$)</strong>Playstation 2</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(70$)</strong>Playstation 2 Slim</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(100$)</strong>Playstation Portable</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(90$)</strong>Playstation 3 Slim</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>Playstation 3</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(150$)</strong>Playstation Vita</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(160$)</strong>Playstation 4</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(200$)</strong>Playstation 4 Slim</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(250$)</strong>Playstation 4 pro</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(550$)</strong>Playstation 5</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(450$)</strong>Playstation 5 Digital</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page41-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page42">
        <button class="page-buttonx" onclick="myFunctionPagesX42()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>Fifa 23</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(65$)</strong>F1 23</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>Gran turismo 7</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(50$)</strong>Horizon forbidden</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(50$)</strong>Ratchet & Clack</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(60$)</strong>Spiderman: MM</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(40$)</strong>Sackboy</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(30$)</strong>Jurassic World evolution</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(40$)</strong>Riders republic</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(50$)</strong>Snowrunner</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(40$)</strong>GTA</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(?$)</strong>Inazuma Eleven Victory</p><img class="page-pics22" id="page11-pics11" src="Foto/Page/page42-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page43">
        <button class="page-buttonx" onclick="myFunctionPagesX43()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(75$)</strong>ps5 controller white</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>ps5 controller pink</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(75$)</strong>ps5 controller black</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>ps5 controller purple</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>ps5 controller red</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>ps5 controller lightblue</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(200$)</strong>ps5 Edge controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(60$)</strong>ps4 controller black</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic8.jpg"></div>
                    <div class="page-pic" id="page11-pic9"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(65$)</strong>ps4 controller camo</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic9.jpg"></div>
                    <div class="page-pic" id="page11-pic10"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(60$)</strong>ps4 controller white</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic10.jpg"></div>
                    <div class="page-pic" id="page11-pic11"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(40$)</strong>ps4 Nacon controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic11.jpg"></div>
                    <div class="page-pic" id="page11-pic12"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(175$)</strong>ps4 controller pink</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page43-pic12.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page44">
        <button class="page-buttonx" onclick="myFunctionPagesX44()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(600$)</strong>ps5 bundle God of war</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(570$)</strong>ps5 bundle Horizon</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(625$)</strong>Fifa 23</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(580$)</strong>ps5 + extra controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(590$)</strong>ps5 bundle Call of Duty</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic5.jpg"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(600$)</strong>ps5 ratchet & clank</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(650$)</strong>ps5 digital gran turismo 7</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(580$)</strong>ps5 digital Horizon</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page44-pic8.jpg"></div>
                </form>
            </div>
        </div>
        <div id="page45">
        <button class="page-buttonx" onclick="myFunctionPagesX45()">X</button>
            <div class="page-blocks">
                <form action="">
                    <div class="page-pic" id="page11-pic1"><input type="checkbox" class="checkbox" id="page11-checkbox1" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(100$)</strong>ps5 headset</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic1.jpg"></div>
                    <div class="page-pic" id="page11-pic2"><input type="checkbox" class="checkbox" id="page11-checkbox2" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(100$)</strong>ps5 headset</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic2.jpg"></div>
                    <div class="page-pic" id="page11-pic3"><input type="checkbox" class="checkbox" id="page11-checkbox3" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(60$)</strong>ps5 camera</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic3.jpg"></div>
                    <div class="page-pic" id="page11-pic4"><input type="checkbox" class="checkbox" id="page11-checkbox4" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(7$)</strong>ps4 controller case</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic4.jpg"></div>
                    <div class="page-pic" id="page11-pic5"><input type="checkbox" class="checkbox" id="page11-checkbox5" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(30$)</strong>ps5 remote</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic5.webp"></div>
                    <div class="page-pic" id="page11-pic6"><input type="checkbox" class="checkbox" id="page11-checkbox6" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(30$)</strong>ps5 load station</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic6.jpg"></div>
                    <div class="page-pic" id="page11-pic7"><input type="checkbox" class="checkbox" id="page11-checkbox7" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(80$)</strong>ps4 move controller</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic7.jpg"></div>
                    <div class="page-pic" id="page11-pic8"><input type="checkbox" class="checkbox" id="page11-checkbox8" value="">Show price<input type="checkbox" class="checkbox" id="page11-checkbox1" value="Hp">Show name<br><p><strong>(180$)</strong>PS VR</p><img class="page-pics23" id="page11-pics11" src="Foto/Page/page45-pic8.jpg"></div>
                </form>
            </div>
        </div>
    </div>
    <main id="main">
        <div id="buttons">
            <a href="https://www.microsoft.com/nl-nl/store/b/sale?ef_id=_k_CjwKCAjw9pGjBhB-EiwAa5jl3NV3_QpmoadLZmOLfAuunV81GWvmwnHYGYOEfBIX44V6xKhzHT5WUBoC0gAQAvD_BwE_k_&OCID=AIDcmmgj973arw_SEM__k_CjwKCAjw9pGjBhB-EiwAa5jl3NV3_QpmoadLZmOLfAuunV81GWvmwnHYGYOEfBIX44V6xKhzHT5WUBoC0gAQAvD_BwE_k_&gclid=CjwKCAjw9pGjBhB-EiwAa5jl3NV3_QpmoadLZmOLfAuunV81GWvmwnHYGYOEfBIX44V6xKhzHT5WUBoC0gAQAvD_BwE" traget="blanc"><button class="buttons" id="button-nav1">PC<img class="main-img" src="Foto/Computer-Desktop-PC-PNG-Background-Clip-Art.png"></button></a>
            <a href="https://www.nintendo.nl/" traget="blanc"><button class="buttons" id="button-main2">N<img class="main-img" src="Foto/Nintendo-Logo-Transparent-PNG.png"></button></a>
            <a href="https://www.xbox.com/nl-NL/accessories/hard-drives/seagate-expansion-card" traget="blanc"><button class="buttons" id="button-main3">Xbox<img class="main-img" src="Foto/1200px-Xbox_one_logo.svg.png"></button></a>
            <a href="https://www.playstation.com/nl-nl/?emcid=pa-co-422294&gad=1&gclid=CjwKCAjw9pGjBhB-EiwAa5jl3Hc_KuL2--rGzlxjYn2zX5JYaiYJKjDDDzJFgSTRR-narHROK2A7uRoCSlsQAvD_BwE&gclsrc=aw.ds" traget="blanc"><button class="buttons" id="button-main4">PS<img class="main-img" src="Foto/navy-playstation-png-logo-5.png"></button></a>
            <a href="https://stadia.google.com/gg/" traget="blanc"><button class="buttons" id="button-main5">Others<img class="main-img" src="Foto/2560px-Stadia_logo.svg.png"></button></a>
        </div>
    </main>
    <footer id="footer">
        <a id="logout" onclick="myFunctionAlert()" href="Login.php">Logout</a>
        <div id="cart" onclick="myFunctionShowCart()">...<div>
    </footer>
<body>