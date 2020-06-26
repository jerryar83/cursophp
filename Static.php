<?php

class Gato{
	//propiedades
	public static $claveSecreta="1234";
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
//set con este metodo magico accedemos a las propiedades independiemtemente de su modificador
function __set($name,$valor)
{
	$this->$name=$valor;

}
function __get($name){
return $this->$name;
}
//getters y setters
 function setCorbata($c="SI"){
 	if($c!="SI")
 		$this->corbata = "NO";
 	else
 		$this->corbata=$c;
 }

 function getCorbata(){
 	return $this->corbata;
 }

//funcion statica
public static function mensajeSecreto(){
return "programacion ";
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

//accedemos a la propiedad statica y al metodo.
print "la clave secreta es :".Gato::$claveSecreta."<br>";
print "la frase secreta es :".Gato::mensajeSecreto()."<br>";

?>