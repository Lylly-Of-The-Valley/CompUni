<?php
require ("includes/connect.php");
require("includes/header.php");
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$gender=$_POST['gender'];
$town=$_POST['town'];
$userName=$_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
$description=$_POST['description'];
if ($password == $confirmPassword) $check=true;
else $check=false;
if($check){
$result = mysql_query("INSERT INTO users (users_gender, users_firstname, users_lastname, user_username, user_town, user_description, users_email_address, users_password) VALUES ('".$gender. "','".$fName. "','".$lName. "','".$userName. "','".$town. "','".$description. "','".$email. "','".$password. "')");
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
}
require("includes/registerForm.php");
require("includes/footer.php");


