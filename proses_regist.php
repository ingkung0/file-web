<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'WebsitePI');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

header("Refresh: 5; url=index.php");

function NewUser()
{
	$userName = $_POST['Username'];
	$email = $_POST['Email'];
	$password =  $_POST['Password'];
	$query = "INSERT INTO User (Username,Email,Password) VALUES ('$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['Username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM User WHERE Username = '$_POST[Username]' AND Password = '$_POST[Password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>