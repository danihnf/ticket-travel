<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 <?PHP
$id="";
$token_booking="";
$token_pemesan="";
$nama_penumpang="";
$nama_pemesana = "";
$alamat = "";
$email = "";
$nohp = "";
$total_price = "";
foreach ($tiket->result() as $obj){

  $id = $obj->id;
  $token_booking = $obj->token_booking;
  $token_pemesan = $obj->token_pemesan;
  $nama_penumpang = $obj->nama_penumpang;
  $nama_pemesan = $obj->nama_pemesan;
  $alamat = $obj->alamat;
  $email = $obj->email;
  $nohp = $obj->nohp;
  $total_price = $obj->total_price;

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>DANI HANAFI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url(); ?>assets/css/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.min.css">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/seat.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>admin/dist/css/AdminLTE.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>admin/dist/css/AdminLTE.min.css' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--animate-->
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
      <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
        <a href="<?php echo base_url(); ?>landing">Dani<span> Hanafi </span></a>  
      </div>
      <div class="bus wow fadeInUp animated" data-wow-delay=".5s">
        <a href="index.html" class="buses active">PESAWAT</a>

      </div>
      <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
        <li><i class="fa fa-lock"></i></li>
        <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
  <div class="container">
  <div class="navigation">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="cl-effect-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Cari Tiket</a></li>
                <li><a href="#">Cek Pemesanan</a></li>
                <li><a href="#">Kontak Kami</a></li>
                <div class="clearfix"></div>
              </ul>
          </nav>
        </div><!-- /.navbar-collapse -->  
      </nav>
    </div>
    
    <div class="clearfix"></div>
  </div>
</div>
<!--- /footer-btm ---->
<!--- banner-1 ---->
<div class="banner-1 ">
  <div class="container">
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"></h1>
  </div>
</div>
<!--- /banner-1 ----><div class="clearfix"></div>
<div class="invoice">
  <center><p>Pembayaran</p></center>
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="<?php echo base_url(); ?>assets/logo/logokecil/batikair1.png" class="img-responsive" alt=""></i> Purwokerto <i class="fa fa-arrow-right"></i> Banyumas

          </h2>

        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          Detail Pemesan
          <address>
            <strong><?php echo $nama_pemesan ?></strong><br>
            Alamat: <?php echo $alamat; ?> <br>
            Phone: <?php echo $nohp; ?><br>
            Email: <?php echo $email; ?>
          </address>
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>No Identitas</th>
              <th>Nama Lengkap</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            </tr>
              <?php 
              $no=1;
                foreach ($tiket->result() as $obj) {
              $no++;
              ?>
              <td><?php echo $no; ?></td>
              <td><?php echo $obj->no_identitas; ?></td>
              <td><?php echo $obj->nama_penumpang; ?></td>
              <td><?php echo $obj->total_price ?></td>
            </tr>
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <!-- /.col -->
        

          


  
      </div>
    </section>
</div>
<div class="clearfix"></div>
<!--- /selectroom ---->
<!---copy-right ---->
<div class="copy-right">
  <div class="container">
  
    <div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <ul>
        <li><a class="facebook" href="<?php echo base_url(); ?>assets/#"><span>Facebook</span></a></li>
        <li><a class="twitter" href="<?php echo base_url(); ?>assets/#"><span>Twitter</span></a></li>
        <li><a class="flickr" href="<?php echo base_url(); ?>assets/#"><span>Flickr</span></a></li>
        <li><a class="googleplus" href="<?php echo base_url(); ?>assets/#"><span>Google+</span></a></li>
        <li><a class="dribbble" href="<?php echo base_url(); ?>assets/#"><span>Dribbble</span></a></li>
      </ul>
    </div>
    <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="<?php echo base_url(); ?>assets/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
  </div>
</div>
<!--- /copy-right ---->

</body>
</html>