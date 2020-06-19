<?php

class Gato{
	//propiedades
	var $nombre;
	var $colorPelo;
	var $corbata = "SI";

//constructor
function __construct($nombre = "x", $pelo = "negro")
	{
		$this->nombre = $nombre;
		$this->colorPelo = $pelo;
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

//instancias

$gato1 = new Gato();



echo $gato1->nombre." dice ".$gato1->maullar()."<br>";
echo $gato1->tieneCorbata();
echo $gato1->saludo();

?>