<?php 

$conexao = new mysqli("localhost", "root", "18122015", "php_7");
if ($conexao->connect_error) {
	echo "erro de conexão ". $conexao->connect_error;
}
$enviar = $conexao->prepare("INSERT INTO usuarios (login, senha) VALUES (?,?)");
$enviar->bind_param("ss", $login, $password);
$login = "Guilherme";
$password = "12345678";
$enviar->execute();
$login = "gui";
$password = "abcd";
$enviar->execute();


 ?>