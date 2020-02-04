<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //destroy's the session the user created when logging in
        //this means they will have to log back in the next time they use it.
        //without this the user could just hit the back arrow to get back on
        //or not close their browser and it would still remember their details.
        //This means it completely forgets their details
        session_start();
        session_destroy();
        //once the session is destroyed it sends the user to the login page
        header('Location: login.php');
        
        
        
        
        ?>
    </body>
</html>
