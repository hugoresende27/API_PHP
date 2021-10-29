<?php

// dependencies

require_once('inc/config.php');
require_once('inc/api_functions.php');

$variables=[
    'nome' => 'Hugo',
    'apelido'=>'Resende'
];;

//request//////////////////////////////////////////////////////////////////////////////////////////////
$results = api_request('status' , 'GET' , $variables );//http://localhost/API_PHP/api/?endpoint=status&nome=Hugo&apelido=Resende
echo '<pre>';
print_r($results);
/*
Array
(
    [status] => SUCCESS
    [method] => GET
    [data] => Array
        (
            [endpoint] => status
            [nome] => Hugo
            [apelido] => Resende
        )

)*/
//request//////////////////////////////////////////////////////////////////////////////////////////////
$results = api_request('status' , 'POST' , $variables );
echo '<pre>';
print_r($results);
/*
Array
(
    [status] => SUCCESS
    [method] => POST
    [data] => Array
        (
            [endpoint] => status
            [nome] => Hugo
            [apelido] => Resende
        )

)*/
//request//////////////////////////////////////////////////////////////////////////////////////////////
$results = api_request('status' , 'GET');
echo '<pre>';
print_r($results);
/*
Array
(
    [status] => SUCCESS
    [error_message] => API is running ok
)
Array
(
    [status] => SUCCESS
    [error_message] => API is running ok
)
Array
(
    [status] => SUCCESS
    [error_message] => API is running ok
)
*/