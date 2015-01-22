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
  <div class="col-md-4">
  	<div class="panel panel-default">
  	  <div class="panel-body">
	  	<h4><b>Rating</b></h4>
	  	<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 4
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 5
		</label>
	  </div>
	</div>
  </div>
</div>