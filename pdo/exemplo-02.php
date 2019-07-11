<?php 

$con = new PDO("mysql:dbname=php_7;host=localhost", "root", "18122015");

$stmt = $con->prepare("INSERT INTO usuarios( login, senha ) VALUES(:LOGIN, :SENHA)");

$login = "Andressa";
$senha = "18122610";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

echo "Dados inseridos com secesso!";

 ?>