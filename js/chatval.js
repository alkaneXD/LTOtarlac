function validChat(){
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
if(document.getElementById("concerns").value == ""){
alert("Pleas fill the messages or concerns box.");
document.getElementById("concerns").focus();
return false;
}
}