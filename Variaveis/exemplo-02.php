<?php
/* (comenta mais de uma linha)
$anoNascimento = 1985;


$nomeCompleto = "";
*/
//(comenta apemas uma unica linha)

//variaveis com nome e número, o número só pode ser colocado no meio ou no fim do nome da variavel.
$nome1 = "joao";

$sobrenome = "Pedro";

$nomeCompleto = $nome1 . " " . $sobrenome;
//as aspas acima serve para dar espaço entre o nome e o sobrenome.

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1))  {

	echo "$nome1";
}

?>