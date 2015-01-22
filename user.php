<!DOCTYPE html>
  <?php
  	include 'connect.php';
  	//if (!isset($_SESSION['Username']))
	//die("Acces denied!");
	$a=$_SESSION['Username'];
  ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	<link rel="icon" type="image/png" href="img/icon.jpg">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <!--<link rel="shortcut icon" href="img/favicon.png">-->
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">//script click table
	  jQuery(document).ready(function($) {
      $(".clickableRow").click(function() {
            window.document.location = $(this).attr("href");
      });
	});
	</script>
	<script type="text/javascript">//script radio button
	  $(':radio').change(
		  function(){
		    $('.choice').text( this.value + ' stars' );
		  } 
		)
	</script>
</head>

<body>
<div class="container"><!--Header page-->
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header col-md-2">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
				 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span>
				 <span class="icon-bar"></span></button><a class="navbar-brand" href="user.php?view=<?php echo $a?>">
				 <img src="img/logo.png" alt="logo website" style="margin-top:-14px;margin-bottom:-10px;"></a>
			</div>
			<div>
			  <ul class="nav navbar-nav pull-right">				        
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			            <?php
			              echo "$user";
			            ?>
			          <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="prosesLogout.php">
			            Keluar</a></li>				            
			          </ul>
			        </li>
		        </ul>
			</div>				
		</nav>
		</div>
	</div>
	<br><br><br>
	<div><!--Page dinamis-->
	  <?php
      $pages_dir = 'pages';
      if(!empty($_GET['p'])){
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo 'Halaman tidak ditemukan! :(';
        }
      } else {
        include($pages_dir.'/home1.php');
      }
      ?>
	</div>
</div>
</body>
</html>
