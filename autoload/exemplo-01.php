<?php 

function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
	var_dump($nomeClasse);
	echo "</br>";
}


$carro = new Punto();
$carro->acelerar(200);

?>