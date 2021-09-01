<?php

if (isset($_POST['submit'])) {
    if (!isset($_POST['date'])) {
        $name = $_POST["fname"] . " " . $_POST['lname'];
        $sql = "INSERT INTO `appointment`( `email`, `tel`, `date`, `state`, `name`) VALUES ('$_POST[email]','$_POST[tel]','','0','$name')";
        $result = mysqli_query($conn, $sql);
    }

//server_data
    $MerchantID = "41883";
    $auth_token = "";
    $iframId = "113910";
    $api_key = "ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TkRFNE9ETXNJbTVoYldVaU9pSnBibWwwYVdGc0luMC53bGt0VENmczVic3BEeGZhYW8yQ0ZvNno0aG1IOXNLTHZvYXFTNXBRV3ctdVIxQllXLW5kVUFOMjZlaFFIbENrUDgyZDRZUmZEeXFRWFZNY1g4NU1Xdw==";
    $integrationIdCard = 112782;
    $integrationIdWallet = 112781;
    $integrationId = $_POST['submit'] == "wallet" ? $integrationIdWallet : $integrationIdCard;
    $order_id = "";
    $paymentToken = "";
//user Data
    $amount = $_POST['amount'] * 100;
    $useEmail = $_POST['email'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $mobile = $_POST['tel'];
    $paymentMethod = $_POST['submit'];

    /* $amount = 100 * 100;
      $useEmail = "a.showqy@gmail.com";
      $first_name ="Ahmed elenany";
      $mobile = "01279581637"; */
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
    "last_name": "' . $last_name . '", 
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
    $paymentToken = $objCardPaymentKey->token;
//******************************************************************

    if ($paymentMethod == "card") {
        $cardPayGet = 'https://accept.paymobsolutions.com/api/acceptance/iframes/' . $iframId . '?payment_token=' . $paymentToken;
        echo "<script> window.location.href='" . $cardPayGet . "' </script>";

        /* $curl = curl_init();
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
          echo $response; */
    } else if ($paymentMethod == "wallet") {
        $wallet_payment_key_post = '{
            "source": {
    "identifier": "' . $mobile . '", 
    "subtype": "WALLET"
  }, 
  "payment_token": "' . $paymentToken . '"
}';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://accept.paymobsolutions.com/api/acceptance/payments/pay',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $wallet_payment_key_post,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $objWalletPaymentKey = json_decode($response);
        $redirect = $objWalletPaymentKey->redirect;
        $iframe_redirection_url = $objWalletPaymentKey->iframe_redirection_url;
        if ($redirect != "") {
            echo "<script> window.location.href='" . $redirect . "' </script>";
        } else {
            echo "<script> window.location.href='" . $iframe_redirection_url . "' </script>";
        }
    }
}    