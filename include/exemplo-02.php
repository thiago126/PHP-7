<?php 
	

	//Include tenta funcionar mesmo que não exista ou tenha erros, e possui mais recursos
	//Possui uma pasta chamada include.path, que é um repositorio de arquivos
	//Permite include dinâmico
	//include "inc/exemplo-01.php";
	
	//Require obriga que o arquivo exista e esteja funcionando corretamente
	require "inc/exemplo-01.php";

	//require_once ou include_once ignora chamadas repetidas
	require_once "inc/exemplo-01.php";

	$resultado = somar(10,5);

	echo $resultado;

?>