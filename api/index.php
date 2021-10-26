
<?php

//para testar no browser http://localhost/API_PHP/api/index.php?option=status

//importar output.php
require_once('output.php');

//prepare response

$data ['status'] = 'ERROR';
$data ['data'] = [];

//request
//API routes
if (isset($_GET['option']))     //obrigatório var 'option' e 'status'
{
    switch($_GET['option'])
    {
        case 'status':
            api_status($data);
            //define_response($data,'API OK');
            // $data['status'] = 'SUCCESS';
            //$data['data']  = 'API running OK!';
            break;

        case 'random':
            api_random($data);
            break;

        case 'hash':
            api_hash($data);
            break;

    }

}


//emitir a resposta da API
response($data);
