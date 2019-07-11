<?php

function soma (float/*int*/ ...$valores){ // float ou int determina os tipos numéricos que a função vai processar

	return array_sum($valores); // "array_sum" vai somar todos os valores dados.
}

echo soma (2, 8);
echo "<br>";
echo soma (4, 15);
echo "<br>";
echo soma (40, 60);
echo "<br>";
echo soma (2.3, 8.5);
echo "<br>";

?>