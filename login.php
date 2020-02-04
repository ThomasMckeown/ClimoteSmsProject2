<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- style sheet for css-->
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
        <!-- style sheet for font awesome icons used-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <title>Login</title>
    </head>
    <body>
        

        

 
        <div class="login">
        <h1>Login:</h1>
        <!-- When the user inputs the details they are sent to authenticate.php to check if these details are correct
        It will also redirect the user to the correct page depending on who they are.
        Some validation has been put in so if you put in the wrong username/password it will tell you which one is wrong
        -->
        <form action="authenticate.php" method="post">
            <label for="name">
                <!-- font awesome icon of person-->
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="name" id="name" placeholder="Username" required><br><br>
        
            <label for="password">
                <!-- font awesome icon of lock-->
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" id="password" placeholder="Password" required><br><br>
            
            
            <input type="submit" value="Login">
        
        
        </form>
        </div>
        <?php
        
        ?>
        
    </body>
</html>
