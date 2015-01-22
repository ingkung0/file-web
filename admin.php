<!DOCTYPE html>
  <?php
    include 'connect.php';
    if (!isset($_SESSION['Username']))
  die("Acces denied!");
  $a=$_SESSION['Username'];
  ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--logo website-->
  <link rel="icon" type="image/png" href="img/icon.png">
  <!--end-->

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">-->
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header col-md-2">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo website" style="margin-top:-14px;margin-bottom:-10px;"></a>
			</div>
			<div>
			  <ul class="nav navbar-nav pull-right">				        
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="prosesLogout.php">Keluar</a></li>				            
			          </ul>
			        </li>
		        </ul>
			</div>				
		</nav>
	</div>
  <div class="col-md-10"><br><br><br>
    <h4 align="center">User Umum</h4>
      <div class="panel panel-default">  
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Password</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result=mysql_query("SELECT * FROM User WHERE Corp='0'")  or die (mysql_error());
              for($a=1;$a<7;$a++) {
                $data=mysql_fetch_array($result);
                  if($data == NULL) {break;}
            ?>
            <tr>
              <td><?php echo $a;?></td>
              <td><?php echo $data[0];?></td>
              <td><?php echo $data[1];?></td>
              <td><?php echo $data[2];?></td>
              <td><a href="admin.php?act=delete&user=<?php echo $data[0]?>">Delete</a></td>
            </tr>
            <?php } 
            ?>
          </tbody>
        </table>
      </div>
      <h4 align="center">User Korporat</h4>    
      <div class="panel panel-default">  
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Password</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result=mysql_query("SELECT * FROM User WHERE Corp='1' AND Admin='0'")  or die (mysql_error());
              for($a=1;$a<7;$a++) {
                $data=mysql_fetch_array($result);
                  if($data == NULL) {break;}
            ?>
            <tr>
              <td><?php echo $a;?></td>
              <td><?php echo $data[0];?></td>
              <td><?php echo $data[1];?></td>
              <td><?php echo $data[2];?></td>
              <td><a href="admin.php?act=delete&user=<?php echo $data[0]?>">Delete</a></td>
            </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
      <h4 align="center">Komplain</h4>    
      <div class="panel panel-default">  
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Komplain</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result=mysql_query("SELECT * FROM Komplain order by Nocomplain asc")  or die (mysql_error());
              for($a=1;$a<7;$a++) {
                $data=mysql_fetch_array($result);
                  if($data == NULL) {break;}
            ?>
            <tr>
              <td><?php echo $a;?></td>
              <td><?php echo $data[1];?></td>
              <td><?php echo $data[2];?></td>
              <td><?php echo $data[3];?></td>
              <td><a href="admin.php?act=deletek&id=<?php echo $data[0]?>" onclick="fungsiR">Delete</a></td>
            </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
      <?php 
        if($_GET['act']=="delete") {
          $result=mysql_query("Delete FROM User WHERE Username=\"".$_GET['user']."\"") or die (mysql_error());
        }
        elseif($_GET['act']=="deletek") {
          $result=mysql_query("Delete FROM Komplain WHERE Nocomplain=\"".$_GET['id']."\"") or die (mysql_error());
        }
      ?>
      <script type="text/javascript">
        function fungsiR() {location.reload();}
      </script>
  </div>
</div>
</body>
</html>
