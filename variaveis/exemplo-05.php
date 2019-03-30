<?php

$nome = "Fernando";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {

	$nome = "<br>João, ";

	echo $nome." agora no teste2.";

}

teste();

teste2();
?>