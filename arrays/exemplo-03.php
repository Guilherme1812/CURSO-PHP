<?php

/*$pessoas = array();

array_push($pessoas, array(
   'nome'=>'Guilherme',
   'idade'=>18
));

array_push($pessoas, array(
   'nome'=>'Andressa',
   'idade'=>17
));

print_r($pessoas[0] ['nome']);
  


*/
//array bidimencional- um array dentro de outro array

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
echo json_encode($carros);
//print_r($carros[1]['cor']);
?>