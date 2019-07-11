<?php

$diaDaSemana = date("w"); // "date("w")" -->mostra o dia exato em que estamos.

switch ($diaDaSemana){

     case 0:
       echo "Dimingo"; //cada switch tem seu break, caso esqueça e colocar o break, vai executar o próximo case como parte do anterior.
     break;

     case 1:
       echo "Segunda-feira";	
     break;
     case 2:
       echo "Terça-feira";
     break;
     case 3:
       echo "Quarta-feira";
     break;
     case 4:
       echo "Quinta-feira";
     break;
     case 5:
       echo "Sexta-feira";
     break;
     case 6:
       echo "Sábado";
     break;

default:
echo "data inválida!,Valores válidos apenas de 0 a 6!";
break;










}
















?>