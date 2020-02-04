<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <link href="../style/zone.css" rel="stylesheet" type="text/css"/>
        <title>Nexmo</title>
    </head>
    <body class="loggedin">
<ul>
    <li >
        <div id="logo">
            <img src="../images/climoteLogo.png" alt="" width="100"/>
        </div>
    </li>
    <li><a href="../login.php">Home</a></li>
    <li><a href="telesign.php" >Telesign</a></li>
  <li><a href="messageBirdApi.php">MessageBird</a></li>
  <li><a href="nexmoApi.php" class="active" >Nexmo</a></li>
  <li><a href="twilioApi.php">Twilio</a></li>
  <li style="float:right"><a href="../login.php">Logout</a></li>
</ul>
        <?php 
        session_start();
        
        if(!isset($_SESSION['loggedin']))
            {
                header('Location: ../login.php');
                exit();
            }
        
        
        
        ?>
        
        
        <!--<h3>Welcome back <?=$_SESSION['name']?></h3>-->
        <div class="zones">
        <h1 class="company">Nexmo
            <img src="../images/nexmoLogo.png" alt="" width="25"/></h1>
        <h2 class="sentence">Select How Long You Want To Boost For:</h2>
        
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
        $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = '../apiFunctions/nexmoFunctions.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});

        $(document).ready(function(){
    $('.button2').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = '../apiFunctions/nexmoZone2.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});
        </script>
        

  
    </body>
</html>
