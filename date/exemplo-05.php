<?php 

date_default_timezone_set("America/Sao_Paulo"); 

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo "Sua compra foi realizada em: " . $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo"<br>";

echo "Seu produto será entregue até: " . $dt->format("d/m/Y H:i:s");


 ?>