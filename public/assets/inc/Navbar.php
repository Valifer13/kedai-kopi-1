<?php

function isActive($page) {
	return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}

?>
	<!-- Loader Block -->
	<div class="site-loader">
		<div class="loading"></div>
	</div>
	<!-- End Loader Block -->

	<!-- Site Wrapper -->
	<div id="site-wrapper">
		<!-- Header -->
		<header id="site-header">
			<div class="nav-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<ul>
								<li><i class="fa-regular fa-clock"></i>Jam Buka - 09 am - 06 pm</li>
								<li><i class="fa fa-phone"></i>+62 831 1958 7745</li>
								<li><a href=""><i class="fa fa-envelope"></i>info@redsystem.id</a></li>
								<li class="social-bloc">
									<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
									<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
									<a href="#"><i class="fa-brands fa-google-plus"></i></a>
									<a href="#"><i class="fa-brands fa-skype"></i></a>
									<a href="#"><i class="fa-brands fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar" role="navigation">
				<div class="container">
					<div class="row">
						<h1 class="sr-only">Coffee Shop</h1>
						<a href="index.php" title="FoodLover" class="logo">
							<img src="assets/img/logo.png" alt="" width="170">
						</a>
						<button data-target=".navbar-collapse" data-toggle="collapse" type="button" class="menu-mobile visible-xs">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<ul class="nav navbar-nav navbar-collapse collapse">
							<li><a class="<?= isActive('index.php') ?>" href="index.php">Beranda</a></li>
							<li><a class="<?= isActive('about.php') ?>" href="about.php">Tentang Kami</a></li>
							<li><a class="<?= isActive('menu.php') ?>" href="menu.php">Menu</a></li>
							<li><a class="<?= isActive('reservation.php') ?>" href="reservation.php">Reservasi</a></li>
							<li><a class="<?= isActive('blog.php') ?>" href="blog.php">Blog</a></li>
							<li><a class="<?= isActive('contact.php') ?>" href="contact.php">Kontak Kami</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->