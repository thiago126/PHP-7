<?php 

class Carro{

	//Váriaveis
	private $modelo;
	private $motor;
	private $ano;

	//Getters e Setters
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	//Exibir propriedades
	public function exibir(){
		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()
		);
	}
}

$carro = new Carro();
$carro->setModelo("Onix");
$carro->setMotor("1.4");
$carro->setAno(2019);
print_r($carro->exibir());

?>