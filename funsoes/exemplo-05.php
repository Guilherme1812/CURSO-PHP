<?php
// "&" antes do parametro -> passagem de parametro por referencia.ou seja, o que acontece na função muda o valor na variável.

$a =30;

function mudaValor(&$b){ //ao colocar o "&" o valor da variável fora da função recebe o mesmo valor da variável dentro da função.

    $b += 70; // qualquer seja o sinal (+,-,/,*) o resultado será feito a partir de $a e $b.

    return $b;

}
echo mudaValor ($a); // Se colocar apenas "echo", o valor mostrado será da variável $a, para que troque para o valor de b é preciso chamar a função.
echo "<br>";
echo $a; // o valor de $a fora da função será o mesmo valor da variável inicial.(O VALOR SÓ É ALTERADO CASO COLOQUE O "&" ANTES DA VARIÁVEL DENTRO DA FUNÇÃO.  )



?>