<?php 

function ola($texto = "Mundo", $periodo = "Bom dia!"){

	return "Olá $texto! $periodo<br>";


};

echo ola();
echo ola("", "Boa noite!");
echo ola("Fernando", "Boa tarde");
echo ola("Daiane", "");

 ?>