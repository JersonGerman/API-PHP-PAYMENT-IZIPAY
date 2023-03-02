<?php

header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    

    
    http_response_code(200);
    echo "";
}else{
    http_response_code(404);
}