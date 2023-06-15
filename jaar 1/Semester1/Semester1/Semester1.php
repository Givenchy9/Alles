
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        #body {
            margin:0;
            background-color: #faf9f6;
            /* background-image: url("IMG/abstract-marble.jpg"); */
        }
        #container{
          margin-left: 10%;
          width: 80%;
        }
        #header{
          background-color: black;
          color: white;
          height: 15vh;
          font-size: 300%;
          text-align: center;
        }
        /* .header1{
          background-color: white;
          color: black;
          height: 15vh;
          font-size: 300%;
          text-align: center;
        } */
        #nav{
          background-color: red;
          height: 5vh;
        }
        main {
            display:flex;
            height:70vh;
        }
        section {
            flex:3;
            background-color: white;
            opacity: 50%;
            font-size: 300%;
            text-align: center;
            background-color: white;
        }
        aside {
            background-color: aqua;
            overflow: hidden;
            transition: 1s;
            opacity: 50%;
            background-color: crimson;
        }
        #ctrlBar {
            background-color: red;
            color:white;
            padding: 5px;
        }
        .open{
            flex:2;
        }
        .close{
            flex:0;
        }
        footer{
          background-color: black;
          height: 10vh;
          font-size: 200%;
          color: red;
          text-align: right;
        }
        h1{
          margin: 0;
        }
        #modusbutton {
          background-color: salmon;
          border: none;
          color: white;
          padding: 5px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        #modusbutton1 {
          background-color: lightblue;
          border: none;
          color: white;
          padding: 5px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        #dialogknop {
          background-color: black;
          border: none;
          color: white;
          padding: 5px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
        #overlay{
          position: fixed;
          display: none;
          height: 100%;
          width: 100%;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: grey;
          z-index: 1;
        }
        .overlay1{
          position: fixed;
          display: block;
          height: 100%;
          width: 100%;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: grey;
          z-index: 1;
        }
        #dialog{
          position: absolute;
          margin-top: -400px;
          height: 200px;
          width: 150px;
        }
        #dialog1{
          height: 400px;
          width: 150px;
        }
        #hd{
          height: 15%;
          background-color: red;
          border-top-left-radius : 25px;
          border-top-right-radius : 25px;
        }
        #ct{
          height: 70%;
          background-color: white;
        }
        #ft{
          height: 15%;
          background-color: red;
          border-bottom-left-radius : 25px;
          border-bottom-right-radius : 25px;
        }
        #outputDiv{
          border: 1px solid red;
          border-radius: 3px;
          padding: 5px;
        }
        #outputDiv{
          border: 1px solid red;
          border-radius: 3px;
          padding: 5px;
        }
        #lt{
            width: 40px;
        }
        #jaartal{
            width: 40px;
        }
    </style>
    <script>
        function showHideAside() {
            //window.alert("hello world");
            if (document.getElementById("leftAside").className == "open") {
                document.getElementById("leftAside").className = "close";
                document.getElementById("ctrlBar").innerHTML = "&gt;";
            } else {
                document.getElementById("leftAside").className = "open";
                document.getElementById("ctrlBar").innerHTML = "&lt;";
            }
            if (document.getElementById("rightAside").className == "open") {
                document.getElementById("rightAside").className = "close";
            } else {
                document.getElementById("rightAside").className = "open";
            }
        }
        function myFunction(){
          alert("hello world");
        }
        function myFunction1(){
          console.log("hello");
        }
        function myFunction2(){
          document.getElementById("titel").innerHTLM = "Huis scherm";
        }
        function myFunction3() {
          document.getElementById("header").style.backgroundColor = "white";
          document.getElementById("header").style.color = "black";
          document.getElementById("nav").style.backgroundColor = "lightblue";
          document.getElementById("footer").style.backgroundColor = "white";
          document.getElementById("ctrlBar").style.backgroundColor = "lightblue";
          document.getElementById("modusbutton").style.backgroundColor = "blue";
          document.getElementById("body").style.backgroundColor = "black";
          document.getElementById("body").style.backgroundImage = "url(blackmarble.jpg)";
          document.getElementById("section").style.backgroundColor = "black";
        }
        function myFunction3a() {
          document.getElementById("header").style.backgroundColor = "black";
          document.getElementById("header").style.color = "white";
          document.getElementById("nav").style.backgroundColor = "red";
          document.getElementById("footer").style.backgroundColor = "black";
          document.getElementById("ctrlBar").style.backgroundColor = "red";
          document.getElementById("modusbutton1").style.backgroundColor = "salmon";
          document.getElementById("body").style.backgroundColor = "white";
          document.getElementById("body").style.backgroundImage = "url(blackmarble.jpg)";
          document.getElementById("section").style.backgroundColor = "white";
        }
        function myFunction4() {
        var voornaam = "Givenchy";
        var achternaam = "steppin";
        var leeftijd = "17";
        document.getElementById("Wie").innerHTML = "Hallo Mijn naam is " + naam + achternaam + " en ik ben " + leeftijd;
        }
        function myFunction5() {
          document.getElementById("dialog").className = "dialog1";
        }
        function myFunction6() {
          let vnaam = document.getElementById("vn").value
          let anaam = document.getElementById("vn").value
          let text = "Hallo ik ben "
          text = tekst + vnaam + ""
          text = tekst + anaam
          document.getElementById("outputDiv").innerHTML = text
        }
        function myFunction6() {
           // console.log("myFunction6 is gestart")
          let vnaam = document.getElementById("vn").value
          let anaam = document.getElementById("an").value
          let leeftijd = document.getElementById("lt").value
          let jaartal = document.getElementById("jaartal").value
        //   let text = "Hallo ik ben "
        //   text = text + vnaam + " "
        //   text = text + anaam
          let x = leeftijd
          let y = jaartal
          let z = x - y 
          document.getElementById("outputDiv").innerHTML = "hallo mijn naam is: " + vnaam + " " + anaam + " " + "en ik ben " + leeftijd + " jaar oud " + jaartal + " jaar geleden was ik: " + z + " jaar oud.";
        }
    </script>
</head> 

<body id="body">
  <div id="container">
  <header id="header">
    <h1 id="titel">Home screen</h1> 
  </header>
  <div id="nav">
  <button type="button" id="dialogknop" onclick="myFunction5()">Login</button>
  <button type="button" id="modusbutton" onclick="myFunction3()">Eye-Modus</button>
  <button type="button" id="modusbutton1" onclick="myFunction3a()">Eye-Modus+</button>
  </nav>
<main>
  <aside id="leftAside" class="open">

  
    <table>
        <tr>
            <td>voornaam:</td>
            <td><input type="text" id="vn"></td>
        </tr>
        <tr>
            <td>achternaam:</td>
            <td><input type="text" id="an"></td>
        </tr>
        <tr>
            <td>leeftijd:</td>
            <td><input type="text" id="lt"></td>
        </tr>
        <tr>
            <td>jaartal:</td>
            <td><input type="number" id="jaartal"></td>
        </tr>
    </table>
    <button type="button" onclick="myFunction6()">plaats text</button>

  </aside>
    <div id="ctrlBar" onclick="showHideAside()">
        &lt;
    </div>
    <section>
        <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">Klik hier om de tijd en Datum te zien.</button>
        <button type="button" onclick="myFunction()">Alert</button>
        <button type="button" onclick="myFunction1()">Console</button>
        <button type="button" onclick="myFunction2()">Verander Titel</button>
        <div id="overlay"></div>
        <div id="dialog" id="open">
          <div id="hd">desd</div>
          <div id="cn">dwasd</div>
          <div id="ft">dwa</div>
        </div>

        <p id="demo"></p>
        <p id="wie"></p>
    </section>
    <aside id="rightAside" class="open">
    output:<br>
    <div id="outputDiv">
        test
    </div>  
    <br>
    </aside>
</main>
<footer id="footer">footer</footer>
      </div>
</body>

</html>
</body>
</html>