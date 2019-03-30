<?php

//include "inc/exemplo-01.php"; aconselhavel usar com include.path, mapeando a pasta dos arquivos.

require_once "inc/exemplo-01.php"; // Obriga a existencia do arquivo

require_once "inc/exemplo-01.php"; // require_once tras o arquivo uma unica vez, para evitar que numca segunda chama acidental, não ocorra erro.

$resultado = somar(10, 25);

echo $resultado;

?>