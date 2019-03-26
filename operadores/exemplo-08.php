<?php 
	
	//Precedencia de operações

	//Primeiro a divisão
	$a = 10 + 3 / 2;
	echo $a;
	echo "</br>";

	//Primeiro os parenteses
	$a = (10 + 3) / 2;
	echo $a;
	echo "</br>";

	//Retorna true se todas as comparações forem verdadeiras
	$a = (10 + 3) / 2 > 5 && 10 + 5 < 3;
	var_dump($a);
	echo "</br>";

	//Retorna true se uma das comparações for verdadeira
	$a = (10 + 3) / 2 > 5 || 10 + 5 < 3;
	var_dump($a);
	echo "</br>";

?>