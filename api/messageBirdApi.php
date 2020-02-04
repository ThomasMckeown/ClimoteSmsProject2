<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- used for jquery script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- css styling-->
        <link href="../style/zone.css" rel="stylesheet" type="text/css"/>
        <title>MessageBird</title>
    </head>
    <body class="loggedin">
        <!-- basic nav bar-->
        <ul>
    <li >
        <div id="logo">
            <img src="../images/climoteLogo.png" alt="" width="100"/>
        </div>
    </li>
    <li><a href="../login.php">Home</a></li>
    <li><a href="telesign.php">Telesign</a></li>
  <li><a href="messageBirdApi.php" class="active">MessageBird</a></li>
  <li><a href="nexmoApi.php">Nexmo</a></li>
  <li><a href="twilioApi.php">Twilio</a></li>
  <li style="float:right"><a href="../login.php">Logout</a></li>
</ul>
        <?php 
        //session so it knows who's loggedin
        session_start();
        
        if(!isset($_SESSION['loggedin']))
            {//if someone isnt loggedin it will redirect them to the login page
                header('Location: ../login.php');
                exit();
            }
        
        
        
        ?>
        
        <!-- just used to make sure the details was being sent over correctly -->
        <!--<h3>Welcome back <?=$_SESSION['name']?></h3>-->
        <div class="zones">
            <h1 class="company">MessageBird <img src="../images/messageBirdLogo.png" alt="" width="30"/></h1>
            <h2 class="sentence">Select How Long You Want To Boost For:</h2>
            
                                    <!-- dropdown -->
        <div class="zone1">
            <div class="title1"><h2>Zone 1</h2></div>
        <input type="submit" class="button" name="boost1" value="Boost For 1 Hour" />
        <input type="submit" class="button" name="boost2" value="Boost For 2 Hours" />
        <input type="submit" class="button" name="boost3" value="Boost For 3 Hours" />
        <input type="submit" class="button" name="boost4" value="Boost For 4 Hours" />
        <input type="submit" class="button" name="boost5" value="Boost For 5 Hours" />
        <input type="submit" class="button" name="boost6" value="Boost For 6 Hours" />
        <input type="submit" class="button" name="boost7" value="Boost For 7 Hours" />
        <input type="submit" class="button" name="boost8" value="Boost For 8 Hours" />
        <input type="submit" class="button" name="boost9" value="Boost For 9 Hours" /><br><br>
        
        <input type="submit" class="button" name="cancel" value="Cancel Boost" /><br><br>
        </div>
                                    
                                    <!-- dropdown -->
        <div class="zone2">
            <div class="title2"><h2>Zone 2</h2></div>
        <input type="submit" class="button2" name="boost1" value="Boost For 1 Hour" />
        <input type="submit" class="button2" name="boost2" value="Boost For 2 Hours" />
        <input type="submit" class="button2" name="boost3" value="Boost For 3 Hours" />
        <input type="submit" class="button2" name="boost4" value="Boost For 4 Hours" />
        <input type="submit" class="button2" name="boost5" value="Boost For 5 Hours" />
        <input type="submit" class="button2" name="boost6" value="Boost For 6 Hours" />
        <input type="submit" class="button2" name="boost7" value="Boost For 7 Hours" />
        <input type="submit" class="button2" name="boost8" value="Boost For 8 Hours" />
        <input type="submit" class="button2" name="boost9" value="Boost For 9 Hours" /><br><br>  
        
        <input type="submit" class="button2" name="cancel" value="Cancel Boost" /><br><br>
        </div>
        
<!--        <form action="../logout.php">
        <input type="submit" class="button3" name="Logout" value="Logout" />
        </form>-->
        </div>
        <script>
            //whenever an input of class button is clicked this function will run
            //it will get the value of the input pressed and send those details to the php page its told
        $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = '../apiFunctions/messageBirdFunctions.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});

//code for buttons boosting zone 2
//whenever an input of class button is clicked this function will run
            //it will get the value of the input pressed and send those details to the php page its told
        $(document).ready(function(){
    $('.button2').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = '../apiFunctions/messageBirdZone2.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action 2 performed successfully");
        });
    });
});
        </script>
        

  
    </body>
</html>
