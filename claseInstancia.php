<?php
class Gato{
	function maullar()
	{
		return "miau, miau";
	}
}
//creamos las instancia

$cucho = new Gato();
$benito = new Gato();
$espanto = new Gato();

//detectamos la clase de una instancia / objeto
echo "Espanto pertenece a la clase = ".get_class($espanto)."<br>";
//verificamos que un objeto pertenesca a una clase
echo "espanto";
if (is_a($espanto,"Gato")){
	echo "Si es un gato"."<br>";
	}
	else
	{
		echo "No es un gato";
	}
//llamamos a un metodo

	echo "Cucho dice ".$cucho->maullar()."<br>";

?>