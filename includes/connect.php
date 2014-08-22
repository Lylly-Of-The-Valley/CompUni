
<!--Test login/logout-->
<?php
session_start();
//connect.php
$server	    = 'localhost';
$user_name	= 'test';
$password	= 'YES';
$database	= 'evertsmitnet_main';
$signed_in = true;

/*TEST*/
/*$_SESSION['user_name'] = "Daniel";
$_SESSION['signed_in'] = true;*/

/*if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
*/?>