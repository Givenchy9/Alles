<?php

?>
<style>
    body{
        background-color: black;
    }
    #container{
        background-color: wheat;
        margin: auto;
        color: white;
        width: 200px;
        border: solid white 5px;
        border-radius: 20px;
        padding: 10px;
        margin-top: 200px;
        color: black;
    }
    #title{
        font-size: 20px;
        font-family: comic;
        padding-left: 30px;
    }
    .inputs{
        border: solid black 2px;
        border-radius: 20px;
    }
    #submit{
        background-color: black;
        color: white;
        border: solid white 3px;
        border-radius: 20px;
        margin-top: 20px;
    }
    #aa{
        border: solid white 3px;
        border-radius: 20px;
        padding: 2px;
        background-color: black;
        text-decoration: none;
        color: white;
    }
    #demox{
        color: red;
    }
</style>
<script>
    function myFunction1() {
    var voornaam = document.getElementById("voornaam");
    if (voornaam.value.length > 20) {
        voornaam.style.backgroundColor = "red";
        document.getElementById("demox").innerHTML = "maximaal aantal letters = 20"
    } else {
        document.getElementById("demox").innerHTML = "";
        voornaam.style.backgroundColor = "green";
    }
    }
    function myFunction2(){
        if (achternaam.value.length > 20) {
        achternaam.style.backgroundColor = "red";
        document.getElementById("demox").innerHTML = "maximaal aantal letters = 20"
    } else {
        document.getElementById("demox").innerHTML = "";
        achternaam.style.backgroundColor = "green";
    }
    }
    function myFunction3(){
        if (wachtwoord.value.length > 20) {
        wachtwoord.style.backgroundColor = "red";
        document.getElementById("demox").innerHTML = "maximaal aantal letters = 20"
        } else {
            document.getElementById("demox").innerHTML = "";
            wachtwoord.style.backgroundColor = "green";
        }
    }
    function myFunctionA(){
        document.getElementById("message").style.display = "block";
    }
    function myFunctionA1(){
        document.getElementById("message").style.display = "none";
    }
</script>
<body>
    <form action="php/signup.php" method="post">
        <div id="container">
            <div>
                <i class="fa-solid fa-face-grin-beam-sweat"></i>
                <i class="fa-duotone fa-face-awesome fa-sm" style="--fa-primary-color: #82a7e3; --fa-secondary-color: #ffffff;"></i>
    	    </div>
            <p id="title">Create Account</p>
            <p id="demox"></p>
                <?php if(isset($_GET['error'])){?>
            <div role="alert">
                <?php echo $_GET['error'];?>
            </div>
            <?php } ?>

            <?php if(isset($_GET['success'])){?>
            <div role="alert">
                <?php echo $_GET['success'];?>
            </div>
            <?php } ?>
            <label>Voornaam (Login naam):<br><input onkeyup="myFunction1()" id="voornaam" type="text" class="inputs" name="firstname" value="<?php echo (isset($_GET['firstname']))?$_GET['firstname']:""?>"></label><br>
            <label>Achternaam:<br><input onkeyup="myFunction2()" id="achternaam" type="text" class="inputs" name="lastname" value="<?php echo (isset($_GET['lastname']))?$_GET['lastname']:""?>"></label><br>
            <label>Wachtwoord:<br><input onkeyup="myFunction3()" onfocus="myFunctionA()" onblur="myFunctionA1()" id="wachtwoord" type="password" class="inputs" name="password"></label><br>
            <input value="verzenden" type="submit" id="submit">
            <a id="aa" href="Login/Login.php">Login</a>
        </div>
    </form>
</body>