<?php

require_once "IzipayController.php";
require_once "keysToken.php";

$payment = new IzipayController();
$formToken = "";

if(isset($_GET["form-token"])){
 $formToken = $_GET["form-token"];
}else{
    http_response_code(500);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedded-PaymentForm-Php</title>
    <!-- Javascript library. Should be loaded in head section -->
  <script 
   src="<?= $payment->getEndpointApiRest() ?>/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
   kr-public-key="<?= $payment->getPublicKey() ?>" 
   kr-post-url-success="paid.php"
   >
  </script>
  <!-- theme and plugins. should be loaded after the javascript library -->
  <!-- not mandatory but helps to have a nice payment form out of the box -->
  <link rel="stylesheet" 
  href="<?= $payment->getEndpointApiRest() ?>/static/js/krypton-client/V4.0/ext/classic-reset.css">
 <script 
  src="<?= $payment->getEndpointApiRest() ?>/static/js/krypton-client/V4.0/ext/classic.js">
 </script> 
</head>
<body>
    <!-- payment form -->
    <div class="kr-embedded" kr-form-token="<?= $formToken ?>">

        <!-- payment form fields -->
        <div class="kr-pan"></div>
        <div class="kr-expiry"></div>
        <div class="kr-security-code"></div>  

        <!-- payment form submit button -->
        <button class="kr-payment-button" style="background-color: #00A09D;"></button>

        <!-- error zone -->
        <div class="kr-form-error"></div>
    </div>  
</body>
</html>