<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];
    $amount = $_POST['amount'];
}

?>