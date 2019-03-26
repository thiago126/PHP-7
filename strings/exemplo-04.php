<?php 
	
	$frase = "A repetição é mãe da retenção";
	$a = "mãe";
	//Função que mostra a posição da palavra
	$q = strpos($frase, $a);

	var_dump($q);
	echo "</br>";

	//Função que retorna o conteudo a partir do indice indicado e pode ter um indice final
	$texto = substr($frase, 0, $q);
	var_dump($texto);
	echo "</br>";

	//Mostrar o texto após o indice indicado
	$texto = substr($frase, $q + strlen($a), strlen($frase));
	var_dump($texto);
	echo "</br>";

	//strlen, retorna o tamanho da string
	//substr, retorna uma parte de uma string

?>