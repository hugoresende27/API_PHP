<?php

class api_class
{
    private $data;
    private $available_methods =['GET','POST'];

//////////////////////////////////////////////////////////////////////////////////////////////

    public function __construct()
    {
        $this->data = [];
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function check_method($method)
    {
        //check if method is valid
        return in_array($method, $this->available_methods);
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function set_method($method)
    {
        //sets the response method
        $this->data['method'] = $method;
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function api_request_error($msg='')
    {
        //output de um erro api
        $this->data['status'] = 'ERROR';
        $this->data['error_message'] = $msg;
        $this->send_response();
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function send_api_status()
    {
        //send api status
        $this->data['status'] = 'SUCCESS';
        $this->data['error_message'] = 'API is running ok';
        $this->send_response();
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    public function send_response()
    {
        //output final response
        header ("Content-Type:application/json");
        echo json_encode($this->data);
        die(1);
    }

}