<?php

// dependencies

require_once('inc/config.php');
require_once('inc/api_functions.php');

$variables=[
    'nome' => 'Hugo',
    'apelido'=>'Resende'
];;
api_request('status' , 'GET' , $variables );//http://localhost/API_PHP/api/?endpoint=status&nome=Hugo&apelido=Resende

