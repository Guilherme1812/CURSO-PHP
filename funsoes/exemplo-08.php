<?php

function soma (float/*int*/ ...$valores):float{ // float ou int determina os tipos numéricos que a função vai processar/"string" - quer dizer que quero que retorne string.

	return array_sum($valores); // "array_sum" vai somar todos os valores dados.
}

echo var_dump( soma  (2, 8));
echo "<br>";
echo var_dump( soma (4, 15));
echo "<br>";
echo var_dump( soma  (40, 60));
echo "<br>";
echo var_dump( soma (2.3, 8.5));
echo "<br>";

?>