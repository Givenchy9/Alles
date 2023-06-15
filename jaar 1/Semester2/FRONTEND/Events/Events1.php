<!DOCTYPE html>
<html>
    <head>
        <style>
            #output{
                border: solid red 2px;
                width: 100px;
                border-radius: 20px;
            }
            input{
                border: solid black 2px;
                width: 100px;
                border-radius: 20px;
            }
        </style>
        <script>
            function myFunction1() {
                console.log("het werkt 1")
                document.getElementById("input1").style.backgroundColor = "green"
            }   
            function myFunction2() {
                console.log("het werkt 2")
                let a = document.getElementById("input2").value
                document.getElementById("input2").style.backgroundColor = "blue"

                let count = 0
                for (let i = 0; 1 < a.length; i++){
                    count+= a; 
                }

                document.getElementById("output").innerHTML = a
            }
        </script>
    </head>
    <body>
        <label>naam:</label><input id="input1" type="text" onblur="myFunction1()"><br>
        <label>Leeftijd:</label><input id="input2" type="text" onkeyup="myFunction2()"><br>
        <p id="output">...</p>
    </body>
</html>
