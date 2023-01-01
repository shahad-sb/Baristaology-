// JavaScript source code
var n = setInterval(myTimer, 1000);
var message;

function myTimer() { 
    var date = new Date();
    document.getElementById("timer").innerHTML = date.toString()();
}

function theMessage() {
    var date = new Date();
    var hours = date.getUTCHours();
    if (hours < 12)
        message = "Good Morning";
    if (hours >= 12 && hours <= 17)
        message = "Good Afternoon";
    if (hours >= 17 && hours <= 24)
        message = "Good Evening";

    document.getElementById("msg").innerHTML = message ;
}


window.addEventListener("load", theMessage, false);