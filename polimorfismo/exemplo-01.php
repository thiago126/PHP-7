<?php 

abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal{

	public function falar(){
		return "Late";
	}

}
class Gato extends Animal{

	public function falar(){
		return "Mia";
	}

}

class Passaro extends Animal{

	public function falar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover();
	}
}

$rex = new Cachorro();
echo get_class($rex) . "</br>";
echo $rex->falar() . "</br>";
echo $rex->mover() . "</br>";
echo "-------------------------------</br>";

$bartolomagro = new Gato();
echo $bartolomagro->falar() . "</br>";
echo $bartolomagro->mover() . "</br>";
echo "-------------------------------</br>";

$picaPau = new Passaro();
echo $picaPau->falar() . "</br>";
echo $picaPau->mover() . "</br>";
echo "-------------------------------</br>";

?>