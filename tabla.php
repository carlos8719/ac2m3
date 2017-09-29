<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>PHPUnit --Problemas--</title>
</head>
<body>

	<header>

		<h1>PHPUnit</h1>
		
	</header>
	<main>
		


	<h2>Problema 1</h2>

		<p>Programar una función que busque el máximo de un array de enteros recibido como argumento.</p>

		<p><span>Ejemplo:</span> max([3,4,6,1,65,-3,6,10]): <span>65</span> </p>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>$a = [3,5,6,1,56];</td>
					<td>56</td>
					<td>Test para el mayor, todos los  números positivo</td>
				</tr>
				<tr>
					<td>$a = [-3,-5,-6,-1,-56];</td>
					<td>-1</td>
					<td>Test para el mayor, con todos números negativos.</td>
				</tr>
				<tr>
					<td>$a = [0];</td>
					<td>0</td>
					<td>Test para saber como actua siendo 0.</td>
				</tr>
				<tr>
					<td>$a = [89,2,4,30,-200];</td>
					<td>89</td>
					<td>Test para saber si el primer número es el mayor.</td>
				</tr>
				<tr>
					<td>$a = [89,2,4,30,200];</td>
					<td>89</td>
					<td>Test para saber si el último número es el mayor.</td>
				</tr>
				<tr>
					<td>$a = [];</td>
					<td>false</td>
					<td>Test para saber como actua con un array vacio.</td>
				</tr>
			</table>

	<h2>Problema 2</h2>

		<p>Programar una función que busque el mínimo de un array de enteros recibido como argumento.</p>

		<p><span>Ejemplo: </span>min([3,4,6,1,65,-3,6,10]): <span>-3</span></p>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>$a = [3,5,6,1,56];</td>
					<td>56</td>
					<td>Test para el menor, todos los  números positivo</td>
				</tr>
				<tr>
					<td>$a = [-3,-5,-6,-1,-56];</td>
					<td>-1</td>
					<td>Test para el menor, con todos números negativos.</td>
				</tr>
				<tr>
					<td>$a = [3,5,6,-1,-56];</td>
					<td>-56</td>
					<td>Test para saber como actua siendo positivos y negativos.</td>
				</tr>

				<tr>
					<td>$a = [0];</td>
					<td>0</td>
					<td>Test para saber como actua siendo 0.</td>
				</tr>
				<tr>
					<td>$a = [89,2,4,30,-200];</td>
					<td>89</td>
					<td>Test para saber si el primer número es el menor.</td>
				</tr>
				<tr>
					<td>$a = [89,2,4,30,200];</td>
					<td>89</td>
					<td>Test para saber si el último número es el menor.</td>
				</tr>
				<tr>
					<td>$a = [];</td>
					<td>false</td>
					<td>Test para saber como actua con un array vacio.</td>
				</tr>
			</table>

	<h2>Problema 3</h2>

		<p>Dada una cadena, implementar una función que diga (true o false) si la secuencia <span>"<->"</span> aparece en medio. Se considerará que está en medio si el número de caracteres que hay antes y después difieren como mucho en una unidad.</p>

		<p><span>Ejemplo: </span>flechaMedio("xaj<->bb"): <span>true</span> </p>

			<table>
				<tr>
					<th>Entrada</th>
					<th>Salida esperada</th>
					<th>Descripción</th>
				</tr>
				<tr>
					<td>$a = "";</td>
					<td>Falso</td>
					<td>Test que nos indica que si el array esta vacio devuelve <b>falso</b>.</td>
				</tr>
				<tr>
					<td>$a = "<->";</td>
					<td>True</td>
					<td>Test que devuelve <b>true</b> porque la secuencia esta en medio.</td>
				</tr>
				<tr>
					<td>$a = "vvv<->aaa";</td>
					<td>True</td>
					<td>Test que devuelve <b>true</b>, esta justo en medio de la secuencia tiene tres caracteres a cada lado.</td>
				</tr>
				<tr>
					<td>$a = "vvv<->aaaa";</td>
					<td>True</td>
					<td>Test que devuelve <b>true</b>, esta justo en medio de la secuencia tiene tres caracteres a su izquierda y cuatro a la derecha y como puede variar en una posición és <b>true</b>.</td>
				</tr>
				<tr>
					<td>$a = "vvvv<->aaa";</td>
					<td>True</td>
					<td>Test que devuelve <b>true</b>, esta justo en medio de la secuencia tiene cuatro caracteres a su izquierda y tres a la derecha y como puede variar en una posición és <b>true</b>.</td>
				</tr>
				<tr>
					<td>$a = "vvvvv<->aaa";</td>
					<td>False</td>
					<td>Test que devuelve <b>False</b>, porque no esta en medio tiene una posición después del medio, poque su izquieda tiene cinco caracteres y a la izquierda tres. La posición varia de dos y por eso es <b>false</b>. </td>
				</tr>
				<tr>
					<td>$a = "vvv<->aaaaa";</td>
					<td>False</td>
					<td>Test que devuelve <b>False</b>, porque no esta en medio tiene una posición antes del medio, poque su izquieda tiene tres caracteres y a la izquierda cinco. La posición varia de dos y por eso es <b>false</b>. </td>
				</tr>
			</table>

		<h2>Problema 4</h2>

			<p>Una sección de "espejo" en una matriz es un grupo de elementos contiguos tales que en algún lugar de la matriz, el mismo grupo aparece en el orden inverso. Devolver el tamaño de la sección espejo más grande que se encuentra en la matriz dada.</p>

			<p><span>Ejemplo 1:</span> espejoMayor([1, 2, 3, 8, 9, 3, 2, 1, 5]): <span>3</span></p>
			<p><span>Ejemplo 2:</span> espejoMayor([1, 2, 1, 4]): 3</p>

				<table>
					<tr>
						<th>Entrada</th>
						<th>Salida esperada</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>$a = [];</td>
						<td>False</td>
						<td>Comprobamos si el array esta vacio, si lo esta no entra en el if y devuelve <b>False</b>.</td>
					</tr>
					<tr>
						<td>$a =[1,2,3,8,9,3,2,1,5];</td>
						<td>3</td>
						<td>Secuencia espejo con números en medio entre las dos. Como resultado da <b>3</b>, la secuencia entroda és <b>"1,2,3"</b> y <b>"3,2,1"</b>.</td>
					</tr>
					<tr>
						<td>$a =[1,2,1,4];</td>
						<td>3</td>
						<td>Secuencia espejo consecutiva, da de resultado <b>3</b>.</td>
					</tr>
					<tr>
						<td>$a =[1,3,3,8,9,3,2,0,5];</td>
						<td>0</td>
						<td>Prueba una de array de <b>No</b> contiguos, como no se da la series espejo devuelve <b>0</b> porque el contador de inicio se coloca en <b>0</b>.</td>
					</tr>
					<tr>
						<td>$a =[2,9,5,7];</td>
						<td>0</td>
						<td>Prueba una de array de <b>No</b> contiguos, como no se da la series espejo devuelve <b>0</b> porque el contador de inicio se coloca en <b>0</b>.</td>
					</tr>
				</table>
				
	</main>
	<footer>
		<p class="nombre">Módulo 3 - Prueba de Evaluación Continuada 2  || Carlos Luna Fuentes</p>
	</footer>

</body>
</html>
