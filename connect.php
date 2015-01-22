<?php session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="WebsitePI";  //database name which you created

mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

//cek sudah login atau belum
if (isset($_SESSION['Username']))
{
	$user = $_SESSION['Username'];
	$loggedin = TRUE;
}
else $loggedin = FALSE;
?>