<?php
class triangulo extends figura implements formulas{
	private $lado1;
	private $lado2;
	private $lado3;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($l1, $l2, $l3){
		$this->lado1=$l1;
		$this->lado2=$l2;
		$this->lado3=$l3;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Triangulo";
	}
	public function perimetro(){
		$this->perimetro=($this->lado1+$this->lado2+$this->lado3); //calcula el perimetro 
	}
	public function area(){
		$this->perimetro(); //llama a calcular el perimetro 
		//Formula de Heron
		$s=($this->perimetro)/2;
		$this->area=sqrt($s*($s-$this->lado1)*($s-$this->lado2)*($s-$this->lado3)); //calcula el area
	}
	public function GetArea(){
		return $this->area;
	}
	        
	public function GetPerimetro(){
		return $this->perimetro;
	}
	    
	public function GetTipo(){
		return $this->tipo;
	}
}
?>

