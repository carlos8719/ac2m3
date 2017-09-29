<?php 

/***********************/
/****** FUNCIONES ******/
/***********************/

/*Problema 1*/
/*Encuentra el número máximo*/

function maximoEntero ($arr){

	if(count($arr)>0){

		$a = $arr[0];

			for ($i=1; $i <count($arr) ; $i++) {

				if($a < $arr[$i]){

					$a = $arr[$i];
				}
			}

			return $a;

	}else{
		return false;
	}
}


/*Problema 2*/
/*Encuentra el número minimo*/

function menorEntero ($arr){

	if(count($arr)>0){

		$a = $arr[0];

			for ($i=1; $i <count($arr) ; $i++) {

				if($a > $arr[$i]){

					$a = $arr[$i];
				}
			}

			return $a;

	}else{
		return false;
	}
}

/*Problema 3*/
/*esta en el medio la secuencia "<->"*/

function secuencia($string){

    if($string !=""){
	    $i = strlen($string)/2;
	    var_dump($i);
	    $i = intval($i);

	    if($string[$i]=="-"){
	      $cadena = $i;
	      var_dump($cadena);


	    }elseif($string[$i+1]=="-"){
	      $cadena =$i;
	      var_dump($cadena);


	    }elseif($string[$i-1] == "-"){
	      $cadena = $i;
	      var_dump($cadena);


	    }else{

	      return false;
	    }

	    if($cadena[$i-1] == "<" && $cadena[$i+1] == ">"){
	      return true;
	    }else{
	      return false;
	    }
	  }
}


/*Problema 4*/
/*Encuentra la serie más grande*/

function espejoEspejito($arr){

	$cadlen = count($arr);
	$cadMayor = 0;

	if($cadlen>0){
		for ($i=0; $i <$cadlen ; $i++) { 
			for ($j=$cadlen; $j >0 ; $j--){ 
				if($arr[$i]===cad[$j]){
					$posibleMayor = contarCoincidencias($arr, $i, $j, $cadlen);
					if($posibleMayor>cadMayor){
						$cadMayor = $posibleMayor;
					}

				}
			}
		}

		return $cadMayor;
	}else{
		return false;
	}

}

/*CONTADOR DE COINCIDENCIAS*/

function contar($arr, $i, $j, $len){

	$contar = 0;

	while($arr[$i]==cad[$j] && $i<$len && j>=0){
		$contar++;
		$i++;
		$j--;
	}
	return $contar;
}



?>