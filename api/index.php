<?php
// dependencies

require_once(dirname(__FILE__) . '\inc\config.php');
require_once(dirname(__FILE__) . '\inc\api_class.php');

//instanciar a api_class
$api = new api_class();

$api -> send_api_status();
//check method
// if ($api->check_method($_SERVER['REQUEST_METHOD']))
// {
//     $api->api_request_error("Aconteceu um erro na api");
// }



//////////////////////////////////////////////////////////////////////////////////////////////
// //resposta temporária

// header ("Content-Type:application/json");

// $data['status'] = 'SUCCESS';
// $data['method'] = $_SERVER['REQUEST_METHOD'];


// //apresentar as variáveis que vieram no pedido (GET ou POST
// if ($data['method'] == 'GET')
// {
//     $data['data'] = $_GET;
// }
// else if ($data['method'] == 'POST')
// {
//     $data['data'] = $_POST;
// };

// echo json_encode($data);