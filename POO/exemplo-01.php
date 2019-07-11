<?php
//O nome da class sempre começa com letra maiuscula e se tiver mais de um nome o próximo é colado e inicia també com letra maiuscula.
class Pessoa {
	public $nome;//atributo

	public function falar (){//metodo

		return "O meu nome é ".$this ->nome;// "$this->" é a representação do objeto, que no caso é o $nome.
//para fazer referência a variável $nome fora do metodo ela é chamada noemalmente... Já´para chama-la dentro de qualquer metodo usa-se o "$this->" depois vem o nome da variável sem o "$".

	}


}
$Guilherme = new Pessoa();// vai chamar a classe pessoa.
$Guilherme ->nome = "Guilherme Pereira";// $Guilherme vai referenciar o atributo nome que vai receber o meu nome.
echo $Guilherme->falar();// escreva na tela o meu nome + o que estiver no metodo "falar"	




?>