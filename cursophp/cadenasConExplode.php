<?php 

	$var="Pedro Jimenez Lopez";
	$fecha="20-10-2020";
	/*explode es una funcion que convierte un string a un arreglo depenediendo de la construccion pedida*/

	$datos=explode(" ", $var);
	$f=explode("-", $fecha);

	echo "El mes de la fech es:".$f[1];

 ?>