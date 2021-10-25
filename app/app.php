<?php

define ('API_BASE','http://localhost/API_PHP/api/?option=');  //define ('nome'.'valor');

//echo 'APP';
//echo API_BASE.'status';     //chamar o endpoint API_BASE e status

echo '<h3>APLICAÇÃO</h3><hr>';
$resultado = api_request('status');
$resultado = api_request('random');


for ($i=0;$i<10;$i++)
{
    $resultado = api_request('random');
    if ($resultado['status']=='ERROR')
    {
        die('Aconteceu um erro na minha chamada à API...');
    }
    echo "O valor randómico ".$resultado['data'].'<br>';
}
echo 'TERMINADO!';

//echo $resultado;        //{"status":"SUCCESS","data":"API running OK!"} ou {"status":"ERROR"} se api_request falhar
//=================================================================
//VERIFY IF RESPONSE IS OK (SUCCESS)


echo '<pre>';
print_r($resultado);
/*
Array
(
    [status] => SUCCESS
    [data] => API running OK!
)
*/
function api_request ($option)
{
    //RECURSO AO CURL
    $client = curl_init ( API_BASE . $option );
    curl_setopt( $client , CURLOPT_RETURNTRANSFER , true);       //true = vai devolver uma string
    $response = curl_exec($client);     //dentro de $response está o JSON
    //return $response;
    return json_decode($response, true);        //return da resposta em formato json e num array associativo
}