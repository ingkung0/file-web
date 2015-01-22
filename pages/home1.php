<div class="col-md-8">
	  <div class="row">
	    <div class="panel panel-default">
	    	<div class="panel-body">
	    	  <form role="form" method="POST" action="posting.php">
	    		<input type="text" class="form-control" name="title" placeholder="Judul Komplain"><br>
	    		<p>Isi Komplain</p>
	    		<textarea class="form-control" name="text" rows="3"></textarea><br>
	    		<button type="submit" name="submit" class="btn btn-primary pull-right">Kirim</button>
	    	  </form>
	    	</div>
	    </div>
	    <div class="panel panel-default">
	      <table class="table table-hover sortable">
	        <thead>
	      	  <tr>
	      		<th>No</th>
	      		<th>Judul Komplain</th>
	      	  </tr>
	        </thead>
	        <tbody>
	          <?php
	            $result=mysql_query("SELECT * FROM Komplain WHERE Username='$user' order by Nocomplain asc") or die (mysql_error());

	            if($result == NULL){
	          ?>
	          <tr align="center"><td colspan="4">Anda belum membuat komplain</td></tr>
	          <?php }
	            else {
	              for($a=1;$a<7;$a++) {
	              	$data=mysql_fetch_array($result);
	              	if($data==NULL) {break;}
	          ?>
	          <tr class='clickableRow' href='user.php?p=komplain&id=<?php echo $data[1];?>'>
	      	    <td><?php echo $a;?></td> <!--No urut-->
	      		<td><?php echo $data[1];?></td><!--Judul komplain-->
	      		<td></td><!--rating-->
	      		<td></td><!--tanggapan-->
	      	  </tr>
	      	  <?php } } ?>
	        </tbody>
	      </table>
	    </div>
	  </div>
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
	      	    <tr class='clickableRow' href='user.php?p=komplain&id=<?php echo $data[1];?>' 
	      	    ><td><?php echo $data[1]?></td></tr>
	  			<?php }?>
	      	  </tbody>
	        </table>
	      </div>
	  </div>
	</div>