<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker-standalone.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>admin/plugins/timepicker/bootstrap-timepicker.min.css">

	<!-- Custom Theme files -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<!--animate-->
	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
</head>
<body>
	<div class="top-header">
    <div class="container">
      <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
        <li class="hm"><a href="<?php echo base_url(); ?>c_login"><i class="fa fa-home"></i> ADMIN</a></li>
        <p></p>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
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
								<li class="active"><a href="<?php echo base_url(); ?>landing">Cari Tiket</a></li>
								<li><a href="<?php echo base_url(); ?>boking/cek">Cek Pemesanan</a></li>
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
	<!--- banner ---->
	<div class="banner">

		<!---/End-date-piker---->
	</div>
</div>
</div>


<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa fa-columns"></i>
		<h3>PESAN TIKET PESAWAT DISINI</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Booking Tiket Disini</h2>
		<form action="<?php echo base_url(); ?>landing/cari" method="GET">

			<div class="ban-top">

				<div class="">
					<label class="inputLabel">Dari</label>
					<select name="asal" class="form-control">
                                <?php
                                foreach($asal as $obj1){
                                     $id = $obj1->id;
                                     $asal = $obj1->rute_from;
                                ?>
                                <option value="<?php echo $asal; ?>"> <?php echo $asal; ?></option>
                                <?php
                            }
                            ?>
                            </select>
				</div>
<br>
				<div class="">
					<label class="inputLabel">Ke</label>
					<select name="tujuan" class="form-control">
                                <?php
                                foreach($tujuan as $obj1){
                                     $id = $obj1->id;
                                     $tujuan = $obj1->rute_to;
                                ?>
                                <option value="<?php echo $tujuan; ?>"> <?php echo $tujuan; ?></option>
                                <?php
                            }
                            ?>
                            </select>
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="ban-bottom">

				<div class="bnr-right" id="datetimepicker">
					<label class="inputLabel">Berangkat</label>
					<input name="depart" class="date form-control" id="datepicker" type="text"/>
				</div>


				<div class="form-group bnr-right bnr-right">
					<label class="inputLabel">Penumpang</label>
					<select name="penumpang" class="form-control">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
				<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						$( "#datepicker,#datepicker1" ).datepicker({

							format: "yyyy-mm-dd",
							autoclose: true
						});
					});
				</script>
				<!---/End-date-piker---->
			</div>
			<div class="sear">		
				<button class="seabtn">Cari Pesawat</button> </div>
			</form>

		</div>


		<div class="clearfix"></div>
	</div>
	<!--- /banner ---->
	<!--- rupes ---->
	
	<!--- /routes ---->
	<!--- footer-top ---->
	
	<!--- /footer-top ---->
	<!---copy-right ---->
	<div class="copy-right">
		<div class="container">

			<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<ul>
					<li><a class="facebook" href="#"><span>Facebook</span></a></li>
					<li><a class="twitter" href="#"><span>Twitter</span></a></li>
					<li><a class="flickr" href="#"><span>Flickr</span></a></li>
					<li><a class="googleplus" href="#"><span>Google+</span></a></li>
					<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
				</ul>
			</div>
			<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!--- /copy-right ---->


	<!-- write us -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body modal-spa">
						<div class="writ">
							<h4>HOW CAN WE HELP YOU</h4>
							<ul>
								<li class="na-me">
									<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								</li>
								<li class="na-me">
									<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								</li>
								<li class="na-me">
									<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
								</li>
								<li class="na-me">
									<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="null">Select Issue</option> 		
										<option value="null">Booking Issues</option>
										<option value="null">Bus Cancellation</option>
										<option value="null">Refund</option>
										<option value="null">Wallet</option>														
									</select>
								</li>
								<li class="na-me">
									<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="null">Select Issue</option> 		
										<option value="null">Booking Issues</option>
										<option value="null">Bus Cancellation</option>
										<option value="null">Refund</option>
										<option value="null">Wallet</option>														
									</select>
								</li>
								<li class="descrip">
									<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
								</li>
								<div class="clearfix"></div>
							</ul>
							<div class="sub-bn">
								<form>
									<button class="subbtn">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //write us -->
</body>
</html>