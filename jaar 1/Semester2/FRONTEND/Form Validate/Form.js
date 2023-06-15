function  myFunction(inp) {
    console.log("het werkt");
    document.getElementById("voornaam").style.backgroundColor = "green"
    if (inp.id == "voornaam" || inp.id == "achternaam"|| inp.id == "adress"|| inp.id == "telefoon"|| inp.id == "email") {
        if (inp.value.length > 5 ) {
            inp.style.backgroundColor = "green"
        } else {
            inp.style.backgroundColor = "red"
        }


        if (inp.id == "telefoon") {
            if (inp.value.length > 10){
                inp.style.backgroundColor = "orange"
                document.getElementById("demox").innerHTML = "maximaal aantal nummers 10"
                document.getElementById("demox").style.color = "orange"
            } else {
                document.getElementById("demox").innerHTML = ""
                inp.style.backgroundColor = "green"
            }
        }       


        if (inp.id == "plaats") {
            inp.style.backgroundColor = "green"
            if (inp.length < 4){
                inp.style.backgroundColor = "green"
            } else {
                inp.style.backgroundColor = "red"
            }
        }
}
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
            //let inp = 
            // let dx = document.getElementById("demox");

            // function validateField(inp) {
            //     console.log("waarde is: "+inp.value+ " id= " +inp.id)
            //     document.getElementById("voornaam").style.backgroundColor ="red"
            //     if(inp.value.lenght > 3) {
            //         inp.style.backgroundColor = "red"
            //     } else {
            //         inp.style.backgroundColor = "green"
            //     }
            // }

            // function validateFrom() {
            //     console.log("het werkt")
                
            //     let vn = document.getElementById("voornaam");
            //     let an = document.getElementById("achternaam");
            //     let ad = document.getElementById("adress").value;
            //     let d = document.getElementById("postcode").value;
            //     let e = document.getElementById("plaats").value;
            //     let f = document.getElementById("telefoon").value;
            //     let g = document.getElementById("email").value;
            //     let h = document.getElementById("geslacht").value;
            //     let i = document.getElementById("datum").value;
            //     let y = voornaam.length
            //     let z = achternaam.length

            //     if (vn.value == "") {
            //         vn.style.backgroundColor = "red";
            //         dx.innerHTML = "mag niet leeg zijn"
            //     } else {
            //         vn.style.backgroundColor = "green"
            //         dx.innerHTML = ""
            //     }
            //     //console.log("lenght "+vn.value+": "+ vn.value.length)
            //     if (vn.value.length <= 1) {
            //         vn.style.backgroundColor = "orange";
            //         dx.innerHTML = "minimaal 2 caracters"
            
            //     }
            //     if (an.value == "") {
            //         an.style.backgroundColor = "red";
            //         dx.innerHTML = "mag niet leeg zijn"
            //     } else {
            //         an.style.backgroundColor = "green"
            //         dx.innerHTML = ""
            //     }
            //     //console.log("lenght "+vn.value+": "+ vn.value.length)
            //     if (an.value.length <= 1) {
            //         an.style.backgroundColor = "orange";
            //         document.getElementById("demox").innerHTML = "minimaal 2 caracters"
            
            //     }
            //     // if (b == "") {
            //     //     document.getElementById("achternaam").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Rood invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("achternaam").style.backgroundColor = "green"
            //     //     document.getElementById("achternaam").innerHTML = ""
            //     // }
            //     // if (b == "?") {
            //     //     document.getElementById("achternaam").style.backgroundColor = "orange";
            //     //     document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
            //     //     return false
            //     // }
            //     // if (c == "") {
            //     //     document.getElementById("adress").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Rood invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("adress").style.backgroundColor = "green"
            //     //     document.getElementById("adress").innerHTML = ""
            //     // }
            //     // if (c == "?") {
            //     //     document.getElementById("adress").style.backgroundColor = "orange";
            //     //     document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
            //     //     return false
            //     // }
            //     // if (d == "") {
            //     //     document.getElementById("postcode").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Rood invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("postcode").style.backgroundColor = "green"
            //     //     document.getElementById("postcode").innerHTML = ""
            //     // }
            //     // if (d == "?") {
            //     //     document.getElementById("postcode").style.backgroundColor = "orange";
            //     //     document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
            //     //     return false
            //     // }
            //     // if (e == "") {
            //     //     document.getElementById("plaats").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Naam invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("plaats").style.backgroundColor = "green"
            //     //     document.getElementById("plaats").innerHTML = ""
            //     // }
            //     // if (e == "?") {
            //     //     document.getElementById("plaats").style.backgroundColor = "orange";
            //     //     document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
            //     //     return false
            //     // }
            //     // if (f == "") {
            //     //     document.getElementById("telefoon").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Telefoon nummer invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("telefoon").style.backgroundColor = "green"
            //     //     document.getElementById("telefoon").innerHTML = ""
            //     // }
            //     // if (f.length > 10){
            //     //     document.getElementById("telefoon").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "maximaal aantal = 10!!!"
            //     //     submitOK = "false";
            //     // }
            //     // if (g == "") {
            //     //     document.getElementById("email").style.backgroundColor = "red";
            //     //     document.getElementById("demox").innerHTML = "Email invullen!!!"
            //     //     return false
            //     // } else {
            //     //     document.getElementById("email").style.backgroundColor = "green"
            //     //     document.getElementById("email").innerHTML = ""
            //     // }
            //     // if (g == "?") {
            //     //     document.getElementById("telefoon").style.backgroundColor = "orange";
            //     //     document.getElementById("demox").innerHTML = "Wilt u de gegevens A.U.B invullen"
            //     //     return false
            //     // }




             
            // }