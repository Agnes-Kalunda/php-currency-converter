<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $from_currency = strtoupper($_POST['from_currency']);
    $to_currency = strtoupper($_POST['to_currency']);
    $amount = $_POST['amount'];


    $apikey = 'https://v6.exchangerate-api.com/v6/516264bab3ad70c6e67ea2e6/latest/USD';

    #init curl session
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


}



?>