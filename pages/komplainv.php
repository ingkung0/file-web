<?php 
  $b=$_GET['id'];//menyimpan session judul
  $result= mysql_query("SELECT * FROM Komplain WHERE Judul='$b'") or die (mysql_error());
  $data=mysql_fetch_array($result);
?>

<div class="container">
  <div class="col-md-8">
  	<div class="panel panel-default">
  		<div class="panel-heading"><b>Judul : </b><?php echo $data[1];?></div>
  		<div class="panel-body"><u>Isi Komplain</u><br><?php echo $data[2];?></div>
  	</div>
  </div>
</div>