<?php 

$conexao = new mysqli("localhost", "root", "18122015", "php_7");//Aqui faz a conexão com o banco de dados.

	if($conexao->connect_error){//Aqui verifica se ocorreu algun erro.
		echo "ERRO DE CONEXÃO". $conexao->conncet_error;//Aqui mostra o erro ocorrido.
	}

/*$result = $conexao->query("SELECT * FROM usuarios ORDER BY login");

$dados = array();
while ($row = $result-> fetch_assoc()){//Enquanto olhar no banco e tiver resultado, traga e armazene em "row"

	Array_push($dados,$row);
}

echo json_encode($dados);
*/
 ?>	

