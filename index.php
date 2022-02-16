<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Grupo04_Prueba</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/script.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");
		include("figuras/class.rombo.php");
		include("figuras/class.romboide.php");
		include("figuras/class.trapecio.php");
		
		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "cuadrado": $f = new cuadrado($_POST['lado_1']);break;
				case "rectangulo": $f = new rectangulo($_POST['lado_1'],$_POST['lado_2']);break;
				case "triangulo": $f = new triangulo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3']);break;
				case "rombo": $f = new rombo($_POST['lado_1'],$_POST['lado_2']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['altura']);break;
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['altura']);break;
				default: header("location:index.php");
			}
			mostrar($f);
			echo '<br><br><button class="btn btn-warning"><a style="text-decoration: none; color: black;" href="index.php">REGRESAR</a></button>';
		}else{
			echo figura::get_form();
		}
		
		
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "El área del " . $fig->GetTipo() . " es: " . $fig->GetArea();
			echo "<br>El perímetro del " . $fig->GetTipo() . " es: " . $fig->GetPerimetro();
		}
	?>
	
</body>

</html>
