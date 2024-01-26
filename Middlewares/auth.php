<?php

    include_once ( __DIR__ . "/../Services/auth.php");
    
    
    function Login(){
        
        $method = $_SERVER['REQUEST_METHOD'];
        $data = file_get_contents("php://input");
        $data =  get_object_vars( json_decode($data) ) ;
        $uri = $_SERVER['REQUEST_URI'];
        $url_arr = explode('/',$uri);
        
        
        if ($method == "POST") {
            // echo $data['email']; die;
            
            // if ( isset($url_arr[2] ) ){
                if ($url_arr[1] == "login") {
                    $service = new AuthService;
                    $service->Login($data['email'], $data['password']);
                }
            // }
        
        }

    }


    


?>