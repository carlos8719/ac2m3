<?php 


require_once "funciones.php";
use PHPUnit\Framework\TestCase;

class problemaUnoTest extends TestCase{


	/*Definir los test que se van hacer*/

	public function testMayorPositivo(){

		$a = [3,5,6,1,56];
		$res = maximoEntero ($a);
		$this->assertEquals(56,$res);
	}

	public function testMayorNegativos(){

		$a = [-3,-5,-6,-1,-56];
		$res = maximoEntero ($a);
		$this->assertEquals(-1,$res);

	}

	public function testMayorNegativoPositivo(){

		$a = [3,5,6,-1,-56];
		$res = maximoEntero ($a);
		$this->assertEquals(6,$res);

	}
	
	
	public function testArrayCero(){

		$a = [0];
    	$res = maximoEntero ($a);
   		$this->assertEquals(0,$res);


	}

	public function testPrimeroMayor(){

		$a = [89,2,4,30,-200];
		$res = maximoEntero ($a);
		$this->assertEquals (89,$res);
	}


	public function testUltimoMayor(){

		$a = [89,2,4,30,200];
		$res = maximoEntero ($a);
		$this->assertEquals (200,$res);
	}

	
	public function testArrayVacio(){

		$a = [];
		$res = maximoEntero ($a);
		$this->assertFalse($res);

	}
}

?>