        <?php
//          require __DIR__ . "/vendor/autoload.php";
        require $_SERVER['DOCUMENT_ROOT'].'/ClimoteSmsProject/vendor/autoload.php';
  use telesign\sdk\messaging\MessagingClient;
//        $_POST['userInput'];
        
       if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'Boost For 1 Hour':
                telesign1();
                break;
            case 'Boost For 2 Hours':
                telesign2();
                break;
            case 'Boost For 3 Hours':
                telesign3();
                break;
            case 'Boost For 4 Hours':
                telesign4();
                break;
            case 'Boost For 5 Hours':
                telesign5();
                break;
            case 'Boost For 6 Hours':
                telesign6();
                break;
            case 'Boost For 7 Hours':
                telesign7();
                break;
            case 'Boost For 8 Hours':
                telesign8();
                break;
            case 'Boost For 9 Hours':
                telesign9();
                break;
            case 'userInput':
                userInput();
                break;
            case 'Cancel Boost':
                cancel();
                break;
        }
    }

    
    

function telesign1()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 1 Hour";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign2()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 2 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign3()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 3 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign4()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 4 Hour";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign5()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 5 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign6()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 6 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign7()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 7 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign8()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 8 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function telesign9()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Zone 1 Boosted 9 Hours";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}

function userInput()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = $userInput;
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}
    
function cancel()
{
  $customer_id = "YOUR-CUSTOMER-ID";
  $api_key = "YOUR-API-KEY";
  $phone_number = "YOUR-PHONE-NUMBER";
  $message = "Boost Cancelled For Zone 1";
  $message_type = "ARN";
  $messaging = new MessagingClient($customer_id, $api_key);
  $response = $messaging->message($phone_number, $message, $message_type);
}
   ?>