<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "";*/

//Na linha de baixo temos uma variável com número no nome
$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

// Comando isset faz a validação para exibir a variável apenas se tiver dados
if (isset($nome1)) {
	echo $nome1;
}

?>