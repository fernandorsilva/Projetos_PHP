<?php 
//Pega o horario e data especifico, pois o programa pode estar em outro local
date_default_timezone_set("America/Sao_Paulo"); 

			   //Linux  Linux com ascentos Windows
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo "Hoje é " . ucwords(strftime("%A %B"));

 ?>