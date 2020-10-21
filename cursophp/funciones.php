<?php 

	//funcion normalde php
	function mifuncion(){
		//mostrar un nombre
		$r=array(1);
		return $r;

	}
	//funciones escalares
	//print_r(mifuncion());

	function mifuncion2($valorA,$valorB,$opcion){
		switch ($opcion) {
			case 'suma':
				return $valorA + $valorB;
				break;
			case 'resta':
				return $valorA - $valorB;
				break;
			case 'mutiplicacion':
				return $valorA * $valorB;
				break;
			case 'divicion':
				return $valorA / $valorB;
				break;
			
			default:
				# code...
				break;
		}
	}


	echo mifuncion2(5,10, 'mutiplicacion');


 ?>