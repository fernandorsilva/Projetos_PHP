<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48; //pode ser visto em outras classes
	private $senha = "123456"; //apenas oq esta na classe será visivel

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

class Programador extends Pessoa {
	public function verDados(){
		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}


}

$objeto = new Programador();

//echo $objeto->senha . "<br/>";

$objeto->verDados();

 ?>