<form>
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK"> 
</form>
<?php
if (isset($_GET)) {// isset saber se a variável foi predefinida.

    foreach ($_GET as $key => $value) {//_GET array super global
		echo "nome do campo: ". $key.  "<br>"; //key será todos os campos do formulário, como: nome, nascimento.
		echo "valor do campo: ". $value;
		echo "<hr>";
	}
}
?>

