<?php

$dt = new DateTime();

$tempoEntrega = new DateInterval("P25D");//25D-> número de dias que é para somar.

echo $dt ->format("d/m/Y H:i:s");// mostra a data no formato que foi pedido.

$dt ->add($tempoEntrega);// soma na variável $dt $tempo de entrega que foi de 25 dias.

echo "<br>";

echo $dt ->format("d/m/Y H:i:s");

//Progamação orientada a objeto é um estilo de progamação. O objeto é uma variável que representa ou tira uma cópia da classe. A esse processo damos o nome de instancia. "uma variável 'instancia' 'representa uma classe'."

?>