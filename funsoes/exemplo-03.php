<?php

function ola ($texto = "mundo", $cumprimento ){// se um parametro estiver definido e o outro não, eu sou obrigado a nomear entre parenteses.

	return "olá $texto! $cumprimento <br>";

}
//no caso do primeiro parametro estar definido e o segundo não, tem-se que deixar aspas vasias (dizendo que aquilo é do primeiro parametro) e depois indicar o que será do parametro dois.
echo ola("", "Bom dia");// caso não declare o texto entre parenteses o texto que estão no parametro é que vai aparecer 
echo ola("Guilherme", "Boa tarde");
echo ola("Andressa", "Boa noite");
?>