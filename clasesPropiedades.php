<?php

class Gato{
	var $nombre;
	var $colorPelo;
	var $corbata = "SI";
	function maullar()
	{
		return "miau miau";

	}
	function tienecorbata()
	{
		return $this->nombre." ".$this->corbata." tiene corbata y su color de pelo".$this->colorPelo."<br>";
	}
}

//instancias

$cucho = new Gato();


$cucho->nombre = "cucho";
$cucho->colorPelo= "rosa";
$cucho->corbata= "NO";

echo $cucho->nombre." dice ".$cucho->maullar()."<br>";
echo $cucho->tieneCorbata();
?>