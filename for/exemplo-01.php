<?php

for ($i = 0; $i <=1000; $i+=10){ //(++) valor somado mais 1./ +=5/ +=10.. valor soma de 5 em 5/ 10 em 10...você determina o valor qe você quer que some.

if ($i > 100 && $i <850) continue;//se $i for maior que 100 e $i menor que 850 conmtinue. ou seja, ao chegar no 100 vai pular os valores e retornar quando chegar ao 850.

if($i === 930) break;// se $i for igual a 930 fim da contagem..
	echo $i . "<br>";


}

echo "chegamos ao fim da contagem!";














?>