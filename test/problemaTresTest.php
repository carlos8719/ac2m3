<?php

require_once "funciones.php";
use PHPUnit\Framework\TestCase;

class problemaTresTest extends TestCase{

	/*Definir los test que se van hacer*/

	public function testNoExisteLaSecuencia (){

		$a = "aaa<->bbb";
		$res = secuencia ($a);
		$this->assertFalse(True);

	}

	public function testSecuenciaTrue (){

		$a = "aaa<->bbb";
		$res = secuencia ($a);
		$this-> assertTrue(false);

	}


	public function testSecuenciaDosTrue (){

		$a = "aaaa<->bbb";
		$res = secuencia ($a);
		$this-> assertTrue(false);

	}

	public function testSecuenciaTresTrue (){

		$a = "aaa<->bbbb";
		$res = secuencia ($a);
		$this-> assertTrue(false);

	}

	public function testSecuenciaFalse (){

		$a = "aaaaa<->bbb";
		$res = secuencia ($a);
		$this-> assertFalse(true);

	}

	public function testSecuenciaDosFalse (){

		$a = "aaa<->bbbbb";
		$res = secuencia ($a);
		$this-> assertFalse(true);

	}



	


}


 ?>