<?php

//resposta temporária

header ("Content-Type:application/json");

$data['status'] = 'SUCCESS';
$data['method'] = $_SERVER['REQUEST_METHOD'];


//apresentar as variáveis que vieram no pedido (GET ou POST)
echo json_encode($data);