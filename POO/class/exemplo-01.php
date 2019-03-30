<?php 

class Pessoa {

	public $nome;//Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;

	}

}

$fernando = new Pessoa();
$fernando->nome = "Fernando Ribeiro";
echo $fernando->falar();

 ?>