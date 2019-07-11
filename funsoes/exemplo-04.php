<?php

function ola (){

	$argumentos=func_get_args(); // vai recuperar e mostrar como arrays todos os argumentos que forem passados nos parametros.

	return $argumentos;

}

 var_dump (ola("Bom dia!")); // desse modo exige um "var_dump" para que não dê erro no código.
 
//VARIÁVEL É UMA COISA, PARAMWETRO DE FUNÇÃO É OUTRA (mesmo que a variável esteja igual(ortografia)ao parametro eles são totalmente diferentes.)

 ?>

