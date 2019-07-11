<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;
	private $estado;

	public function __construct($a, $b, $c, $d){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
		$this->estado = $d;

	}
	/*public function __destruct(){

		var_dump("DESTRUIR");
	}*/
	public function __toString(){
		return $this->logradouro." , ".$this->numero." , ".$this->cidade." - ".$this->estado;
	}
}
$meuEndereco = new Endereco ("fazenda Brôco", "15", "Ibiassucê", "Bahia");

//var_dump($meuEndereco);

//unset($meuEndereco);
 echo ($meuEndereco);
 ?>