<?php

session_id('vmf7ppvjueujfaqa83vbqntbq2');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>