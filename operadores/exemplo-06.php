<?php
	
	$a = NULL;
	$b = NULL;
	$c = 50;

	//?? verifica se a variavel é nula, se for exibe a proxima, ela para na primeira 
	//que possui valor atribuido, mesmo existindo outras com valor

	echo $a ?? $b ?? $c;


?>