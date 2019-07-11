<?php 

$con = new PDO("mysql:dbname=php_7;host=localhost", "root", "18122015");
$con->beginTransaction();// inicia a transação 
$stmt = $con->prepare("DELETE FROM usuarios WHERE idCliente = ? ");

$id = 14;

$stmt->execute(array($id));
//$con->rollback(); cancela a ação a ser executada.
$con->commit();// confirma a exclusão dos dados.
echo "Dados excluídos com secesso!";

 ?>