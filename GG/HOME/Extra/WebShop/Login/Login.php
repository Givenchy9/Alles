<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/d781f1c539.js" crossorigin="anonymous"></script>
</head> 
<style>
    body{
        background-color: wheat;
    }
    #container{
        margin-top: 300px;
        background-color: black;
        margin: auto;
        width: 170px;
        border: solid white 5px;
    }
    #title{
        font-size: 30px;
        color: white;
        padding-left: 40px;
        color: wheat;
    }
    label{
        color: white;
    }
    .inputs{
        border-radius: 20px;
        border: solid wheat 2px;
    }
    #submit{
        margin-top: 10px;
        width: 170px;
        background-color: wheat;
    }
    #register{
        width: 170px;
        background-color: wheat;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <div id="container">
        <form action="process.php" method="POST">
        <i class="fa-regular fa-face-laugh-beam" style="color: #ffffff;"></i>
        <i class="fa-duotone fa-face-awesome fa-sm" style="--fa-primary-color: #82a7e3; --fa-secondary-color: #ffffff;"></i>
            <p id="title">LOGIN</p>
            <label>Voornaam<br><input class="inputs" type="text" id="fname" name="fname"></label><br>
            <label>Wachtwoord<br><input class="inputs" type="password" id="pass" name="pass"></label><br>
            <input id="submit" type="submit" value="Login">
            <button id="register" type="button"><a href="../Index.php">Register</a></button>
        </form>
    </div>
</body>
</html> 