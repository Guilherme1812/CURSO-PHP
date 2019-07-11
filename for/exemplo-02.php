<?php
echo "Qual sua data de nascimento?";
echo "<br>";

echo "<select>";

for ($dia = 1; $dia <=30; $dia++){

echo '<option value="'.$dia.'">'.$dia.'</option>';


}
echo "</select>";
echo "<select>";

for ($mes = 1; $mes <=12; $mes++){

echo '<option value="'.$mes.'">'.$mes.'</option>';


}
echo "</select>";


echo "<select>";

for ($i= date("Y"); $i >= date("Y")-100 ; $i--) { //para $i = date ("Y"); ->Y igual ao ano atual. enquanto $i for maior ou igaul ao ano atual menos 100 $i será o ano atual menos 1 ano. 

	echo '<option value="'.$i.'">'.$i.'</option>';
	
}

echo "</select>";




















 ?>
