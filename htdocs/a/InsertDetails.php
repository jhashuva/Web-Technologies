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
        $value = $_POST['Roll_Number'];
        $number = $_POST['number'];
        $sscp = $_POST['sscp'];
        $sscy = $_POST['sscy'];
        $interp = $_POST['interp'];
        $intery = $_POST['intery'];
        $yoa = $_POST['yoa'];
        $IP = $_POST['IP'];
        $IIP = $_POST['IIP'];
        $IIIP = $_POST['IIIP'];
        $IVP = $_POST['IVP'];
        $VP = $_POST['VP'];
        $VIP = $_POST['VIP'];
        $VIIP = $_POST['VIIP'];
        $VIIIP = $_POST['VIIIP'];
        $BP = $_POST['BP'];
        $backlogs = $_POST['backlogs'];
        $amcat = $_POST['amcat'];
        $gre = $_POST['gre'];
        $gate = $_POST['gate'];
        $competitions = $_POST['competitions'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
       // $Name = mysql_real_escape_string($_POST[Name);
        //$Gender = filter_input(post,Gender);
        //$dob = filter_input(post,dob);
        // Create connection
       // $connection= mysql_connect("localhost","root","")
            //    or die ("Couldn't connect to server");
       // $db = mysql_select_db("mysql",$connection)
              //  or die("Couldn't select database");
        //$query = "INSERT INTO student(Roll_Number, NAME, Gender, dob) VALUES('$Roll_Number','$Name','$Gender','dob')";
       ?>
    </body>
</html>
