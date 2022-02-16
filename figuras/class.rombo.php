<?php
class rombo extends figura implements formulas{
	private $lado1;
	private $dmayor;
	private $dmenor;
	private $area;
	private $perimetro;
	private $tipo;
	function __construct($l1, $l2){
		$this->lado1=$l1;
		$this->dmayor=$l2;
		$this->area=0;
		$this->perimetro=0;
		$this->tipo="Rombo";
	}
	public function perimetro(){
		$this->perimetro=$this->lado1*4; //calcula el perimetro 
	}
	public function area(){
		$this->dmenor=sqrt(4*pow($this->lado1, 2)-pow($this->dmayor, 2));
		$this->area= ($this->dmayor*$this->dmenor)/2; //calcula el area
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

