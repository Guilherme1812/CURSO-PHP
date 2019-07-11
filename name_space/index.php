<?php 

require_once("config.php");

use Cliente\Cadastro;
$cad = new Cadastro();

$cad->setNome("Guilherme Pereira");
$cad->setEmail("gui.dessa@gmail.com");
$cad->setSenha("Guilherme123");
$cad->RegistrarVenda();

 ?>