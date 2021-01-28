<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

	<!-- Website Title -->
	<title>Informasi Wisata Desa</title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/fontawesome-all.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/swiper.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/magnific-popup.css" rel="stylesheet">
	<link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
	<link rel="icon" href="<?= base_url('assets/') ?>images/favicon.png">

	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

		<!-- Image Logo -->
		<a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url('assets/') ?>images/logo.svg" alt="alternative"></a>

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() ?>">Home</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item mb-2"  href="<?=  base_url('home/profil') ?>"><span class="item-text">Visi & Misi</span></a>
						<a class="dropdown-item mb-2"  href="<?=  base_url('home/struktur_organisasi') ?>"><span class="item-text">Struktur Organisasi</span></a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori Wisata</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php foreach($kategori as $kat): ?>
							<a class="dropdown-item mb-2" href="<?= base_url('home/wisata/'.$kat->id_kategori) ?>"><span class="item-text"><?= $kat->nama_kategori ?></span></a>
						<?php endforeach; ?>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url('home/galeri') ?>">Galeri</a>
				</li>

			</ul>
			<span class="nav-item social-icons">
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x facebook"></i>
						<i class="fab fa-facebook-f fa-stack-1x"></i>
					</a>
				</span>
				<span class="fa-stack">
					<a href="#your-link">
						<i class="fas fa-circle fa-stack-2x twitter"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</a>
				</span>
			</span>
		</div>
	</nav> <!-- end of navbar -->
	<!-- end of navigation -->

	<!-- SELAMAT DATANG SECTION -->
	<header id="header" class="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h1><span class="turquoise">Selamat Datang di</span> Wisata Desa Turi!</h1>
							<p class="p-large">Use Evolo free landing page template to promote your business startup and generate leads for the offered services</p>
							<a class="btn-solid-lg page-scroll" href="<?php echo base_url('home/galeri') ?>">LIHAT GALERI!</a>
						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
					<div class="col-lg-6">
						<div class="image-container">
							<img class="img-fluid" src="<?= base_url('assets/') ?>svg/undraw_destinations_fpv7.svg" alt="alternative" style="width: 420px">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of header-content -->
	</header> <!-- end of header -->