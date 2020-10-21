<?php 

	//es un arreglo es un tipo de dato que puede contener n datos a partir de un almacenamiento por indice
	$arreglo=array();
	$arreglo[0]="juan";
	$arreglo[1]=10;
	$arreglo[2]='autodidacta';
	$arreglo[3]='facultad :)';
	
	//podemos llenar el arreglodesde el inicio o por posicion

	$arreglo2=array('jose',5,6,7,8,9,10);

	for($i=0; $i < count($arreglo2); $i++){
		echo $arreglo2[$i];
		echo "<br>";

		if($arreglo2[$i]=='autodidacta'){
			echo "Felicidades encontrate el dato";
			echo "<br>";
		}
	}


 ?>