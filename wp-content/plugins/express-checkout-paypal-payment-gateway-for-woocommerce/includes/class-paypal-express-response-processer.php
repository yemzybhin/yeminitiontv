<?php
if (!defined('ABSPATH')) {
    exit;
}
class Eh_PE_Process_Response
{
    public function process_response($response)
    {
        if(isset($response->errors['http_request_failed']))
        {
            $this->response = $response->errors;
        }else if(isset($response->errors['http_failure']))
        {
            $this->response = $response->errors;
        } else
        {
            $this->response = $this->parse_response($response);
        }
        return $this->response;
    }
    public function parse_response($response)
    {
        $parsed_response='';
        if (is_wp_error($response))
        {
            return;
        }
        parse_str($response['body'], $parsed_response);
        return $parsed_response;
    }
}
