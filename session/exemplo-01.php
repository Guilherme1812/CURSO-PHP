<?php 

require_once ("config.php");//chama o codigo que está no arquivo entre parenteses
// session é como se fosse um array super global
$_SESSION["nome"] = "Hcode"; // usar os colchetes para criar uma chave para guardar algum valor

echo "Sessão iniciada com sucesso!";

 ?>