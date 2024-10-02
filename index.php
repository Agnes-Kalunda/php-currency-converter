<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// phpinfo();
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $from_currency = strtoupper($_POST['from_currency']);
    $to_currency = strtoupper($_POST['to_currency']);
    $amount = $_POST['amount'];



    $url = 'https://v6.exchangerate-api.com/v6/516264bab3ad70c6e67ea2e6/latest/USD';

    #init curl session
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    #response
    $response = curl_exec($ch);
    curl_close($ch);

    #json decode
    $data = json_decode($response, true);

    if ($data && $data['result'] == 'success') {
        $rate = $data['conversion_rates'][$to_currency];
        $converted_amount = $amount * $rate;
        echo "<p>$amount $from_currency = $converted_amount $to_currency</p>";
    } else {
        echo "<p>Conversion failed. Please check the currency codes and try again.</p>";
    }
}


?>