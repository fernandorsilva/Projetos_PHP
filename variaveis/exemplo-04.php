<?php

$nome = (int)$_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //Pega informações do ip do servidor de onde vem o acesso do usuario//

//SCRIPT_NAME Pega o local de acesso


echo $ip;

?>