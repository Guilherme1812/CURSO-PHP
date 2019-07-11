<?php 

abstract class Animal {

	public function Falar(){
		
		return"Som";

	}
	public function Mover(){

		return "Anda";
	}
}

class Cachorro extends Animal{

	public function Falar(){

		return "Late";
		}
}
class Gato extends Animal {
	public function Falar(){
		return "Mia";
	}
}
class Passaro extends Animal{
	public function Falar(){
		return "Canta";
	}
	public function Mover(){
		return "Voa e ". parent::Mover();
	}
}
$pluto = new Cachorro();

echo $pluto->Falar(). "<br/>";
echo $pluto->Mover(). "<br/>";	
echo "__________________________________<br/></br/>";

$Apolo = new Gato();

echo $Apolo->Falar(). "<br/>";
echo $Apolo->Mover(). "<br/>";	
echo "__________________________________<br/></br/>";

$loro = new Passaro();

echo $loro->Falar(). "<br/>";
echo $loro->Mover(). "<br/>";	

 ?>