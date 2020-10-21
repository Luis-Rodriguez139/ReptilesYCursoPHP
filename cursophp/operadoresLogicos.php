<?php 
	/* Los operadores logicos sirven para validar expreciones
	Tal es el caso del operador or que sirve para validar una entencia u otra
	En el cao del operador and que sirve para validar ambas sentencias*/
	$resultado=50;

		if ($resultado< 51 and $resultado > 49){
			//"es un munero 50 valido";
		}
		$edadvalida=25;

			if ($edadvalida > 18 and $edadvalida < 26){
				//echo "la edad es valida";
			}
			$sexo="F";

				if($sexo=='M' or $sexo=='F'){
					echo "sexo valido";
				}
				echo "<br>";
				//el operador de diferente y la negacion
				//operador diferente, sirve para validar que un dato no corresponda a la cantidad o caracter
				$dato=10;

				if($dato != 10){
					//echo "es un dato bueno";
				}
				//La negacion sirve para hacer una vaidacion dealgo que no ocurre
				$dato2=false;

				if(!$dato2){
					echo "no es verdadero";
				}

 ?>