<?php

class Gato{
	//propiedades
	const edad=18;
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
 function setNombre($n="gatito"){
 	
 		$this->nombre = $n;

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
//mensaje();  marca error
//$this->mensaje(); funciona en metodos estaticos
self::mensaje();//el equivalente a $this


		//return "miau miau ".$this->claveSecreta; marcaria error
		return "miau miau ".self::$claveSecreta; //con self y :: accedemos a una propiedad declarada statica ya que con tuhis no podriamos

	}
 Static function mensaje(){
 	echo "Hello babys"."<br>";
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
?>