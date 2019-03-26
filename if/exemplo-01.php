<?php 

	$suaIdade = 21;
	
	$idadeCriança = 12;
	$idadeMaior = 18;
	$idadeIdoso = 65;

	if ($suaIdade < $idadeCriança){
		echo "Criança";
	} else if ($suaIdade < $idadeMaior) {
		echo "Adolescente";
	} else if ($suaIdade < $idadeIdoso){
		echo "Adulto";
	} else {
		echo "Idoso";
	}

	echo "</br>";

	//Operador ternario
	echo ($suaIdade < $idadeMaior)? "Menor de idade":"Maior de idade";

 ?>