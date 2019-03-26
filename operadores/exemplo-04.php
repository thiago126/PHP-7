<?php
	
	$a = 30;
	$b = 50;
	$c = 50.0;

	//Operador de maior
	var_dump($a > $b);
	echo "</br>";

	//Operador de menor
	var_dump($a < $b);
	echo "</br>";

	//Operador de igual (mesmo valor)
	var_dump($b == $c);
	echo "</br>";

	//Operador de igual (mesmo valor e tipo)
	var_dump($b === $c);
	echo "</br>";

	//Operador de valor diferente
	var_dump($b != $c);
	echo "</br>";

	//Operador de valor e tipo diferente
	var_dump($b !== $c);
	echo "</br>";

?>