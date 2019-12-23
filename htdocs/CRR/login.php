<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><?php
           include 'loginscript.php';
            if(isset($_SESSION['login_user'])){
             header("location: ir.php");
            }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title>Admin Login</title>
    <h1>WELCOME ADMINISTRATOR</h1>
    </head>
    <body>
           <form action="" method="post">
            <p>USER NAME :<input type="text" name="uname"></p>
            <p>PASSWORD :<input type="password" name="pwd"></p>
            <p><input type="submit" name="login" value="LOGIN"></p>
        </form>
        <span>
        <?php
        // put your code here
        echo $error;
        ?></span>
    </body>
</html>
