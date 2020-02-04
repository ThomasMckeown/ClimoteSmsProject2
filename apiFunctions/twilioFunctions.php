<?php

use Twilio\Rest\Client;

require $_SERVER['DOCUMENT_ROOT'].'/ClimoteSmsProject/vendor/autoload.php';



if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'Boost For 1 Hour':
                twilio1();
                break;
            case 'Boost For 2 Hours':
                twilio2();
                break;
            case 'Boost For 3 Hours':
                twilio3();
                break;
            case 'Boost For 4 Hours':
                twilio4();
                break;
            case 'Boost For 5 Hours':
                twilio5();
                break;
            case 'Boost For 6 Hours':
                twilio6();
                break;
            case 'Boost For 7 Hours':
                twilio7();
                break;
            case 'Boost For 8 Hours':
                twilio8();
                break;
            case 'Boost For 9 Hours':
                twilio9();
                break;
            case 'Cancel Boost':
                cancel();
                break;
        }
    }
    



function twilio1(){
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'YOUR-ACCOUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 1 Hour'
    )
);
    
}

function twilio2(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 2 Hours'
    )
);
    
}

function twilio3(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 3 Hours'
    )
);
    
}


function twilio4(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 4 Hours'
    )
);
    
}


function twilio5(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 5 Hours'
    )
);
    
}



function twilio6(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 6 Hours'
    )
);
    
}



function twilio7(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 7 Hours'
    )
);
    
}


function twilio8(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 8 Hours'
    )
);
    
}



function twilio9(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Zone 1 Boosted For 9 Hours'
    )
);
    
}

function cancel(){

$account_sid = 'YUOR-ACCUNT-SID';
$auth_token = 'YOUR-AUTH-TOKEN';
$twilio_number = "TWILIO-PHONE-NUMBER";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    'YOUR-PHONE-NUMBER',
    array(
        'from' => $twilio_number,
        'body' => 'Boost Cancelled For Zone 1'
    )
);
    
}




?>