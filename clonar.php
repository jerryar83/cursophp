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

//herencia de gato extendemos mediante la palabra reservada extends

class GatoVolador extends Gato {

	function nombreGatovolador(){
		return $this->nombre; //se puede acceder a nombre gracias a protected y
	}
	function maullar(){
		print parent::mensaje()."<br>"; //paren para invocar un metodo de la clase madre
		return "miauu  cabrones";
	}
}

$gato = new Gato("Cucho","rosa");

//copiar por valor

$a = 10;//asignamos 10 a una unidad de memoria
$b= $a;//copia de valor

print "el valor de a= ".$a."<br>";
print "el valor de b= ".$b."<br>";

//copiar por referencia

$panza = $gato;   //estamos asignando a $panza la referencia del objeto $gato es decir los cambios que se hagan a $panza afectan a $gato y vicerveza.
$panza->setCorbata("NO");
print $panza->tienecorbata();//manda No
print $gato->tienecorbata();//manda No 

$panza->setNombre("panza");
//con esto cambiamos el nombre a panza y como es la misma referencia
print $panza->tienecorbata();
print $gato->tienecorbata();

//clonar

$panza = clone $gato;     //clonamos al objeto creamos otro con las mismas caracteristicas pero independientes
$panza->setNombre("panza");//solo afectamos a panza
$gato->setNombre("cucho");//solo afectamos gato
print $panza->saludo();//arroja panza
print $gato->saludo();//arroja cucho

?>