<?php 

$con = new PDO("mysql:dbname=php_7;host=localhost", "root", "18122015");

$stmt = $con->prepare("UPDATE usuarios SET login = :LOGIN, senha = :SENHA WHERE idCliente = :ID");

$login = "Angélica";
$senha = "21072007";
$idCliente = 20;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $idCliente);
$stmt->execute();

echo "Dados alterados com secesso!<br/>";

 ?>