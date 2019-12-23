<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$connection = mysql_connect("localhost","root","");
if(!$connection){
die('could  not connect'.mysql_error());
}else{
echo "connected to mysql successfully <br>";

$query = mysql_query("DROP database mydatabase ", $connection);
if(!$query){
    echo "Database can't be deleted";
}else{
echo "database deleted succesfully";
}
}
mysql_close($connection);
?>

