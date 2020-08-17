<?php

use Illuminate\Support\Facades\Route;

if(!function_exists('get_current_path')) {
    function get_current_path()
    {
        $current = Route::getFacadeRoot()->current();
        $uri = $current->uri();
        foreach ($current->parameters() as $key => $param) {
            $uri = str_replace('{' . $key . '}', $param, $uri);
        }

        return $uri;
    }
}

if(!function_exists('get_first_path')) {
    function get_first_path()
    {
        $current = Route::getFacadeRoot()->current();
        $uri = $current->uri();

        $uris = explode('/', $uri );    
        return !empty($uris[0])? $uris[0]: '/'; 
    }
}