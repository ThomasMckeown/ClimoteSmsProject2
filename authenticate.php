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
        //creating the session so the user detils can be used on multile pages and pages that you have to be loggedin 
        //to access knows who the user is
        session_start();
        //details used to connect to the database
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'climotesms';
        
        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
        //checking if connection was made to the databse
        if(mysqli_connect_errno())
            {
            
            die('Sorry but you failed to connect to mysql: ' . mysqli_connect_error());
            
            }
        if(!isset($_POST['name'], $_POST['password']))
            {//kills the connection if there is a problem
                die('There was a problem with the username or password');
            }
            //sql statment used to get id, password and api number for the user wuth the name you typed in
        if($stmt = $con->prepare('SELECT id, password, apiNum FROM user WHERE name = ?'))
            {
           
                $stmt->bind_param('s', $_POST['name']);
                $stmt->execute();
                $stmt->store_result();
               //if there are results this will get them 
        if($stmt->num_rows > 0) 
            {
                $stmt->bind_result($id, $password, $apiNum);
                $stmt->fetch();
                
            //use when doing password encryption 
            //if(password_verify($_POST['password',$password]))
        //currenty testing it without encrypted passwords
        //checks if the password entered is equal to the password in the databse
        if($_POST['password'] === $password && $apiNum == 1)
        
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['id'] = $id;
                
                //if the password is correct the user will be redirected to this page
                header('Location: api/telesign.php'); 
                    
                        }
        //checks if the password entered is equal to the password in the databse
        else if($_POST['password'] === $password && $apiNum == 2)
        
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['id'] = $id;
                
                //if the password is correct the user will be redirected to this page
                header('Location: api/messageBirdApi.php'); 
            
            }
            //checks if the password entered is equal to the password in the databse
            else if($_POST['password'] === $password && $apiNum == 3)
        
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['id'] = $id;
                        
                //if the password is correct the user will be redirected to this page
                header('Location: api/twilioApi.php'); 
                    
            }
            //checks if the password entered is equal to the password in the databse
            else if($_POST['password'] === $password && $apiNum == 4)
        
            {
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['id'] = $id;
                        
                //if the password is correct the user will be redirected to this page
                header('Location: api/nexmoApi.php'); 
                    
            }
            else
            {//if password is incorrect this is echoed
                echo 'Sorry you entered the wrong password';
            }
            }else
                {//if username  is incorrect this is echoed
                    echo 'Sorry you entered the wrong username';
                }
                 
                    
                $stmt->close();
            }


        
        
        
        
        
        
        ?>
    </body>
</html>
