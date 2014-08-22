
<!--Test login/logout-->
<?php
session_start();
//connect.php
$server	    = 'localhost';
$user_name	= 'okiana1';
$password	= 'Sq3*%Qfi#';
$database	= 'okiana1_wp469';
$signed_in = true;

/*TEST*/


if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
mysql_pconnect($server, $username, $password);
session_start();
?>
