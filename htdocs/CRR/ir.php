<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'session.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
    <h2>Profile Page</h2>
    <div>
            <b id="welcome">Welcome:<i><?php                            echo " home"; ?></i></b>
            <b id="logout"><a href="logout.php">logout</a></b>
        </div>
    </head>
    <body>
        <link href="style.css" rel="stylesheet" type="text/css">
        <?php
        $connection = mysql_connect("localhost", "root", "");
        if(!$connection){
            die('couid not connect:'.  mysql_error());
        }
        if(!mysql_select_db('mysql')){
            die('could not select database');
        }
        $db = mysql_select_db("mysql", $connection);
        $sql=mysql_query("select number,sscp,interp,BP,phone,email from sdetails ");
        if(!$sql){
            die('could not query:'.mysql_error());
        }
        echo "<table border='1'>";
        while($row = mysql_fetch_array($sql)){
            echo "<tr><td>".$row['number']."</td><td>".$row['sscp']."</td><td>".$row['interp']."</td><td>".$row['BP']."</td><td>".$row['phone']."</td><td>".$row['email']."</td></tr>";
        }
        echo "</table>";
        ?>
        <table>
            <form>
            <tr>
                <td></td>
            </tr>
            </form>
        </table>
        
    </body>
</html>
