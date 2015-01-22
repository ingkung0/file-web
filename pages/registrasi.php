<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>Registrasi</title>

  	<!--Link ke css-->
  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  	<div class="container">
  	  <h1>Registrasi</h1><hr>
  	  <p>Silahkan mengisi form dibawah ini</p><br>
      <div class="col-md-6">
    	  <form class="form-horizontal" role="form" method="POST" action="proses_regist.php">
    	    <div class="form-group">
    	      <label class="col-md-2 control-label">E-mail</label>
    	        <div class="col-md-8">
    	    	  <input type="text" name="Email" class="form-control">
    	        </div>
    	    </div>
    	    <div class="form-group">
    	      <label class="col-md-2 control-label">Username</label>
    	        <div class="col-md-8">
    	    	  <input type="text" name="Username" class="form-control">
    	        </div>
    	    </div>
    	    <div class="form-group">
    	      <label class="col-md-2 control-label">Password</label>
    	        <div class="col-md-8">
    	    	  <input type="password" class="form-control" name="Password"><br>
    	        </div>
    	    </div>
    	    <div class="form-group">
      	  <div class="col-md-offset-8">
        		<button type="submit" class="btn btn-primary" name="submit">Registrasi</button>
      	  </div>
    		</div>
    	  </form>
      </div>
      <div class="col-md-6 verticalLine"><h3>Untuk mendaftarkan perusahaan anda, silahkan hubungi team kami di : <a href="url">ingkung0@gmail.com</a></h3><br></div>
  	</div>
  </body>
</html>