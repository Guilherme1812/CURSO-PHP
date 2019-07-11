<?php
//tipos básicos de variaveis
$nome ="guilherme";
$site ='globo.com.br';

$ano = 1998;
$salario = 4500.99;
$bloqueado = false;
//__________________________________________

//tipos compostos

$pessoas = array("Lucas","Angela","Andressa","Angélica","Tiago");

echo $pessoas [4];

echo "<br>";
//colchetes acima indicam a posição do nome 

$nascimento = new datetime();

//sempre que ver (new) no codigo, é porque tem orientação a objetos.
//______________________________________________________________________
$arquivo = fopen("exemplo-01.php", "r");

//var_dump($arquivo);
echo "<br>";
$nulo = NULL;
$vasio = "";
//null é completamente diferente de "", pois null não vai reservar espaço na memoria, já o "" vai deixar um espaço reservado a espera de algum dado.

$itens  = array("bola", "gol","chuteira", "cartão","meião","camisa" );

echo $itens [2];

echo "<br>";
///////////////////////////////////////concatenação

echo $pessoas [2] ." "."tem um" ." ". $itens [3]. " "."do mais futuro";
echo "<br>";



?>