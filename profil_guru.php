<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Profil Guru</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="main-wrapper-first">
			<header>
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="indexguru.php"><img src="img/1.jpeg" alt="" width="100px" height="100px"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="indexguru.php">Beranda</a>
									<a href="konseling_murid.php">Konseling</a>
									<a href="aturjadwal.php">Atur Jadwal</a>
									<a href="report_guru.php">Report</a>
									<a href="profil_guru.php">Profil</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center generic-height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<br />
								<h1 class="text-white text-uppercase">PROFIL GURU  BK</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Feature Area -->
			<section class="featured-area">
				<div class="container">
						<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">

						<?php
						    session_start();
						    include"koneksi.php";
						    $nip=$_SESSION['nip'];
						    $select="Select * from guru_bk where nip='$nip'";
						    $buff=mysql_fetch_array(mysql_query($select));
						    
						?>

						<h3 class="mb-30">Biodata Anda</h3>

						<table align="center" width="487" border="0">
				            <tr>
				                <td width="150">Nama</td>
				                <td width="327">: <?php echo $buff['nama_guru'];?></td>
				            </tr>
				            <tr>
				                <td width="150">NIP</td>
				                <td>: <?php echo $buff['nip'];?></td>
				            <tr>
				                <td width="150">Password</td>
				                <td>: <?php echo $buff['password'];?></td>
				            </tr>
				            </tr>
				                <td width="150">Email</td>
				                <td>: <?php echo $buff['email'];?></td>
				            </tr>
				            
				        </table>

				        <div class="button-group-area mt-10" style="float:right">
						<a href="proseslogout.php" class="genric-btn success-border radius">Log Out</a>
					</div>
						
					</div>
					
					</div>
				</div>
			</div>	
					
			</section>
			<!-- End Feature Area -->

			
			
			<!-- Start Footer Widget Area -->
			<section class="footer-widget-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-pushpin"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Alamat</h6>
									<p>Jl. Raya Serpong - Puspiptek <br> Tangerang Selatan <br>15314 <br> Banten</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-earth"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Email & Website</h6>
									<div class="contact">
										<a href="mailto:info@dataarc.com">info@sman2tangsel.sch.id</a> <br>
										<a>www.sman2tangsel.sch.id</a> <br>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-widget d-flex flex-wrap justify-content-between">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="lnr lnr-phone"></span>
								</div>
								<div class="desc">
									<h6 class="title text-uppercase">Kontak</h6>
									<div class="contact">
										<a href="tel:1545">Telp : 021-7560956</a> <br>
										<a href="tel:54512">Fax : 021-75872407</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Footer Widget Area -->
			<!-- Start footer Area -->
			<footer>
				<div class="container">
					<div class="footer-content d-flex justify-content-between align-items-center flex-wrap">
						<div class="logo">
							<img src="img/logo.png" alt="">
						</div>
						<div class="copy-right-text">Copyright &copy; 2017  |  All rights reserved to Dinomuz inc. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></div>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
		</div>




		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
