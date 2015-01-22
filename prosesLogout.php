<?php
  include 'connect.php';
  function destroySession()
  {
	$_SESSION=array();
	if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-2592000, '/');
	session_destroy();
  }

  if(isset($_SESSION['Username']))
  {
  	destroySession();
  	echo "Anda telah logout";
  	header("Refresh: 3; url=index.php");
  }
?>