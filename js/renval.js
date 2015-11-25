function validRen(){
if(document.getElementById("firstname").value.length==0){
alert("Please input your first name.");
document.getElementById("firstname").focus();
return false;
}
if(document.getElementById("lastname").value.length==0){
alert("Please input your last name.");
document.getElementById("lastname").focus();
return false;
}
if(document.getElementById("licenseno").value.length==0){
alert("Please input your license number.");
document.getElementById("licenseno").focus();
return false;
}
if(document.getElementById("licenseno").value.length<11){
alert("License number invalid, it should be 11 characters.");
document.getElementById("licenseno").focus();
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
}