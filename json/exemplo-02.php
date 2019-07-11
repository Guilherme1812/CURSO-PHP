<?php

$json = '[{"marca":"toiota","modelo":"corola","cor":"branco"},{"marca":"chevrolet","modelo":"vectra","cor":"preto"}]';

 $data = json_decode($json, true); //"json_decode" -->transforma o json formatado em array..

 var_dump($data);
?>