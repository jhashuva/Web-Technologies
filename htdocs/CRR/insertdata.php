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
        <p>
            Your Data has been registered
        </p>
         <?php
       // include 'sdetails.php';
        $number = $_POST['number'];
        print "$number<br>";
       $sscp = $_POST['sscp'];
       print "$sscp <br>";
       $sscy = $_POST['sscy'];
       print "$sscy<br>";
       $interp = $_POST['interp'];
       print "$interp<br>";
        $intery = $_POST['intery'];
        print "$intery<br>";
        $yoa = $_POST['yoa'];
        print "$yoa<br>";
        $IP = $_POST['IP'];
        print "$IP<br>";
        $IIP = $_POST['IIP'];
        print "$IIP<br>";
        $IIIP = $_POST['IIIP'];
        print "$IIIP<br>";
        $IVP = $_POST['IVP'];
        print "$IVP<br>";
        $VP = $_POST['VP'];
        print "$VP<br>";
        $VIP = $_POST['VIP'];
        print "$VIP<br>";
        $VIIP = $_POST['VIIP'];
        print "$VIIP";
        $VIIIP = $_POST['VIIIP'];
        print "$VIIIP<br>";
        $BP = $_POST['BP'];
        print "$BP<br>";
        $backlogs = $_POST['backlogs'];
        print "$backlogs<br>";
        $amcat = $_POST['amcat'];
        print "$amcat<br>";
        $gre = $_POST['gre'];
        print "$gre<br>";
        $gate = $_POST['gate'];
        print "$gate<br>";
        $competitions = $_POST['competitions'];
        print "$competitions<br>";
        $phone = $_POST['phone'];
        print "$phone<br>";
        $email = $_POST['email'];
        print "$email<br>";
     ?>
    </body>
</html>
