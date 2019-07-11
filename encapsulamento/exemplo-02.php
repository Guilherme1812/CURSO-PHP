<?php 

class Pessoa{

	public $nome = "Rasmus Ledorf";//PUBLIC -- todo mundo vê
	protected $idade = 41;//PROTECTED -- mesma classe e classes estendidas
	private $senha = "123456789";//PRIVATE só a mesma classe

	public function verDados(){

		echo $this->nome. " <br/>";
		echo $this->idade. " <br/>";
		echo $this->senha. " <br/>";
	}

}
class Programador extends Pessoa{

	public function verDados(){
		echo get_class($this). "<br/>";//mostra que o que vai ser exibido na tela realmente está vindo da classe Programador.

		echo $this->nome. " <br/>";
		echo $this->idade. " <br/>";
		echo $this->senha. " <br/>";
	}

}

$objeto = new Programador();
//echo $objeto->nome. " <br/>";
$objeto->verDados();
 ?>