<?php

    header("Access-Control-Allow-Origin: * ");
    header("Access-Control-Allow-Headers: * ");
    header("Content-type: aplication/json");

    require_once 'Services/auth.php';
    require_once 'Middlewares/auth.php';


    Login();

    die;

    // echo json_encode(["message" => "succesfull "]);

    // include_once "Routes/index.route.php";









