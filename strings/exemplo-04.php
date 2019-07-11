<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";  // palavra a ser encontrada na frase.

$q = strpos($frase, $palavra); // ($q) --> quere, faz uma procura, (strpos) --> função para fazer a busca na frase, entre parenteses fica o que deve ser buscado na frase.

//var_dump($q);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo"<br>";

var_dump($texto2);
//_______________________________________________________________________________________________


$frase2 = "Eu gosto de jogar futebol porém machuquei o joelho";

$palavra2 = "futebol";

$q = strpos($frase2, $palavra2);

echo "<br>";

//var_dump($q);

$fraseAntes = substr($frase2, 0, $q);

var_dump($fraseAntes);

echo "<br>";

$frasedepois = substr($frase2, $q + strlen ($palavra2), strlen($frase2));

var_dump($frasedepois);

//____________________________________________________________________________________________________________


$frase3 = "Fim de semana é dia de ver mohzão";

$buscarPalavra = "é";

$q = strpos($frase3, "é");

echo "<br>";
echo"_______________________________________"; 

echo "<br>";

//var_dump($q);

$antes = substr($frase3, 0, $q);

var_dump($antes);

echo "<br1>";

$depois = substr($frase3, $q + strlen($buscarPalavra), strlen ($frase3));

echo "<br>";

var_dump($depois);

echo "<br>";

echo "$antes, " . " " . "$depois"; //concatenação das duas variáveis juntando a frase novamente.




?>