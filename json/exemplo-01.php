<?php

$carros = array ();
array_push($carros, array( // "array_push" --> adiciona um array a outro
 'marca'=> 'toiota',
 'modelo'=> 'corola',
 'cor' => 'branco'
));

array_push($carros, array(
 'marca'=> 'chevrolet',
 'modelo'=> 'vectra',
 'cor' => 'preto'
));
echo json_encode($carros); //"json_encode"--> transforma o array em json.

?>