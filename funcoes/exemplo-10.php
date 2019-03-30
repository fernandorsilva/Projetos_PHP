<?php 


//Função anonima, não precisa do return

function test($callback){

	//Processo lento

	$callback();

}


test(function(){

	echo "Terminou!";

});


 ?>