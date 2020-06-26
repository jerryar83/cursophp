<?php

class Gato{
	const EDAD = 18; //no es necesario el signo de pesos o dollar
	//desde la version php 5.3.0 se peude unitiizar el Newdow HEREDOC
  	const PESO = <<<'EOT'
  20
EOT; //debe estar pegado o marca error
	
	//desde al version 5.6.0 las constantes pueden manejar expreiones
	const UNO = 1;
	const DOS = self::UNO + self::UNO;
	const TRES = self::UNO + self::DOS;
	const SUMA = "las vida de los gatos son ".self::TRES * 3;


	function edadGatuna(){
		return self::EDAD;  //para llamar a una constante no es necesario $this 
	}
}

$gato = new Gato();
print "la edad maxima de los gatos es ".GATO::EDAD."<br>";
print "la edad maxima de los gatos es ".$gato->edadGatuna()."<br>";
//desde la version php 5.3.0 podemos utilizar el nombre de una clase dentro de una variable
$clase = "Gato";
print "el peso maximo de un gato es".$clase::PESO."<br>";
print $clase::SUMA."<br>";
?>