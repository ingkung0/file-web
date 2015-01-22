<?php
include 'connect.php';
function SignIn()
{
   //starting the session for user profile page
if(!empty($_POST['Username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM User where Username = '$_POST[Username]' AND Password = '$_POST[Password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['Username']) AND !empty($row['Password']))
	{
		$_SESSION['Username'] = $row['Username'];
		if($_SESSION['Username'] == 'Admin') {
		  echo "Anda berhasil login";
		  header("Refresh: 3; url=admin.php?view=$_POST[Username]");
		}
		else {
		  echo "Anda berhasil login";
		  header("Refresh: 3; url=user.php?view=$_POST[Username]");
		}

	}
	else
	{
		echo "Salah, coba lagi ya";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>
