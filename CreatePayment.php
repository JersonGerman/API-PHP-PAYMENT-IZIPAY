<?php

header("Access-Control-Allow-Origin: *");
// header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

// header('Access-Control-Allow-Origin: *');
// header('content-type: application/json; charset=utf-8');



require_once  'IzipayController.php';
require_once  'keysToken.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $payment = new IzipayController();

    $postBody = file_get_contents("php://input");
    $request = json_decode($postBody, true);

    $datos = array(
        "amount" => 1000,
        "currency" => "USD",
        "customer" => array(
          "email"=>"example@gmail.com",
        ),
        "orderId" => uniqid("MyOrderId"),
      );
      
    $response = $payment->post("V4/Charge/CreatePayment",$datos);

    
      

    http_response_code(200);
    header("Content-Type: application/json");
    echo json_encode($response);

}else{
    http_response_code(404);
}