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
         $connection = mysql_connect("localhost", "root", "");
        if(!$connection){
            die('couid not connect:'.  mysql_error());
        }
        if(!mysql_select_db('mysql')){
            die('could not select database');
        }
        $db = mysql_select_db("mysql", $connection);
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
       // $photo = $_FILES['photo']['tmp_name'];
       // $img = file_get_contents($photo);
       $query = "INSERT INTO sdetails(number,sscp, sscy, interp, intery, yoa, IP, IIP, IIIP,IVP, VP, VIP, VIIP, VIIIP, BP, backlogs, amcat, gre, gate, competitions, phone, email) VALUES('$number','$sscp','$sscy','$interp','$intery','$yoa','$IP','$IIP','$IIIP','$IVP','$VP','$VIP','$VIIP','$VIIIP','$BP','$backlogs','$amcat','$gre','$gate','$competitions','$phone','$email')";
       $result = mysql_query($query)
             or die("Query failed: ".mysql_error());
       echo "<table border='1'><tr><td>Roll Number : </td><td>$number</td></tr>
      <tr><td>SSC percentage  :</td> <td>$sscp</td></tr>
      <tr><td>SSC year :</td><td> $sscy</td></tr>
      <tr><td>Inter percentage: </td><td>$interp</td></tr>
      <tr><td>Inter year :</td><td> $intery</td></tr>
      <tr><td>Year of Admission into B-Tech :</td><td> $yoa</td></tr>
      <tr><td>I sem percentage :</td><td> $IP</td></tr>
      <tr><td>II sem percentage :</td><td> $IIP</td></tr>
      <tr><td>III sem percentage :</td><td> $IIIP</td></tr>
      <tr><td>IV sem percentage :</td><td> $IVP</td></tr>
      <tr><td>V sem percentage :</td><td> $VP</td></tr>
      <tr><td>VI sem percentage :</td><td> $VIP</td></tr>
      <tr><td>VII sem percentage :</td><td> $VIIP</td></tr>
      <tr><td>VIII sem percentage :</td><td> $VIIIP</td></tr>
      <tr><td>Overall aggregate :</td><td> $BP</td></tr>
      <tr><td>Have you any backlogs :</td><td> $backlogs</td></tr>
      <tr><td>AMCAT score :</td><td> $amcat</td></tr>
      <tr><td>GRE/TOFEL/IELTS score :</td><td> $gre</td></tr>
      <tr><td>GATE score :</td><td> $gate</td></tr>
      <tr><td>Have you won any coding competitons ? :</td><td> $competitions</td></tr>
      <tr><td>Phone Number :</td><td> $phone</td></tr>
      <tr><td>Email :</td><td> $email</td></tr>
      <tr><td>Photo :</td><td>Photo</td></tr>";
     // $myq = "SELECT number FROM sdetails";
     // $resul=  mysql_query($myq)
      //        or die("Query failed :".  mysql_errno());
      //echo "<table border ='1'>";
      //echo "<tr>";
      //echo "</tr>";
     // while($row = mysql_fetch_array($resul))
     // {
       //   echo "<tr>";
      //    echo "<td>",$row['number'],"</td>";
       //   echo "</tr>";
     // }
        ?>
    </body>
</html>
