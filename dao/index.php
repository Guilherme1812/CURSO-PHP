<?php 

require_once("config.php");

/*$excliente = new Usuario();
$excliente->loadByID(57);
$excliente->delete();
echo $excliente;*/
//_____________________________________________________________________
//alterar um usuario.
$usuario = new Usuario();
$usuario->loadByID(58);
$usuario->update("Andressa", "19379173");
//_____________________________________________________________________
/*$aluno = new Usuario();
$aluno->setLogin("carlito");
$aluno->setSenha("12345");
$aluno->insert();

echo ($aluno);
*/
//____________________________________________________________________
//Consulta o usuario a partir do seu login e senha
//$consulta = new Usuario();
//$consulta->login("Lucas", "18122003");
//echo $consulta;
//____________________________________________________________________
//Seleciona todos os cadastros com x letras em x partes
//$busca = Usuario::Search('An');
//echo json_encode($busca);
//____________________________________________________________________
//seleciona todos os cadastros
//$lista = Usuario::getList();
//echo json_encode($lista);
//____________________________________________________________________
//Lista apenas 1 usuario
//$cliente = new Usuario();
//$cliente->loadByID(20);
//echo $cliente;
//____________________________________________________________________
//seleciona por ordem de data do cadastro
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios ORDER BY dataCadastro");

echo json_encode($usuarios);
*/



 ?>