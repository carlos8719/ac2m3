<?php


require_once "funciones.php";
use PHPUnit\Framework\TestCase;

class problemaTresTest extends TestCase{

	/*Definir los test que se van hacer*/

	public function testStringVacio(){

		$a = "";
		$res = secuencia($a);
		$this->assertFalse($res);

	}

	public function testStringSoloSecuencia(){

		$a = "<->";
		$res = secuencia($a);
		$this->assertTrue($res);

	}

	public function testSecuenciaMedio(){

		$a = "vvv<->aaa";
		$res = secuencia($a);
		$this->assertTrue($res);

	}

	public function testSecuenciaMedioDos(){

		$a = "vvvv<->aaa";
		$res = secuencia($a);
		$this->assertTrue($res);

	}
	
	public function testSecuenciaMedioFalse(){

		$a = "vvvvv<->aaa";
		$res = secuencia($a);
		$this->assertFalse($res);

	}

	public function testSecuenciaMedioFalseDos(){

		$a = "vvv<->aaaaa";
		$res = secuencia($a);
		$this->assertFalse($res);

	}
}

?>