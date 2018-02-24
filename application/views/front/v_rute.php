<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?PHP
$rute_from = "";
$rute_to = "";
$depart = "";
$arrive_at = "";
foreach ($hasil as $obj){

	$dari = $obj->rute_from;
	$ke = $obj->rute_to;
	$depart = $obj->depart_at;
	$arrive = $obj->arrive_at;

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
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	<link href='<?php echo base_url(); ?>assets/css/font1.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font2.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url(); ?>assets/css/font3.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>admin/dist/css/AdminLTE.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>admin/dist/css/AdminLTE.min.css" rel="stylesheet">
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
				<a href="<?php echo base_url(); ?>landing">Dani <span> Hanafi </span></a>	
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
	<!--- /banner-1 ---->
	<!--- bus-tp ---->
	<div class="bus-tp">
		<div class="container">
			<p><?php echo date('D , d M Y',strtotime($depart)); ?></p></p>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--- /bus-tp ---->
	<!--- bus-btm ---->
	<div class="bus-btm">
		<div class="container">
			<ul>
				<li class="trav">Airline</li>
				<li class="dept">Depart</li>
				<li class="arriv">Arrive</li>
				<li class="arriv">Duration</li>
				<li class="fare">Price</li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
	<!--- /bus-btm ---->
	<!--- bus-midd ---->
	<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
		<div class="container">
			<!--- ul-first  ---->
			<?php if(empty($hasil)){
				?>
				<div>
					<section><br>
						<div class="error-page">

							<div class="error-content">
								<h3><i class="fa fa-warning text-yellow"></i> Tidak ada Rute yang dicari.</h3>

							</div>
							<!-- /.error-content -->
						</div>
						<!-- /.error-page -->
					</section></div>
					<?php }else{ ?> 
					<?php
					$penumpang = $this->input->get('penumpang');
					foreach ($hasil as $obj1) {
						?> 
						<ul class="first">
							<li class="trav">
								<div class="bus-ic">
									<h2><i class="fa fa-plane"></i></h2>
								</div>
								<div class="bus-txt">
									<h4><?php echo $obj1->nama; ?></h4>
									<p>A/C Sleeper</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li class="dept">
								<div class="bus-ic1">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="bus-txt1">
									<h4><a href="<?php echo base_url(); ?>assets/#"><?php echo date('H:i',strtotime($obj1->depart_at)); ?></a></h4>
									<p><?php echo $dari; ?></p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li class="dept">
								<div class="bus-ic1">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="bus-txt1">
									<h4><a href="<?php echo base_url(); ?>assets/#"><?php echo date('H:i',strtotime($obj1->arrive_at)); ?></a></h4>
									<p><?php echo $ke; ?></p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li class="arriv">
								<div class="bus-txt2">
									<h4><a href="<?php echo base_url(); ?>assets/#">
										<?php 
										$to_time = strtotime("$obj1->depart_at"); 
										$from_time = strtotime("$obj1->arrive_at"); echo round(abs($to_time - $from_time) / 3600). "h ";
										echo round(abs($to_time - $from_time) % 360 / 60). "m";
										?>
									</a></h4>
									<p>direct</p>
								</div>
							</li>
							<li class="fare">
								<div class="bus-txt4">
									<h5>Rp <?php echo $obj1->price; ?></h4>
										<p>1 kursi</p>
										<a href="<?php echo base_url(); ?>landing/detail/<?php echo $obj1->id; ?>/<?php echo $penumpang; ?>" class="view">Pilih</a>	
									</div>
								</li>
								<div class="clearfix"></div>
							</ul>
							<!--- /ul-first  ---->
							<?php }} ?>

						</div>
						<div class="clearfix"></div>
					</div>
				</div>   
			</div>
		</li>
		<div class="clearfix"></div>
	</ul>
	<!--- /ul-first-9 ---->
</div>
</div>
<!--- /bus-midd ---->
<div class="container">
	<div class="col-md-12 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Pencarian Lain</h2>
		<form action="" method="GET">

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

				<div class="bnr-right col-10">
					<label class="inputLabel">Penumpang</label>
					<select name="penumpang" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css" />
				<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
				<script>
					$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					});
				</script>
				<!---/End-date-piker---->
			</div>
			<div class="sear">		
				<button class="seabtn"> Cari Pesawat </button> </div>
			</form>
		</div>
	</div>
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