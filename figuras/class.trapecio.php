<?php
class trapecio extends figura implements formulas{
	private $lado1;
	private $lado2;
	private $lado3;
	private $lado4;
	private $altura;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($l1,$l2,$l3,$l4,$alt){
		$this->lado1=$l1;
		$this->lado2=$l2;
		$this->lado3=$l3;
		$this->lado4=$l4;
		$this->altura=$alt;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Trapecio";
	}
	public function perimetro(){
		$this->perimetro=$this->lado1+$this->lado2+$this->lado3+$this->lado4; //calcula el perimetro 
	}
	public function area(){
		$a=$this->lado1;
		$b=$this->lado2;
		$this->area=(($a+$b)/2)*$this->altura; //calcula el area
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