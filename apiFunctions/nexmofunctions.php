<?php

require $_SERVER['DOCUMENT_ROOT'].'/ClimoteSmsProject/vendor/autoload.php';

if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'Boost For 1 Hour':
                nexmo1();
                break;
            case 'Boost For 2 Hours':
                nexmo2();
                break;
            case 'Boost For 3 Hours':
                nexmo3();
                break;
            case 'Boost For 4 Hours':
                nexmo4();
                break;
            case 'Boost For 5 Hours':
                nexmo5();
                break;
            case 'Boost For 6 Hours':
                nexmo6();
                break;
            case 'Boost For 7 Hours':
                nexmo7();
                break;
            case 'Boost For 8 Hours':
                nexmo8();
                break;
            case 'Boost For 9 Hours':
                nexmo9();
                break;
            case 'Cancel Boost':
                cancel();
                break;
        }
    }



function nexmo1(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 1 Hour'
]);
//works without this bit but this is some try catch (useful to have)
//try {
//    $message = $client->message()->send([
//        'to' => YOUR-PHONE-NUMBER,
//        'from' => 'Acme Inc',
//        'text' => 'A text message sent using the Nexmo SMS API'
//    ]);
//    $response = $message->getResponseData();
//
//    if($response['messages'][0]['status'] == 0) {
//        echo "The message was sent successfully\n";
//    } else {
//        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
//    }
//} catch (Exception $e) {
//    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
//}
}

function nexmo2(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 2 Hours'
]);
}

function nexmo3(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 3 Hours'
]);
}


function nexmo4(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 4 Hours'
]);
}


function nexmo5(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 5 Hours'
]);
}


function nexmo6(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 6 Hours'
]);
}


function nexmo7(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 7 Hours'
]);
}


function nexmo8(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 8 Hours'
]);
}


function nexmo9(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Zone 1 Boosted For 9 Hours'
]);
}

function cancel(){
$basic  = new \Nexmo\Client\Credentials\Basic('YOUR-API-KEY', 'YOUR-SECRET');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => 'YOUR-PHONE-NUMBER',
    'from' => 'Nexmo',
    'text' => 'Boost Cancelled For Zone 1'
]);
}




?>