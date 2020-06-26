<?php

require_once "clases/Gato.php"; //para incluir el archivo de la clase gato
require_once "clases/GatoVolador.php"; //para incluir el archivo de la clase Gatovolador


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