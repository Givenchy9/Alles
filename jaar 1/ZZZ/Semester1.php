
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../zzz/alles.css" rel="stylesheet">
    
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

  output:<br>
    <div id="outputDiv">
        test
    </div>  
    <br>
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
    

    <table>
            <tr>
                <th></th>
            </tr>
            <tr>
                <td><label>Naam:</label></td>
                <td><Input class="redx" id="voornaam" type="text" placeholder="naam" onkeyup="myFunction"><span id="error"></span></td>
                <td><Input class="redx" class="achter" id="achternaam" type="text" placeholder="achternaam"></td>
            </tr>
            <tr>
                <td>Adress:</td>
                <td><Input class="redx" id="adress" type="text" placeholder="zwolle"></td>
            </tr>
            <tr>
                <td>Pc Plaats:</td>
                <td><Input id="postcode" type="number" placeholder="Postcode"></td>
                <td><Input id="plaats" class="achter" type="text" placeholder="Plaats"></td>
            </tr>
            <tr>
                <td>Telefoon:</td>
                <td><Input id="telefoon" type="number" placeholder="06/"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><Input id="email" type="email" placeholder="...@gmail.com"></td>
            </tr>
            <tr>
                <td>Geslacht:</td>
                <td>Man<Input id="geslacht" type="radio">Vrouw<Input type="radio"></td>
            </tr>
            <tr>
                <td id="boyband">Boyband:</td>
                <td>
                    <Select>
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                        <option value="d">d</option>
                        <option value="e">e</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td>Geb.Datum:</td>
                <td><Input type="date" id="datum"> Opmaak: dd-mm-jjjj</td>
            </tr>
            <tr>
                <td>Verstuur:</td>
                <td><Input type="submit" onclick="validateFrom()"></td>
            </tr>
        </table>
        <div id="demox"></div>
        <script src="../FormZ/Form.js"></script>

    </aside>
</main>
<footer id="footer">footer</footer>
      </div>
      <script src="../ZZZ/alles.js"></script>
</body>
</html>]