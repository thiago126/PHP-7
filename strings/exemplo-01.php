<?php 

	$nome = "Thiago";
	$nome2 = 'Freitas';

	//Tanto na aspas simples e na dupla o conteudo será string.
	var_dump($nome, $nome2);
	echo "</br>";

	//Na aspas dupla pode se usar uma variavel para que seja usado o valor atribuido a ela, sem precisar concatenar.
	//Chama-se interpolação de variavel
	echo "Meu nome é $nome";
	echo "</br>";
	
	//Na aspas simples todo conteudo dentro dela é string.	
	echo 'O nome da variavel é $nome';
	echo "</br>";

?>