<?php
  include 'connect.php';

  function posting()//untuk memposting komplain
  {
  	
  	$jud = $_POST['title'];
  	$kom = $_POST['text'];
  	$user = $_SESSION['Username'];
  	
  	if(($jud != "") && ($kom != ""))
  	{
  	  $query = "INSERT INTO Komplain(Judul, Complain, Username) VALUES('$jud', '$kom', '$user')";
  	  mysql_query ($query)or die(mysql_error());
  	  echo "posting telah terkirim";
  	  header("Refresh: 3; url=user.php?view=$user");
  	}
  	else
  	{
  	  echo "Tolong isi yang benar";
  	  header("Refresh: 3; url=user.php?view=$user");
  	}
  }
  if(isset($_POST['submit']))
  {
	posting();
  }
?>