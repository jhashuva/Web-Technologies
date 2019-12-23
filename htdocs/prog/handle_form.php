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
        //filter
        $name = $_POST['name'];
        $number = $_POST['number'];
        $dep = $_POST['dep'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        //connecting to database
        define('DB_NAME', 'mysql');
        define('DB_USER','root');
        define('DB_PASSWORD','');
        define('DB_HOST','localhost');
        $link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
        if(!$link){
            die('Could not connect:'.mysql_error());
        }
        $db_selected = mysql_select_db(DB_NAME,$link);
        if(!$db_selected){
            die('cannot use'.DB_NAME.':'.mysql_error());
        }
        echo 'connected succesfully';
        $query=mysql_query("INSERT INTO student(name, number, dep, email, phone)VALUES('$name','$number','$dep','$email','$phone')");
        $result = mysql_query($query,$link);
       // if (@mysql_query($result, $link)) {
       //   print '<p>The blog entry has been added!</p>';
        //} else {
       // print '<p style="color: red;">Could not add the entry because:<br />' .mysql_error($link) . '</p><p>The query being run was: '.$result.  '</p>';
       // }
        mysql_close($link);
        print "<p>Your Name $name</p><p>Your ROll Number $number</p><p>Your Department $dep</p><p>Your Email $email</p><p>Your Phone Number $phone</p>";        // put your code here
        ?>
    </body>
</html>
