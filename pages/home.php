<div class="container">
  <div class="col-md-8">
    <img src="img/banner.gif" style="width:750px;height:250px;">
  </div>
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading" align="center">Komplain terbaru</div>
      <table class="table table-hover sortable">
	    <tbody>
	      <?php
	        $result=mysql_query("SELECT * FROM Komplain order by Nocomplain asc") or die (mysql_error());
	        for($i=1;$i<5;$i++) {
	        	$data=mysql_fetch_array($result);
	           	if($data == NULL) {break;}
	      ?>
	      <tr class='clickableRow' href='index.php?p=komplainv&id=<?php echo $data[1];?>' 
	      ><td><?php echo $data[1]?></td></tr>
	  	  <?php }?>
	    </tbody>
	  </table>
    </div> 
  </div>
</div>
  <div class="foot"><br><br>
   <img src="img/footer.png" style="width:1301px;height:287px;">
  </div>