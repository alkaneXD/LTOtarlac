function validReg(){
if(document.getElementById("firstname").value.length == ""){
alert("Please input your first name.");
document.getElementById("firstname").focus();
return false;
}
if(document.getElementById("lastname").value.length == ""){
alert("Please input your last name.");
document.getElementById("lastname").focus();
return false;
}
if(document.getElementById("email").value.length == ""){
alert("Please input your email.");
document.getElementById("email").focus();
return false;
}
var validemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(document.getElementById("email").value.match(validemail)){
document.getElementById("email").focus();
}
else
{
alert("Invalid email, please enter again.");
document.getElementById("email").focus();
return false;
}
if(document.getElementById("month").value == ""){
alert("Please select your birth month.");
document.getElementById("month").focus();
return false;
}
if(document.getElementById("day").value == ""){
alert("Please select your birth day.");
document.getElementById("day").focus();
return false;
}
if(document.getElementById("year").value == ""){
alert("Please select your birth year.");
document.getElementById("year").focus();
return false;
}
}