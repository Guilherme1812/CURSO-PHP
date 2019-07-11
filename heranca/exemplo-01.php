<?php 

class Documento {

	private $numero;

	public function getNumero()
	{
		return $this->numero;
	}

	public function setNumero($n)
	{
		$this->numero = $n;
	}

}

class Cpf extends Documento
{
	public function validar()
	{
		$numero = $this-> getNumero();
		//Aqui vai a validação do cpf.
		return true;
	}
}
$doc = new Cpf();

$doc->setNumero("151254478-12");
$doc->validar();
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero();



 ?>