<?php
//toda função começa com "function" depois vem o nome da função abre e fecha parenteses, abre chaves (onde fica o que a função vai fazer).
function ola(){

    //echo "olá mundo, estou aprendendo PHP. <br>"; 

	return "olá mundo, estou aprendendo PHP. <br>"; // quando usar o return, sempre colocar o "echo" antes do nome da função, caso contrário não mostrará na tela
}

echo ola();
$frase = ola();
 echo strlen($frase); // strlen--> mostra quantos caracteres tem na variável.
