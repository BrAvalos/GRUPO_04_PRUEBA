<?php
class romboide extends figura implements formulas{
	private $lado1;
	private $lado2;
	private $altura;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($l1, $l2,$alt){
		$this->lado1=$l1;
		$this->lado2=$l2;
		$this->altura=$alt;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Romboide";
	}
	public function perimetro(){
		$this->perimetro=(2*$this->lado1)+(2*$this->lado2); //calcula el perimetro 
	}
	public function area(){
		$this->area=$this->lado2*$this->altura;  //calcula el area
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