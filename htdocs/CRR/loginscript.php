
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['pwd'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['uname'];
$password=$_POST['pwd'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("mysql", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from account where pwd='$password' AND uname='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ir.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>
