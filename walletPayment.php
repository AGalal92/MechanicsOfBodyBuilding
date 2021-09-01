<?php

//server_data
$MerchantID = "41883";
$auth_token = "";
$iframId = "113910";
$api_key = "ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TkRFNE9ETXNJbTVoYldVaU9pSnBibWwwYVdGc0luMC53bGt0VENmczVic3BEeGZhYW8yQ0ZvNno0aG1IOXNLTHZvYXFTNXBRV3ctdVIxQllXLW5kVUFOMjZlaFFIbENrUDgyZDRZUmZEeXFRWFZNY1g4NU1Xdw==";
$integrationId = 106185;
$order_id = "";
//user Data
$amount = $_POST['amount'] * 100;
$useEmail = $_POST['email'];
$first_name = $_POST['name'];
$mobile = $_POST['tel'];

/*$amount = 100 * 100;
$useEmail = "a.showqy@gmail.com";
$first_name ="Ahmed elenany";
$mobile = "01279581637";*/
//*****************************************************Get data from APIs*********************
$curl = curl_init();
$tokenAuthPost = '{"api_key": "' . $api_key . '"}';

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://accept.paymobsolutions.com/api/auth/tokens',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $tokenAuthPost,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$obj = json_decode($response);
$auth_token = $obj->token;
//echo $auth_token;
//*********************************************************************

$curl = curl_init();
$orderGetDataPost = '{
  "auth_token": "' . $auth_token . '",
  "delivery_needed": "false",
  "merchant_id": "' . $MerchantID . '",
  "amount_cents": "' . $amount . '",
  "currency": "EGP",
  "items": []
}';
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://accept.paymobsolutions.com/api/ecommerce/orders',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $orderGetDataPost,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$objOrderData = json_decode($response);
$order_id = $objOrderData->id;
//***************************************************************************

$card_payment_key_post = '{
  "auth_token": "' . $auth_token . '",
  "amount_cents": "' . $amount . '", 
  "expiration": 3600, 
  "order_id": "' . $order_id . '",
  "billing_data": {
    "apartment": "null", 
    "email": "' . $useEmail . '", 
    "floor": "null", 
    "first_name": "' . $first_name . '", 
    "street": "null", 
    "building": "null", 
    "phone_number": "' . $mobile . '", 
    "shipping_method": "null", 
    "postal_code": "null", 
    "city": "null", 
    "country": "null", 
    "last_name": "null", 
    "state": "null"
  }, 
  "currency": "EGP", 
  "integration_id": ' . $integrationId . ',
  "lock_order_when_paid": "false"
}';

 $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://accept.paymobsolutions.com/api/acceptance/payment_keys',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $card_payment_key_post,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
$objCardPaymentKey = json_decode($response);
$cardPaymentToken = $objCardPaymentKey->token;

//******************************************************************
$cardPayGet = 'https://accept.paymobsolutions.com/api/acceptance/iframes/' . $iframId . '?payment_token=' . $cardPaymentToken;
echo "<script> window.location.href='" . $cardPayGet . "' </script>";

/*$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL =>$cardPayGet ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;*/

