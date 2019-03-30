<?php 
date_default_timezone_set("America/Sao_Paulo");

//$ts = strtotime("1982-01-17");
$ts = strtotime("+5 day"); //Interpreta expressoes, usado para prazos de entregas por exemplo, entrega em 24 days (+ 24 days)

echo date("l, d/m/Y", $ts);

 ?>