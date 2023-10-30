// NAV BAR
// User button
var uservalue = document.getElementById("uservalue").value;

// Login and Sign up button display
if (uservalue == "1"){
    document.getElementById('login').style.display = "none";
    
}
// Logout button display
if (uservalue == "0") {
    document.getElementById('logout').style.display = "none";
}else{
    document.getElementById('logout').style.display = "block";
}
