<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("mysql", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select uname from account where uname='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['uname'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}

?>