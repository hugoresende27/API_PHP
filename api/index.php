
<?php

//para testar no browser http://localhost/API_PHP/api/index.php?option=status


//prepare response

$data ['status']='ERROR';
$data ['data']=null;

//request
if (isset($_GET['option']))     //obrigatório var 'option' e 'status'
{
    switch($_GET['option'])
    {
        case 'status':
            define_response($data,'API running OK!!!!');
            // $data['status'] = 'SUCCESS';
            //$data['data']  = 'API running OK!';
            break;

        case 'random':
            define_response($data,rand(0,1000));        //devolve valor aleatório entre 0 e 1000
            break;

    }

}


//emitir a resposta da API
response($data);
//========================================================================================
// function success(&$data)
// {
//     $data['status'] = 'SUCCESS';
// }

function define_response(&$data,$value)
{
    $data['status']='SUCCESS';
    $data['data'] = $value;
}

//========================================================================================
//construção da response

function response($data_response)
{
    header("Content-Type:application/json");  //resposta em formato json
    echo json_encode($data_response);
}