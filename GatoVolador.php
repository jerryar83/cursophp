<?php
class GatoVolador extends Gato {

	function nombreGatovolador(){
		return $this->nombre; //se puede acceder a nombre gracias a protected y
	}
	function maullar(){
		print parent::mensaje()."<br>"; //paren para invocar un metodo de la clase madre
		return "miauu  cabrones";
	}
}
?>