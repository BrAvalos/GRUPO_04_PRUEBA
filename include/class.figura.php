<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="" >
			<table border=0 align="center">
				<tr>
					<th colspan="2"><h3>INGRESO DATOS DE LA FIGURA</h3></th>
				</tr>
				<tr>
					<td>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label> 
                    </div> 
                </td>
					<td>
						<div class="form-group ">
						<select class="form-select" name="tipo" id="tipo" OnChange="activarTxt()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
							<option value="rombo">Rombo</option>
							<option value="romboide">Romboide</option>
							<option value="trapecio">Trapecio</option>
						</select>
						</div>
					</td>
				</tr>
				<tr>
				<td>&nbsp</td>
				</tr>
				<tr>
					<div class="form-group">
					<td id="txt1">Lado 1:</td>
					<td><input class="form-control" type="text" name="lado_1" id="lado_1" size="4" disabled></td>
					</div>
				</tr>
				<tr>
					<div class="form-group">
					<td id="txt2">Lado 2:</td>
					<td><input class="form-control" type="text" name="lado_2" id="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<div class="form-group">
					<td id="txt3">Lado 3:</td>
					<td><input class="form-control" type="text" name="lado_3" id="lado_3" size="4" disabled></td>
					</div>
				</tr>
				<tr>
					<div class="form-group">
					<td id="txt4">Lado 4:</td>
					<td><input class="form-control" type="text" name="lado_4" id="lado_4" size="4" disabled></td>
					</div>
				</tr>	
				<tr>
					<div class="form-group">
					<td id="txt4">Altura:</td>
					<td><input class="form-control" type="text" name="altura" id="altura" size="4" disabled></td>
					</div>
				</tr>						
				<tr>
					<th colspan="2"><div class="form-group"> 
                        <input class="btn btn-primary" type="submit" name="calcular" value="Calcular">
                    </div></th>
				</tr>
			</table>
			</form>
			';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
