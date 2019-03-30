<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Fernando","idade":37}]';

$data = json_decode($json, true);

var_dump($data);

?>