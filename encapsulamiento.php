<?php

class Gato{
	//propiedades
	protected $nombre; //con este modificador se puede acceder desde una clase heredada.
	private $colorPelo;
	private $corbata = "SI";

//constructor
function __construct($nombre = "x", $pelo = "negro")
	{
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
	}

//dedstructor
function __destruct(){

print $this->nombre." dice : adios mundo cruel"."<br>";
}
//metodos
	function maullar()
	{
		return "miau miau";

	}
	function tienecorbata()
	{
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo ".$this->colorPelo."<br>";
	}

	function saludo(){
		 $cadena = "hola, me llamo ".$this->nombre." y mi color de pelo es ".$this->colorPelo."<br>";
		return $cadena;
	}
}

//herencia de gato extendemos mediante la palabra reservada extends

class GatoVolador extends Gato {

	function nombreGatovolador(){
		return $this->nombre; //se puede acceder a nombre gracias a protected
	}
}


$gato = new Gato("Cucho","rosa");
$gato2 = new GatoVolador("Benito","verde");

print $gato->saludo()."<br>";
print $gato2->saludo()."<br>";


print "el nombre del gato volador es: ".$gato2->nombreGatovolador()."<br>";

?>