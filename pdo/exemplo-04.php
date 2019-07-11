<?php 

$con = new PDO("mysql:dbname=php_7;host=localhost", "root", "18122015");

$stmt = $con->prepare("DELETE FROM usuarios WHERE idCliente = :ID");

$idCliente = 17;


$stmt->bindParam(":ID", $idCliente);
$stmt->execute();

echo "Dados excluídos com secesso!";

 ?>