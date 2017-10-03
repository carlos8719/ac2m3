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
$string = "xxx<=>xxxx";

function secuencia($string){

    if($string !=""){
	    $i = strlen($string)/2;
	    $i = intval($i);
	    // var_dump($i);

	    // var_dump($string);


	    if($string[$i]=="-"){
	      $cadena = $i;
	      var_dump($cadena);


	    }elseif($string[$i+1]=="-"){
	      $cadena =$i+1;
	      var_dump($cadena);


	    }elseif($string[$i-1] == "-"){
	      $cadena = $i-1;
	      var_dump($cadena);


	    }else{

	      return false;
	    }
	    var_dump($string[$cadena]);

	    if($string[$i-1] == "<" && $string[$i+1] == ">"){
	    	var_dump($string[$i-1]);
	    	var_dump($string[$i+1]);
	      return true;
	    }else{
	      return false;
	    }
	  }
	  return false;
}


/*Problema 4*/
/*Encuentra la serie más grande*/

function espejoEspejito($arr){

	//falta acabar de implementar porque encuentra una coincidencia de uno :S!!

  $long= count($arr);
  $mayor= 0;

	 if($long>0){
		  foreach ($arr as $key => $value) {
		    for($i=$long-1; $i>0; $i--){
		        if($value===$arr[$i]){
		          $res= Contar($arr, $key, $i);
		          if($res>$mayor){

		            $mayor= $res;
		          }
		        }
		    }
		  }
		  return $mayor;
	 }return false;
	}

function Contar($arr, $key, $i){

  $long= count($arr);
  $cont= 0;

  while(($key<$long)&&($i>=0)&&($arr[$key]===$arr[$i])){
	$key++;
	$i--;
	$cont++;
  } 
  return $cont;
}

?>