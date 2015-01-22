<!DOCTYPE html>
<?php
    include 'connect.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Complain it up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Web yang membantu masyarakat dalam menyampaikan keluhan">
  <meta name="author" content="Adi Prasetyo; Firman Siradj">
  <meta name="keywords" content="komplain, complain, instansi, pemerintah, pelayanan">

  <!--logo website-->
  <link rel="icon" type="image/png" href="img/icon.jpg">
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

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  
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
</head>

<body>
  <div>
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?p=home"><img src="img/logo.png" alt="logo website" style="margin-top:-14px;margin-bottom:-10px;"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="#" data-toggle="modal" data-target="#Login"><span class="glyphicon glyphicon-user"></span> Daftar/Masuk</a>
              <div id="Login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form role="form" method="POST" autocomplete="off" action="prosesLogin.php">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      <h4 class="modal-title" id="myModalLabel"><b>Daftar/Masuk</b></h4>
                    </div>
                    <div class="modal-body">
                      <input type="username" class="form-control" name="Username" id="inputUser" placeholder="Masukkan username/email" value=""><br>
                      <input type="password" class="form-control" name="Password" id="inputPassword" placeholder="Masukkan password">
                    </div>
                    <div class="modal-footer">
                      <a href="index.php?p=registrasi" type="button" class="btn btn-default" >Registrasi ?</a>
                      <button type="submit" class="btn btn-primary" name="submit">Masuk</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="index.php?p=ttgkami"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li>
            <li><a href="index.php?p=bantuan"><span class="glyphicon glyphicon-question-sign"></span> Bantuan</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div id="konten">
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
        include($pages_dir.'/home.php');
      }
    ?>
    </div>
  </div>
</body>