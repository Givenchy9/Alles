<?php
//Session_start();

if(empty($_SESSION)){
    if(isset($_POST['submit'])){
        if($_POST['acc'] == 'wachtwoord' && $_POST['ww'] == 'wachtwoord')
            {
                $_SESSION['ingelogd'] = "ja";
                header(header: 'Location: ../GG/HOME/HomeZ.php');
            }
        } 
    } 
?>
<style>
    #body{
        background-color: wheat;
        /* background-image: url("Foto/beautiful-orange-color-gradient-background-free-vector.jpg"); */
        background-repeat: no-repeat;
        background-size: cover;
    }
    #main{   
        margin-top: 9000px;
        margin: auto;
        padding-left: 10px;
        background-color: white;
        width: 180px;
        height: 240px;
        border: solid lightblue 5px;
        opacity: 0%;
        transition: 3s;
    }
    #acc{
        border: solid lightblue 3px;
        border-radius: 10px;
    }
    #ww{
        border: solid lightblue 3px;
        border-radius: 10px;
    }
    #submit{
        border-radius: 20px;
        background-color: lightblue;
        width: 170px;
    }
    label{
        color: black;
    }
    img{
        width: 100%;
        height: 100%;
    }
    button{
        margin-left: 45%;
        margin-top: 100px;
        background-color: lightblue;
        width: 150px;   
        opacity: 100%;
        height: 100px;
    }
    #lock{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    img{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    .front-img{
        position: absolute;
    }
    .front-img:hover{
        position: absolute;
        opacity: 0%;
    }
    .back-img{
        position: absolute;
    }
    #lock .back:hover{
        opacity: 0%;
    }
















    #container{
        visibility: hidden;
        border: solid wheat 5px;
        width: 200px;
        height: 250px;
        background-color: white;
        transition: 3s;
        margin-top: -250px;
        margin-left: 270px;
    }
    #inputs{
        width: 50%;
        padding-top: 10px;
        padding-left: 10px;
    }
    #input1{
        border: solid wheat 3px;
        border-radius: 20px;
        margin-bottom: 10px;
        width: 170px;
    }
    #input2{
        border: solid wheat 3px;
        border-radius: 20px;
        width: 170px;
    }
    #input3{
        border: solid wheat 3px;
        border-radius: 20px;
        width: 170px;
    }
    #button1{
        margin-top: 10px;
        background color: wheat;
        width: 100px;
        height: 20px;
        background-color: wheat;
        border-radius: 20px;
    }
    #lock{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    img{
        height: 50px;
        width: 50px;
        margin: auto;
    }
    #signin{
        border: solid black 3px;
        background-color: wheat;
        margin-right: 10px;
        margin-bottom: 10px;
        margin-top: 10px;
        border-radius: 20px;
    }
    #sign{
        background-color: wheat;
        margin-top: 10px;
        width: 100%;
        border: solid black 2px;
        text-decoration: none;
        text-align: center;
        padding-left: 30px;
        padding-right: 30px;
    }
</style>
<script>
    function myFunction(){
        document.getElementById("main").style.marginTop = "200px";
        document.getElementById("main").style.opacity = "100%";
        document.getElementById("button").style.opacity = "0%";
    }
    function myFunction1(){
        // document.getElementById("body").style.backgroundColor = "lightblue";
        // document.getElementById("main").style.opacity = "0%";
        // document.getElementById("container").style.visibility = "inherit";
    }
</script>
<body id="body">
    <main id="main">
    <div id="lock">
        <img class="front-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102439.png">
        <img class="back-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102433.png">
    </div>
        <form id="form1" action="" method="post">
            <label>account</label><br>
            <input id="acc" name="acc" type="text" placeholder="account"><br><br>   
            <label>wachtwoord</label>
            <input id="ww" name="ww" type="password" placeholder="wachtwoord"><br><br>  
            <input id="submit" type="submit" name="submit" value="login">
            <div id="signin">
                <label>Sign In:</label>
                <a href="Signin.php" id="sign"><label id="sign1">here</label></a>
            </div>
        </form>
    </main>



    <div id="container">
        <form id="form2" action="" method="post">
        <div id="lock">
            <img class="front-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102439.png">
            <img class="back-img" src="../GG/HOME/Extra/Foto/Home/Schermafbeelding 2023-03-28 102433.png">
        </div>
            <div id="inputs">
                <label>Username<br><input id="input1" type="text" placeholder="User Name"></label>
                <label>Wachtwoord<input id="input2" type="password"></label>
                <label>Leeftijd<br><input id="input3" type="number"></label>
                <button id="button1">Verzenden</button>
            </div>
        </form>
    </div>
    <button id="button" onclick="myFunction()">Login</button>
<body>


