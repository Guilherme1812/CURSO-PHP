<?php

class Carro  {
	private $modelo;
	private $motor;
	private $ano;
	private $montadora;

	public function getModelo(){//"get" pegar o atributo.

		return $this ->modelo;
	}
	public function setModelo($modelo){//"set" mudar o valor do atributo.

		$this ->modelo = $modelo;//$this é a representação do objeto.

	}
	public function getMotor():float{//A variável criada dentro do metodo so existe dentro do metodo.

		return $this->motor;
	}
	public function setMotor($motor){//No lugar de "$motor" poderia ser qualquer outro nome.

		$this->motor = $motor;
	}
	public function getAno():int{

		return $this->ano;
	}
	public function setAno($ano){

		$this->ano = $ano;
	}
	public function getMontadora(){

		return $this->montadora;
	}
	public function setMontadora($montadora){

		$this->montadora = $montadora;
	}
	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno(),
			"montadora"=>$this->getMontadora()
		);
	}
}

$vectra = new Carro();
$vectra->setModelo("Vectra");
$vectra->setMotor("2.0");
$vectra->setAno("1997");
$vectra->setMontadora("General Motors (GM)");
var_dump($vectra->exibir());
?>