<?php
class Gatos{
	
}
/*
$clases= get_declared_classes();

foreach ($clases as $clase) {
	print $clase."<br>";
}
*/
if(class_exists("Gatos")){
	print "La clase gatos si existe";
	}
	else
	{
	print "no existe";
	}
?>