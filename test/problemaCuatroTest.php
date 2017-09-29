<?php 


require_once "funciones.php";
use PHPUnit\Framework\TestCase;
class problemaCuatroTest extends TestCase{


	/*Definir Test que se van a realizar*/


	public function testArrayVacio(){

		$a = [];
		$res = espejoEspejito($a);
		$this->assertFalse($res);
	}

	
	public function testArrayContiguos(){

		$a =[1,2,3,8,9,3,2,1,5];
		$res = espejoEspejito($a);
		$this->assertEquals(3, $res);
	}

	public function testArrayContiguosDos(){

		$a =[1,2,1,4];
		$res = espejoEspejito($a);
		$this->assertEquals(3, $res);
	}

	public function testArrayNoContiguos(){

		$a =[1,3,3,8,9,3,2,0,5];
		$res = espejoEspejito($a);
		$this->assertEquals(0, $res);
	}

	public function testArrayNoContiguosDos(){

		$a =[2,9,5,7];
		$res = espejoEspejito($a);
		$this->assertEquals(0, $res);
	}

}

?>