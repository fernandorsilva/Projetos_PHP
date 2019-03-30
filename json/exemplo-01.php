<?php

$pessoas = array();

array_push($pessoas, array(
		'nome'=>'João',
		'idade'=>20
));

array_push($pessoas, array(
		'nome'=>'Fernando',
		'idade'=>37
));


echo json_encode($pessoas);


?>