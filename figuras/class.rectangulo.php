<?php
class rectangulo extends figura implements formulas{
	private $lado1;
	private $lado2;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($l1, $l2){
		$this->lado1=$l1;
		$this->lado2=$l2;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Rectangulo";
	}
	public function area(){
		$this->area=$this->lado1*$this->lado2; //calcula area del rectangulo
	}
	public function perimetro(){
		$this->perimetro=(2*$this->lado1)+(2*$this->lado2); //calcula el perimetro 
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
