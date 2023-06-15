function myFunctionTijd(){
        document.getElementById("tijd").innerHTML = Date()
}








function myFunctiona(){
    console.log("het werkt")
    document.getElementById("div2").style.visibility = "visible";
}
function myFunctionb(){
    document.getElementById("div20").style.visibility = "visible";
    document.getElementById("div20").style.position = "relative";
}
function myFunctionc(){
    document.getElementById("div21").style.visibility = "visible";
    document.getElementById("div21").style.position = "relative";
    document.getElementById("div22").style.visibility = "hidden";
    document.getElementById("div22").style.position = "absolute";
    document.getElementById("div23").style.visibility = "hidden";
    document.getElementById("div23").style.position = "absolute";
    // document.getElementById("div24").style.visibility = "hidden";
    // document.getElementById("div24").style.position = "absolute";
    document.getElementById("div25").style.visibility = "hidden";
    document.getElementById("div25").style.position = "absolute";
    document.getElementById("div26").style.visibility = "hidden";
    document.getElementById("div26").style.position = "absolute";
    document.getElementById("div27").style.visibility = "hidden";
    document.getElementById("div27").style.position = "absolute";
}
function myFunctiond(){
    document.getElementById("div22").style.visibility = "visible";
    document.getElementById("div22").style.position = "relative";
}
function myFunctione(){
    document.getElementById("div23").style.visibility = "visible";
    document.getElementById("div23").style.position = "relative";
}
// function myFunctionf(){
//     document.getElementById("div24").style.visibility = "visible";
//     document.getElementById("div24").style.position = "relative";
// }
function myFunctiong(){
    document.getElementById("div25").style.visibility = "visible";
    document.getElementById("div25").style.position = "relative";
}
function myFunctionh(){
    document.getElementById("div26").style.visibility = "visible";
    document.getElementById("div26").style.position = "relative";
}
function myFunctioni(){
    document.getElementById("div27").style.visibility = "visible";
    document.getElementById("div27").style.position = "relative";
}



function myFunctionExitx(){
    document.getElementById("div2").style.visibility = "hidden";
    document.getElementById("div2").style.position = "absolute";
    document.getElementById("div20").style.visibility = "hidden";
    document.getElementById("div20").style.position = "absolute";
    document.getElementById("div21").style.visibility = "hidden";
    document.getElementById("div21").style.position = "absolute";
    document.getElementById("div22").style.visibility = "hidden";
    document.getElementById("div22").style.position = "absolute";
    // document.getElementsByClassName("aaa").style.visibility = "hidden";
    // document.getElementsByClassName("aaa").style.position = "absolute";
}
function myFunctionExit1(){
    document.getElementById("div20").style.visibility = "hidden";
    document.getElementById("div20").style.position = "absolute";
}
function myFunctionExit2(){
    document.getElementById("div21").style.visibility = "hidden";
    document.getElementById("div21").style.position = "absolute";
}
function myFunctionExit3(){
    document.getElementById("div22").style.visibility = "hidden";
    document.getElementById("div22").style.position = "absolute";
}
function myFunctionExit4(){
    document.getElementById("div23").style.visibility = "hidden";
    document.getElementById("div23").style.position = "absolute";
}
// function myFunctionExit5(){
//     document.getElementById("div24").style.visibility = "hidden";
//     document.getElementById("div24").style.position = "absolute";
// }
function myFunctionExit6(){
    document.getElementById("div25").style.visibility = "hidden";
    document.getElementById("div25").style.position = "absolute";
}
function myFunctionExit7(){
    document.getElementById("div26").style.visibility = "hidden";
    document.getElementById("div26").style.position = "absolute";
}
function myFunctionExit8(){
    document.getElementById("div27").style.visibility = "hidden";
    document.getElementById("div27").style.position = "absolute";
}











function myFunction(){
    // console.log('het werkt');
    document.getElementById("body").style.backgroundColor= "black";

    document.getElementById("header").style.backgroundColor = "wheat";
    document.getElementById("header").style.color = "black";
    document.getElementById("tijd-button").style.color = "wheat";
    document.getElementById("eye").style.color = "wheat";

    document.getElementById("leftAside").style.backgroundColor = "wheat";
    document.getElementById("rightAside").style.backgroundColor = "wheat";
    document.getElementById("ctrlBar").style.backgroundColor = "grey";

    document.getElementById("footer").style.backgroundColor = "black";
    document.getElementById("footer").style.borderTop = "solid white 2px";
}
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