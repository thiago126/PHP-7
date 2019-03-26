<?php 

class Pessoa{

	public $nome;

	public function falar(){

		return "O meu nome é " .$this->nome;
	}
}

$thiago = new Pessoa();
$thiago->nome = "Thiago Freitas";
echo $thiago->falar();

?>