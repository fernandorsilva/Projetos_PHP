<?php 

	function soma(float ...$valores):float {

		return array_sum($valores);

	}

echo var_dump(soma(2, 2, 1));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2); // declarado como inteiro, nao considera virgulas
echo "<br>";

 ?>