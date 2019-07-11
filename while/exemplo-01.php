<?php 
/*$condicao= true;

while ($condicao){
	
    $numero = rand(1, 10); // rand faz tipo um sorteio entre os números que você ecolheu.
    
   if ($numero === 3){ // Se o número sorteado pelo rand for igual a 3 pare a execução.
   	   
   	   echo "TRÊS!!!";
       
       $condicao = false;  //ao sortear o número três a condição passa a ser falsa. 	

    }
echo $numero. " ";
}

*/
$teste = true;

while ($teste) {
	$numero = rand(5, 30);

	if ($numero === 6) {
		echo "Achei seu numero!";
		$teste = false;
	}
 echo $numero. " ";
}



 ?>