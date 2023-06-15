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
  document.getElementByid("outputDiv").innerHTML = text
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































// function myFunction() {
            //     console.log("open myFunction()")
            //     let voornaam = document.getElementById("voornaam").value;
            //     let lengtevoornaam = voornaam.length
            //     console.log("De lengte van " + voornaam + " is : " + lengtevoornaam)

            //     document.getElementById("output").innerHTML = "Mijn naam is = " + voornaam;

            //     if (lengtevoornaam > 10 || lengtevoornaam < 2) {
            //         document.getElementById("voornaam").style.backgroundcolor = "red"
            //         document.getElementById("error").innerHTML = "mag niet lannger dan 10 karakters zijn"
            //     } else {
            //         document.getElementById("voornaam").style.backgroundcolor = "green"
            //     }
            // }
            function validateFrom() {
                console.log("het werkt")
                let a = document.getElementById("voornaam").value;
                let b = document.getElementById("achternaam").value;
                let c = document.getElementById("adress").value;
                let d = document.getElementById("postcode").value;
                let e = document.getElementById("plaats").value;
                let f = document.getElementById("telefoon").value;
                let g = document.getElementById("email").value;
                let h = document.getElementById("geslacht").value;
                let i = document.getElementById("datum").value;
                let y = voornaam.length
                let z = achternaam.length

                if (a == "") {
                    document.getElementById("voornaam").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("voornaam").style.backgroundColor = "green"
                    document.getElementById("voornaam").innerHTML = ""
                }
                if (a == "?") {
                    document.getElementById("voornaam").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }
                if (b == "") {
                    document.getElementById("achternaam").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("achternaam").style.backgroundColor = "green"
                    document.getElementById("achternaam").innerHTML = ""
                }
                if (b == "?") {
                    document.getElementById("achternaam").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }






                if (c == "") {
                    document.getElementById("adress").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("adress").style.backgroundColor = "green"
                    document.getElementById("adress").innerHTML = ""
                }
                if (c == "?") {
                    document.getElementById("adress").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }
                if (d == "") {
                    document.getElementById("postcode").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("postcode").style.backgroundColor = "green"
                    document.getElementById("postcode").innerHTML = ""
                }
                if (d == "?") {
                    document.getElementById("postcode").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }








                if (e == "") {
                    document.getElementById("plaats").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("plaats").style.backgroundColor = "green"
                    document.getElementById("plaats").innerHTML = ""
                }
                if (e == "?") {
                    document.getElementById("plaats").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }
                if (f == "") {
                    document.getElementById("telefoon").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("telefoon").style.backgroundColor = "green"
                    document.getElementById("telefoon").innerHTML = ""
                }
                if (f == "?") {
                    document.getElementById("telefoon").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }





                if (h == "") {
                    document.getElementById("geslacht").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("geslacht").style.backgroundColor = "green"
                    document.getElementById("geslacht").innerHTML = ""
                }
                if (h == "?") {
                    document.getElementById("geslacht").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }

                if (i == "") {
                    document.getElementById("datum").style.backgroundColor = "red";
                    document.getElementById("demox").innerHTML = "Rood invullen!!!"
                    return false
                } else {
                    document.getElementById("datum").style.backgroundColor = "green"
                    document.getElementById("datum").innerHTML = ""
                }
                if (i == "?") {
                    document.getElementById("datum").style.backgroundColor = "orange";
                    document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
                    return false
                }
            }