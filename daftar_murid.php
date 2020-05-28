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
	<title>Daftar Akun</title>

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
							
						</div>
					</div>
				</div>
			</header>
			<div class="banner-area">
				<div class="container">
					<div class="row justify-content-center height align-items-center">
						<div class="col-lg-8">
							<div class="banner-content text-center">
								<h1 class="text-white text-uppercase">Buat akun sebagai Murid</h1>
								<span class="text-white top text-uppercase">Isi Data Anda pada Form di Bawah Ini</span>
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
						<h3 class="mb-30">Isi Data di Bawah Ini</h3>
						<form action="prosesdaftar_murid.php" method="post">
							<div class="mt-10">
								<input type="text" name="nama_murid" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="nis" placeholder="Nomor Induk Siswa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Induk Siswa'" required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="ttl" placeholder="Tempat/ Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat/ Tanggal Lahir'" required class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="email" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
							</div>

							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></div>
								<div class="form-select">
									<select name="kelas">
										<option value="1">Kelas</option>
										<option value="X MIPA 1">X MIPA 1</option>
										<option value="X MIPA 2">X MIPA 2</option>
										<option value="X MIPA 3">X MIPA 3</option>
										<option value="X MIPA 4">X MIPA 4</option>
										<option value="X MIPA 5">X MIPA 5</option>
										<option value="X IPS 1">X IPS 1</option>
										<option value="X IPS 2">X IPS 2</option>
										<option value="X IPS 3">X IPS 3</option>
										<option value="X IPS 4">X IPS 4</option>
										<option value="X IPS 5">X IPS 5</option>
										<option value="XI MIPA 1">XI MIPA 1</option>
										<option value="XI MIPA 2">XI MIPA 2</option>
										<option value="XI MIPA 3">XI MIPA 3</option>
										<option value="XI MIPA 4">XI MIPA 4</option>
										<option value=">XI MIPA 5">XI MIPA 5</option>
										<option value="XI IPS 1">XI IPS 1</option>
										<option value="XI IPS 2">XI IPS 2</option>
										<option value="XI IPS 3">XI IPS 3</option>
										<option value="XI IPS 4">XI IPS 4</option>
										<option value="XI IPS 5">XI IPS 5</option>
										<option value="XII MIPA 1">XII MIPA 1</option>
										<option value="XII MIPA 2">XII MIPA 2</option>
										<option value="XII MIPA 3">XII MIPA 3</option>
										<option value="XII MIPA 4">XII MIPA 4</option>
										<option value="XII MIPA 5">XII MIPA 5</option>
										<option value="XII IPS 1">XII IPS 1</option>
										<option value="XII IPS 2">XII IPS 2</option>
										<option value="XII IPS 3">XII IPS 3</option>
										<option value="XII IPS 4">XII IPS 4</option>
										<option value="XII IPS 5">XII IPS 5</option>
									</select>
								</div>
							</div>

							<div class="mt-10">
								<input type="text" name="nama_walas" placeholder="Nama Wali Kelas" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Wali Kelas'" required class="single-input">
							</div>

							<div class="mt-10">
								<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required class="single-input">
							</div>

							<div class="button-group-area mt-40">
							<button class="genric-btn primary circle" style="float:right">Daftar</button>
						
							</div>
						</form>
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
