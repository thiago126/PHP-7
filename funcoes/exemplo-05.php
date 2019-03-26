<?php 

	$a = 10;

	function trocaValor(&$b){

		$b += 50;

		return $b;
	}

	echo trocaValor($a);
	echo "</br>";
	echo $a;

	//& passagem de valor por referencia.
	//Se eu passar uma variavel ela troca de valor com a função.
 ?>