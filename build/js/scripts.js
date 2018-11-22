function login() {
  var user=document.getElementById("user").value;
  var pass=document.getElementById("pass").value;

  if (user=="mariano" && pass=="123") {
accesso();

  }else {
    incorrecto();
  }

}

function accesso() {
  window.location.href="productos.html";

}
function incorrecto() {
  alert("Contraseña o Usuario incorrectos")

}

function graficar() {
var x=document.getElementById("hombres").value;
var y=document.getElementById("mujeres").value;
var h=parseInt(x);
var m=parseInt(y);
var t = h+m;
var tm = (m * 100)/t;
var th = (h * 100)/t;

document.getElementById("phombre").style="width:" + th + "%";
document.getElementById("pmujer").style="width:" + tm + "%";
document.getElementById("porhombre").value=th;
document.getElementById("pormujer").value=tm;
document.getElementById("PH").value=th;
document.getElementById("PM").value=tm;
  }
