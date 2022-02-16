<?php
class cuadrado extends figura implements formulas {
	private $lados;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($lado){
		$this->lados=$lado;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Cuadrado";
	}
	public function area(){
		$this->area=pow($this->lados, 2); //calcula la area del cuadrado
	}
	public function perimetro(){
		$this->perimetro=$this->lados*4; //calcula el perimetro 
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
