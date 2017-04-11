<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shop</title>
    <link href="<?php echo assets(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo assets(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo assets(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo assets(); ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo assets(); ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo assets(); ?>css/main.css" rel="stylesheet">
	<link href="<?php echo assets(); ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo assets(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo assets(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo assets(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo assets(); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo pull-left">
							<a href="<?php echo base_url(); ?>"><img src="<?php echo assets(); ?>images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group search-box">
							<div class="input-group-btn search-panel">
			                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			                    	<span id="search_concept">Filter</span> <span class="caret"></span>
			                    </button>
			                    <ul class="dropdown-menu" role="menu">
			                      <li><a href="#contains">Nama</a></li>
			                      <li><a href="#its_equal">Jenis</a></li>
			                      <li><a href="#greather_than">Merk</a></li>
			                      <li class="divider"></li>
			                      <li><a href="#all">Semua</a></li>
			                    </ul>
			                </div>
			                <input type="hidden" name="search_param" value="all" id="search_param">         
			                <input type="text" class="form-control" name="x" placeholder="Search term...">
			                <span class="input-group-btn">
			                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search">&nbsp;Cari</span></button>
			                </span>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="shop-menu pull-right">
							<?php echo $sidebar_member; ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
							<?php echo $sidebar_kategori; ?>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Merk</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php echo $konten ?>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Layanan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Cara Belanja</a></li>
								<li><a href="#">Cek Status Order</a></li>
								<li><a href="#">Konfirmasi Pembayaran</a></li>
								<li><a href="#">Testimoni</a></li>
								<li><a href="#">Hubungi Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Hubungi Kami</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><i class="fa fa-mobile fa-2x"></i>&nbsp;&nbsp;SMS Only : 0856 xxxx xxxx</li>
								<li><i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;Telepon : 0856 xxxx xxxx</li>
								<li><i class="fa fa-whatsapp fa-2x"></i>&nbsp;&nbsp;Whatsapp : 0856 xxxx xxxx</li>
								<li><i class="fa fa-envelope-o fa-2x"></i>&nbsp;&nbsp;Email : 0856 xxxx xxxx</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Pembayaran</h2>
							<ul class="nav nav-pills nav-stacked">
								<li>
									Kami menerima transfer ke rekening: 
								</li>
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/mandiri-syariah.png" width="120" height="50"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/bank_muamalat.png" width="120" height="50"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/bni-syariah.jpg" width="120" height="50"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Pengiriman</h2>
							<ul class="nav nav-pills nav-stacked">
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/jne.jpg" width="120" height="50"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/pos.png" width="120" height="50"></a>
								</li>
								<li>
									<a href="#"><img src="<?php echo assets() ?>images/home/tiki.png" width="120" height="50"></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Sosial Media</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"><i class="fa fa-facebook-official fa-3x"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square fa-3x"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-instagram fa-3x"></i>Instagram</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © <?php echo date('Y') ?> E-shopper Inc. All rights reserved.</p>
					<p class="pull-right">Powered by <span><a target="_blank" href="#">Dedy Damar</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo assets(); ?>js/jquery.js"></script>
	<script src="<?php echo assets(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo assets(); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo assets(); ?>js/price-range.js"></script>
    <script src="<?php echo assets(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo assets(); ?>js/main.js"></script>
</body>
</html>