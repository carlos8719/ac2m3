<?php


require_once "funciones.php";
use PHPUnit\Framework\TestCase;

class problemaDosTest extends TestCase{


	/*Definir los test que se van hacer*/

	public function testMenorPositivo(){

		$a = [3,5,6,1,56];
		$res = menorEntero ($a);
		$this->assertEquals(1,$res);
	}

	public function testMenorNegativos(){

		$a = [-3,-5,-6,-1,-56];
		$res = menorEntero ($a);
		$this->assertEquals(-56,$res);

	}

	public function testMenorNegativoPositivo(){

		$a = [3,5,6,-1,-56];
		$res = menorEntero ($a);
		$this->assertEquals(-56,$res);

	}


	public function testArrayCero(){

		$a = [0];
    $res = menorEntero ($a);
   	$this->assertEquals(0,$res);


	}

	public function testPrimeroMenor(){

		$a = [1,3,4,30,200];
		$res = menorEntero ($a);
		$this->assertEquals (1,$res);
	}


	public function testUltimoMenor(){

		$a = [89,2,4,30,1];
		$res = menorEntero ($a);
		$this->assertEquals (1,$res);
	}


	public function testArrayVacio(){

		$a = [];
		$res = menorEntero ($a);
		$this->assertFalse($res);

	}
}

?>
