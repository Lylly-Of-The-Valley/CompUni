<?php
require ("includes/connect.php");

$userName=$_POST['userName'];

$password=$_POST['password'];
//echo $password.'<br>';

$result = mysql_query("SELECT user_username,users_password FROM users where user_username ='".$userName."' and users_password='".$password."'");
$account= mysql_fetch_array($result, MYSQL_ASSOC);
if (($account['user_username'] !='') and ($account['users_password'] !='')){
$_SESSION['user_name'] =$account['user_username'];
$_SESSION['signed_in'] = true;
}
require("includes/header.php");

if (($account['user_username'] !='') and ($account['users_password'] !='')){
require("includes/categories.php");
require("includes/posts.php");
}
else {
require("includes/loginForm.php");
}

require("includes/footer.php");