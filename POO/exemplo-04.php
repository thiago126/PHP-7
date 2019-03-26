<?php 

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		var_dump("DESTRUIR");
	}

	public function __toString(){
		return $this->logradouro.', '.$this->numero.', '.$this->cidade;
	}
}

$meuEndereco = new Endereco("Rua João Portes Del Rei",32,"São Paulo");
//Chama o toString
echo $meuEndereco;
//Mostra apenas
var_dump($meuEndereco);
//Chama o destruct
unset($meuEndereco);

?>