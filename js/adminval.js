function adminval(){
if(document.getElementById("usr").value.length == ""){
alert("No username entered:");
document.getElementById("usr").focus();
return false;
}
if(document.getElementById("psw").value.length == ""){
alert("No password entered.");
document.getElementById("psw").focus();
return false;
}
}