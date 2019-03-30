<?php 

$a = 10;

// Ao usar o & altera-se o valor da variavel.
function trocaValor(&$b){
 
	$b += 50;

	return $b;


}

echo trocaValor($a);
echo"<br>";
echo trocaValor($a);
echo"<br>";
echo $a;

 ?>
