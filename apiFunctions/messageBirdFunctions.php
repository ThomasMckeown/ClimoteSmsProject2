<?php
//used for the composer - composer gets the lastest version of the SW required to the below code work 
require $_SERVER['DOCUMENT_ROOT'].'/ClimoteSmsProject/vendor/autoload.php';

//the input you pressed will go here and the value will be compared with the different cases here
//when the correct one is found it will go to that function and do what is in it.
//e.g if Boost For 1 Hour was pressed on the previous page it would go to the first case and then
//go to messageBird1();
        if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'Boost For 1 Hour':
                messageBird1();
                break;
            case 'Boost For 2 Hours':
                messageBird2();
                break;
            case 'Boost For 3 Hours':
                messageBird3();
                break;
            case 'Boost For 4 Hours':
                messageBird4();
                break;
            case 'Boost For 5 Hours':
                messageBird5();
                break;
            case 'Boost For 6 Hours':
                messageBird6();
                break;
            case 'Boost For 7 Hours':
                messageBird7();
                break;
            case 'Boost For 8 Hours':
                messageBird8();
                break;
            case 'Boost For 9 Hours':
                messageBird9();
                break;
            case 'Cancel Boost':
                cancel();
                break;
        }
    }

    
    
function messageBird1()
{//this is the api key required to make this work
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    //next few lines are building the message that will be sent
    $Message = new \MessageBird\Objects\Message();  
    //telling it who is sending the message
    $Message->originator = 'MessageBird';
    //giving the phone number of the person who is recieving the number
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    //message that will be sent to the phone number above
    $Message->body = 'Zone 1 Boosted For 1 Hour';

    $MessageBird->messages->create($Message);
}

function messageBird2()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 2 Hours';

    $MessageBird->messages->create($Message);
}


function messageBird3()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 3 Hours';

    $MessageBird->messages->create($Message);
}

function messageBird4()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 4 Hours';

    $MessageBird->messages->create($Message);
}


function messageBird5()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 5 Hours';

    $MessageBird->messages->create($Message);
}


function messageBird6()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 6 Hours';

    $MessageBird->messages->create($Message);
}



function messageBird7()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 7 Hours';

    $MessageBird->messages->create($Message);
}


function messageBird8()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 8 Hours';

    $MessageBird->messages->create($Message);
}


function messageBird9()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Zone 1 Boosted For 9 Hours';

    $MessageBird->messages->create($Message);
}

function cancel()
{
    $MessageBird = new \MessageBird\Client('YOUR-API-KEY');
    $Message = new \MessageBird\Objects\Message();  
    $Message->originator = 'MessageBird';
    $Message->recipients = array(YOUR-PHONE-NUMBER);
    $Message->body = 'Boost Cancelled For Zone 2';

    $MessageBird->messages->create($Message);
}



?>