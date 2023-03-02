<?php

header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

// header('Access-Control-Allow-Origin: *');
// header('content-type: application/json; charset=utf-8');



require_once  'payment.php';
require_once  'keys.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    date_default_timezone_set("UTC");
    $payment = new PaymentModel();

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $response = $payment->createPayment($request);

    
    http_response_code(200);
    header("Content-Type: application/json");
    echo ($response);
}else{
    http_response_code(404);
}