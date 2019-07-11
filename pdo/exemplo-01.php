<?php 

$conexao = new pdo("mysql:dbname=php_7;host=localhost", "root","18122015");
$stmt = $conexao->prepare("SELECT * FROM usuarios ORDER BY login");
$stmt->execute();
$results = $stmt->fetchAll(pdo::FETCH_ASSOC);
foreach ($results as $row ) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>". $value. "<br/>";

	}
	echo "==========================================================<br/>";
}

 ?>