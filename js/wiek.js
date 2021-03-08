var born = 2002;
var d = new Date();
var year = d.getFullYear();

var age = year - born;
document.getElementById("yo").innerHTML = age + " lat";



console.log(age);