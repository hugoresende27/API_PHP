
<?php

//para testar no browser http://localhost/API_PHP/api/index.php?option=status

$data = [];

//request
if (isset($_GET['option']))     //obrigatório var 'option' e 'status'
{
    switch($_GET['option'])
    {
        case 'status':
            $data['status'] = 'SUCCESS';
            $data['data']  = 'API running OK!';
            break;

        default :
            $data['status'] = 'ERROR';
            break;
    }

}
else
{
    $data['status'] = 'ERROR';
}

//emitir a resposta da API
response($data);

//construção da response

function response($data_response)
{
    header("Content-Type:application/json");  //resposta em formato json
    echo json_encode($data_response);
}