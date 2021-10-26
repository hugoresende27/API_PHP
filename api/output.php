<?php


///////////  FUNTIONS FOR ENDPOINTS ///////////////////////////

//========================================================================================
// function success(&$data)
// {
//     $data['status'] = 'SUCCESS';
// }

//===========================================================================================
function api_status(&$data)
{
    define_response($data,'API OK');
}

//===========================================================================================
function api_random(&$data)
{
    $min = 0;
    $max = 1000;
    /*
    verifica se vem o minimo ou o maximo no GET
    */
    if (isset($_GET['min'])){
        $min=intval( $_GET['min']);
    }                                   //intval vai gerar um numero int, evitando o erro da api no caso de min e max não virem no formato inteiro
    if (isset($_GET['max'])){
        $max= intval($_GET['max']);     
    }

    if ($min>=$max)
    {
        response($data);
        return;
    }
    define_response($data,rand($min,$max));        //devolve valor aleatório entre 0 e 1000
}

function api_hash(&$data)
{
    define_response($data,md5(sha1(uniqid())));
}

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

?>