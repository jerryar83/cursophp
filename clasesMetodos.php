<?php
class Gatos{
	function maullar()
	{
		echo "El gatoto dice maulla"."<br>";
	}	

	function ronronea()
	{
		echo "y ronronea"."<br>";
	}	
}

$metodos = get_class_methods("Gatos"); 
// con get_class_methods verificamos los metodos de la clase seleccionada
foreach ($metodos as $metodo) {
	echo $metodo."<br>";
}

//con foreach verificamos los metodos que tiene Gatos

if(method_exists("Gatos", "maullar")){
	//con method_exists verificamos una clase en especifico
	//en este caso verificamos una clase que existe maullar
	echo "los gatos pueden maullar";
	}
	else
	{
		echo "Los gatos no pueden maullar";
	}
?>