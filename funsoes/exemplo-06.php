<?php

$pessoa = array(
'nome' => 'Guilherme',
'idade'=> 18
);

foreach ($pessoa as  &$value) { // também posso usar o '&' no foreach, assim o valor da variável será alterado tanto fora como dentro da condição. 
	if (gettype($value) === 'integer') $value += 12;// se a variável $value receber um inteiro fazer $value + 12.
		
		echo $value. '<br>';
	
}
print_r($pessoa);

// colocar o "&" antes da variável signifca passagem de parametro por referência. A passagem de parametro por valor é quando se digita o conteúdo do parametro.

?>