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
$nama_pemesan = "";
$alamat = "";
$email = "";
$nohp = "";
$token = "";
$total_price = "";
$price = "";
$from = "";
$to = "";
$depart = "";
$arrive = "";
$status = "";
foreach ($tiket->result() as $obj){

  $id = $obj->id;
  $token_booking = $obj->token_booking;
  $token_pemesan = $obj->token_pemesan;
  $nama_pemesan = $obj->nama_pemesan;
  $alamat = $obj->alamat;
  $email = $obj->email;
  $nohp = $obj->nohp;
  $token = $obj->token;
  $total_price = $obj->total_price;
  $price = $obj->price;
  $from = $obj->rute_from;
  $to = $obj->rute_to;
  $depart = $obj->depart_at;
  $arrive = $obj->arrive_at;
  $status = $obj->status;

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reavion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url(); ?>assets/css/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.min.css">
<link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/reservasi.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>assets/css/style.css' rel='stylesheet' type='text/css'>
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
        <a href="<?php echo base_url(); ?>landing">Reavion</span></a>  
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
                <li><a href="<?php echo base_url(); ?>landing">Cari Tiket</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>boking/cek">Cek Pemesanan</a></li>
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
  
  <div class="flight-wrapper">

  <!-- ###### -->
  <div class="flight-booking-info row">
    <div class="col-lg-12 animated fadeIn">
      <div class="customer-data">
        <div class="booking-title">
          <h4>
            <span class="glyphicon glyphicon-user"></span>
            Booking
          </h4>
          <div class="booking-line"></div>
          <h3 class="booking-code">Your Reservation Code <span>
            <?php 
            $tokenp = substr($token,0,7);
            ?>
            <?php echo $tokenp; ?></span></h3>
          </div>
        </div>
      </div>
      <div class="col-lg-7 animated fadeInLeft">

        <?php $i=0;
        foreach ($tiket->result() as $obj){
          $i++;
          ?>

          <div class="customer-data">
            <div class="booking-title">
              <h4>
                <span class="glyphicon glyphicon-user"></span>
                Passengers
                <?php echo $i; ?>
              </h4>
              <div class="booking-line"></div>
            </div>
            <table class="table-customer">
              <tr>
                <td class="h">Identitas</td>
                <td>:</td>
                <td class="c">
                  <?php echo $obj->no_identitas; ?>
                </td>
              </tr>
              <tr>
                <td class="h">Nama Penumpang</td>
                <td>:</td>
                <td class="c">
                  <?php echo $obj->nama_penumpang; ?>
                </td>
              </tr>
              <tr>
                <td class="h">Phone</td>
                <td>:</td>
                <td class="c">
                  <?php echo $obj->nohp; ?>
                </td>
              </tr>
              <tr>
                <td class="h">Email</td>
                <td>:</td>
                <td class="c">
                  <?php echo $obj->email; ?>
                </td>
              </tr>
              <tr class="s">
                <td class="h">Seat</td>
                <td>:</td>
                <td class="c">
                  <?php echo $obj->kursi; ?>
                </td>
              </tr>
            </table>
          </div>
          <?php } ?>

        </div>

        <div class="col-lg-5 animated fadeInRight">
          <div class="flight-booking-1">
            <div class="booking-title">
              <h4>
                <span class="glyphicon glyphicon-plane"></span> Flight Details</h4>
                <div class="booking-line"></div>
              </div>
              <table class="flight-table table-customer">
                <tr>
                  <td>Airline</td>
                  <td> : </td>
                  <td class="c">
                    Garuda Indonesia
                  </td>
                </tr>
                <tr>
                  <td>Depart</td>
                  <td> : </td>
                  <td class="c">
                    <?php echo date('d M Y H:i',strtotime($depart)); ?>
                  </td>
                </tr>
                <tr>
                  <td>Arrive</td>
                  <td> : </td>
                  <td class="c">
                    <?php echo date('d M Y H:i',strtotime($arrive)); ?>
                  </td>
                </tr>
                <tr>
                  <td>Duration</td>
                  <td> : </td>
                  <td class="c">
                    <?php 
                    $to_time = strtotime("$depart"); 
                    $from_time = strtotime("$arrive"); echo round(abs($to_time - $from_time) / 3600). "h ";
                    echo round(abs($to_time - $from_time) % 360 / 60). "m";
                    ?>
                  </td>
                </tr>
              </table>
            </div>

            <div class="flight-booking-2">
              <div class="booking-title">
                <h4>
                  <span class="glyphicon glyphicon-pencil"></span> Summary</h4>
                  <div class="booking-line"></div>
                </div>
                <?php if($status == 1){
                  ?>
                <h3 class="status-paid">
                  LUNAS </h3>

                <?php }else{ ?>
                <h3 class="status-unpaid">
                  BELUM LUNAS </h3>
                  <table class="summary-table table-customer">
            
                <tr class="price-you-pay">
                  <td>Total Pembayaran</td>
                  <td> : </td>
                  <td class="c">
                    <?php echo $total_price; ?>
                  </td>
                </tr>
              </table>
              <div class="booking-unpaid">
                <h4>Your Booking successfull, to finish your payment, please transfer your money to : </h4>
                <table class="table-payment">
                  <tr>
                    <td>Mandiri</td>
                    <td>:</td>
                    <td>23232323</td>
                  </tr>
                  <tr>
                    <td>BCA</td>
                    <td>:</td>
                    <td>32545454</td>
                  </tr>
                  <tr>
                    <td>BRI</td>
                    <td>:</td>
                    <td>5675676</td>
                  </tr>
                </table>
              </div>
              <div class="booking-paid">
                <!-- <div class="booking-line"></div> -->

                <h4>Upload Bukti Pembayaran</h4>
                <form action="<?php echo base_url(); ?>landing/pembayaran" method="POST" enctype="multipart/form-data">
      
                  <input class="form-control" name="bukti" type="file">
                  <button class="choose-btn">Upload</button>
                </form>
              </div>
                <?php } ?> 

          </div>
          </div>
          </div>
        </div>

  </body>
  
<!--- /copy-right ---->

</body>
</html>