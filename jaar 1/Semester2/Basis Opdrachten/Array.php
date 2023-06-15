<!DOCTYPE html>
<html>
    <head>
        <style>
           #demo1{
            color: red;
            border-bottom: solid red 2px;
           }
           #demo2{
            color: red;
            border-top: solid red 2px;
           }
        </style>
        
    </head>
    <body>
      <?php
      $talen = array("PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C");
      echo "I like " .$talen[3] . ", " . $talen[2] . " and " . $talen[6] . ".<br><br>";

      foreach ($talen as $value) {
          echo "$value <br>";
        }
      ?>
      <p id="demo2">Rood is Javacript: </p><p id="demo1"></p>
      <script>
        console.log("werkt")
        const talen =["Dit is JavaScript", "PHP", "C#", "HTML", "JavaScript", "Java", "C++", "C"]
        document.getElementById("demo1").innerHTML = talen
      </script>
    </body>
</html>
