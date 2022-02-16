function activarTxt() {
  var x = document.getElementById("tipo").value; //captura el valor del select que es el tipo de la figura
  switch(x){
				case "cuadrado":
								cambiarNombreTxt(); 
								document.getElementById("lado_1").disabled = false; //activa o desactiva los input
								document.getElementById("lado_2").disabled = true;
								document.getElementById("lado_3").disabled = true;
								document.getElementById("lado_4").disabled = true;
								document.getElementById("altura").disabled = true;
								break;
				case "rectangulo": 
								cambiarNombreTxt();
								document.getElementById("lado_1").disabled = false;
								document.getElementById("lado_2").disabled = false;
								document.getElementById("lado_3").disabled = true;
								document.getElementById("lado_4").disabled = true;
								document.getElementById("altura").disabled = true;
								break;
				case "triangulo": 
								cambiarNombreTxt();
								document.getElementById("lado_1").disabled = false;
								document.getElementById("lado_2").disabled = false;
								document.getElementById("lado_3").disabled = false;
								document.getElementById("lado_4").disabled = true;
								document.getElementById("altura").disabled = true;
								break;
				case "rombo":
								cambiarNombreTxt();
								document.getElementById("lado_1").disabled = false;
								document.getElementById("txt2").innerHTML = "Diagonal Mayor: ";
								document.getElementById("lado_2").disabled = false;
								document.getElementById("lado_3").disabled = true;
								document.getElementById("lado_4").disabled = true;
								document.getElementById("altura").disabled = true;
								break;
				case "romboide": 
								cambiarNombreTxt();
								document.getElementById("lado_1").disabled = false;
								document.getElementById("lado_2").disabled = false;
								document.getElementById("lado_3").disabled = true;
								document.getElementById("lado_4").disabled = true;
								document.getElementById("altura").disabled = false;
								break;
				case "trapecio": cambiarNombreTxt();
								document.getElementById("txt1").innerHTML = "Base mayor: ";
								document.getElementById("lado_1").disabled = false;
								document.getElementById("txt2").innerHTML = "Base menor: ";
								document.getElementById("lado_2").disabled = false;
								document.getElementById("lado_3").disabled = false;
								document.getElementById("lado_4").disabled = false;
								document.getElementById("altura").disabled = false;
								break;
	}
}
function cambiarNombreTxt(){
	document.getElementById("txt1").innerHTML = "Lado 1: ";
	document.getElementById("txt2").innerHTML = "Lado 2: ";
	document.getElementById("txt3").innerHTML = "Lado 3: ";
}
