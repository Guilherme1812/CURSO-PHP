<?php

require_once ("config.php");

session_unset($_SESSION['nome']); // vai apagar a variavel nome da sessão do exemplo 02

echo $_SESSION['nome']; // escreve na tela o conteúdo da sessao.

// Session_unset limpa a variavel naquela determinada sessão, ja o session_destroy é com se te expulsasse do site, ele limpa a variável e remove o usuário.
session_destroy();





 ?>