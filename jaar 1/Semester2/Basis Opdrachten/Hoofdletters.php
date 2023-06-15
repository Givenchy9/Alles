<!DOCTYPE html>
<html>
    <head>
        <style>
            #container{
                background-color: black;
                width: 330px;
                margin: auto;
            }
           #intro{
                border: solid grey 5px;
                width: 300px;
                padding: 10px;
            }
            #rood{
                color: red;
                border-top: solid white 1px;
            }
            #blauw{
                color: blue;
                border-top: solid white 1px;
            }
            #groen{
                color: green;
                border-top: solid white 1px;
            }
            #paars{
                color: purple;
                border-top: solid white 1px;
            }
            #orange{
                color: orange;
                border-top: solid white 1px;
            }
            #salmon{
                color: salmon;
                border-top: solid white 1px;
            }
           #output1{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #output2{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #output3{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #output4{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #output5{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #outputy{
            border: solid white 2px;
            width: 200px;
            color: white;
           }
           #div1{
            margin-top: 10px;
            border: solid red 5px;
            width: 300px;
            padding: 10px;
           }
           #div2{
            margin-top: 10px;
            border: solid blue 5px;
            width: 300px;
            padding: 10px;
           }
           #div3{
            border: solid green 5px;
            width: 300px;
            padding: 10px;
            margin-top: 10px;
           }
           #output3::first-letter {
            text-transform:capitalize;
           }
           #div4{
            margin-top: 10px;
            border: solid purple 5px;
            width: 300px;
            padding: 10px;
           }
            #div5{
            margin-top: 10px;
            border: solid orange 5px;
            width: 300px;
            padding: 10px;
           }
           #divy{
            margin-top: 10px;
            border: solid teal 5px;
            width: 300px;
            padding: 10px;
           }
           #divz{
            margin-top: 10px;
            border: solid salmon 5px;
            width: 300px;
            padding: 10px;
           }
           #button{
            width: 300px;
            background-color: salmon;
           }
           #outputz{
            border: solid white 1px;
            color: white;
           }
        </style>
        <script>
            function myFunction1() {
                console.log("het werkt1")
                let a = document.getElementById("input1").value
                let result = a.toUpperCase();     
                document.getElementById("output1").innerHTML = result; 
            }
            function myFunction2() {
                console.log("het werkt2")
                let b = document.getElementById("input2").value
                let result = b.toLowerCase();     
                document.getElementById("output2").innerHTML = result; 
            }
            function myFunction3() {
                console.log("het werkt3")
                let c = document.getElementById("input3").value
                let result = c.charAt(0).toUpperCase() + c.slice(1);
                document.getElementById("output3").innerHTML = result;
            }
            function myFunction4() {
                // console.log("het werkt4")
                // let c = document.getElementById("input4").value
                // let result = c.charAt(0).toUpperCase() + c.slice(1).charAt(0).toUpperCase();
                // document.getElementById("output4").innerHTML = result;
                console.log("het werkt4")
                let c = document.getElementById("input4").value
                //let result = c.toUpperCase();
                //let result= c.charAt(0).toUpperCase() + c.slice(1);
                // split
                let result = "";
                var words = c.split(" ");
                for (var i = 0; i < words.length; i++) {
                    result += words[i].charAt(0).toUpperCase() + words[i].slice(1);
                    result += " ";
                }
                document.getElementById("output4").innerHTML = result;
            }
            function myFunction5() {
                console.log("het werkt5")
                let e = document.getElementById("input5").value
                let result = e;
                document.getElementById("output5").innerHTML = result;
            }
            // function myFunctiony() {
            //     console.log("het werktz")
                // document.getElementById("option1").innerHTML = myFunction1();
                // document.getElementById("option2").innerHTML = myFunction2();
                // document.getElementById("option3").innerHTML = myFunction3();
                // document.getElementById("option4").innerHTML = myFunction4();
                // document.getElementById("option5").innerHTML = myFunction5();



                // function mySelectFunction() {
                //     let y = document.basic;
                //     let choice = y.select.value;
                //     if (choice === ) {
                //         document.getElementById("output").innerHTML = choice;
                //     }
                // }
            function myFunctionz() {
                console.log("het werktz")
                document.getElementById("button").innerHTML = myFunction1(),myFunction2(),myFunction3(),myFunction4(),myFunction5();
            }
        </script>
    </head>
    <body>
        <div id="container">
        <div id="intro">
            <p id="rood">red: Alles Hoofdletter</p>
            <p id="blauw">blue: Alles kleine letters</p>
            <p id="groen">green: Eerste letter Hoofdletter</p>
            <p id="paars">purple: Alle worden</p>
            <p id="orange">orange: Geen Function/Standaart function</p>
            <p id="salmon">Knop: Om alles tergelijk in de inputs te krijgen</p>
        </div>
        <div id="div1">
            <input id="input1" type="text">
            <button onclick="myFunction1()">text1</button>
            <p id="output1"></p>
        </div>

        <div id="div2">
            <input id="input2" type="text">
            <button onclick="myFunction2()">text2</button>
            <p id="output2"></p>
        </div>

        <div id="div3">
            <input id="input3" type="text">
            <button onclick="myFunction3()">text3</button>
            <p id="output3"></p>
        </div>

        <div id="div4">
            <input id="input4" type="text">
            <button onclick="myFunction4()">text4</button>
            <p id="output4"></p>
        </div>

        <div id="div5">
            <input id="input5" type="text">
            <button onclick="myFunction5()">text5</button>
        <p id="output5"></p>
        </div>

        <div id="divy">
            <input id="inputy" type="text">
            <select id="select" name="select">
                <option value="myFunction1" id="option1" onclick="myFunction1()">Red</option>
                <option value="myFunction2" id="option2" onclick="myFunction2()">Blue</option>
                <option value="myFunction3" id="option3" onclick="myFunction3()">Green</option>
                <option value="myFunction4" id="option4" onclick="myFunction4()">Purple</option>
                <option value="myFunction5" id="option5" onclick="myFunction5()">Orange</option>
            </select>
            <button onclick="myFunctiony()">texty</button>
        <p id="outputy"></p>
        </div>

        <div id="divz">
            <button id="button" onclick="myFunctionz()">textz</button>
        </div>
        </div>



        
        <?php
            
        ?>
    </body>
</html>
