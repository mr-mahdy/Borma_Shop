<body style="background: rgba(0,0,0,0.05)">
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<?php if ($this->session->userdata('userPenjual') != "") : ?>
							<a href="<?= base_url('Penjual/Dashboard') ?>">Pusat Penjual</a>
							<?php elseif ($this->session->userdata('useradmin') != "") : ?>
							<a href="<?= base_url('Admin/Dashboard') ?>">Admin Panel</a>
							<?php else : ?>
							<a href="<?= base_url('Home/index') ?>" title="Borma Shop">
								B<span class="fas fa-store"></span>rma
							</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<?php if ($this->session->userdata('userPenjual') != "") : ?>
								<?php foreach ($menu as $m) : ?>
								<?php if ($m['menu'] == "Produk") : ?>
								<li class="drop"><a href="shop-grid.html"><?= $m['menu']; ?></a>
									<div class="megamenu mega01">
										<ul class="item item01">
											<li><a href="<?= base_url('Penjual/CreateProduk'); ?>">Tambah Produk</a></li>
											<li><a href="<?= base_url('Penjual/DaftarProduk'); ?>">Pengelolaan Produk</a></li>
										</ul>
									</div>
								</li>
								<?php else : ?>
								<li class="drop"><a href="<?= base_url($m['url']); ?>"><?= $m['menu']; ?></a>
								</li>
								<?php endif; ?>
								<?php endforeach; ?>
								<?php elseif ($this->session->userdata('useradmin') != "") : ?>
								<li><a href="#!">Overview</a></li>
								<li><a href="#!" class="modal-trigger" data-target="produk">Kategori</a></li>
								<li><a href="#!" class="modal-trigger" data-target="brand">Brand</a></li>
								<?php else : ?>
								<li class="drop"><a href="shop-grid.html">Kategori</a>
									<div class="megamenu mega04">
										<?php foreach ($menuKategori as $mk) : ?>
										<ul class="item item03">
											<li class="title"><?= $mk['tipe_item']; ?></li>
											<?php foreach ($subMenuKategori as $smk) : ?>
											<?php if ($smk['id'] == $mk['id']) : ?>
											<li><a href="shop-grid.html"><?= $smk['nama_item']; ?></a></li>
											<?php endif; ?>
											<?php endforeach; ?>
										</ul>
										<?php endforeach; ?>
									</div>
								</li>
								<?php endif; ?>

							</ul>
						</nav>


					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<?php if ($this->session->userdata('userPenjual') != null && $this->session->userdata('useradmin') != null) : ?>
							<li>
								<form id="search_mini_form" action="#">
									<div class="field__search">
										<input type="text" placeholder="Cari Produk & Brand">
										<div class="action">
											<a href="#"><i class="zmdi zmdi-search"></i></a>
										</div>
									</div>
								</form>
							</li>

							<li class="setting__bar__icon"><a href="<?= base_url('Admin/index') ?>" title="Admin"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 Produk</span>
											<span>Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.html">Lanjut Pembayaran</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/images/product/sm-img/1.jpg') ?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/images/product/sm-img/3.jpg') ?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/images/product/sm-img/2.jpg') ?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart.html">Tampil & Edit Keranjang</a>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<?php endif; ?>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<?php if ($this->session->userdata('userPenjual') != "") : ?>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Akun Penjual</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Profil Toko</a></span>
														<span><a href="<?= base_url('Penjual/Dashboard'); ?>">Dashboard</a></span>
														<span><a href="#">Pengaturan Akun</a></span>
														<span><a href="<?= base_url('Penjual/logout'); ?>">Logout</a></span>
													</div>
												</div>
											</div>
										</div>
										<?php elseif ($this->session->userdata('useradmin') != "") : ?>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Hi, Admin</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span>
															<a href="">Profil Toko</a>
														</span>
														<span>
															<a href="">Pengaturan Akun</a>
														</span>
														<span>
															<a href="<?= base_url('Admin/logout'); ?>">Logout</a>
														</span>
													</div>
												</div>
											</div>
										</div>
										<?php else : ?>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Akun Pembeli</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="<?= base_url('Penjual/index'); ?>">Login</a></span>
														<span><a href="<?= base_url('Penjual/index'); ?>">Daftar Akun</a></span>
													</div>
												</div>
											</div>
											<strong class="label switcher-label">
												<span>Akun Penjual</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="<?= base_url('Penjual/index'); ?>">Login</a></span>
														<span><a href="<?= base_url('Penjual/index'); ?>">Daftar Akun</a></span>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="about.html">About Page</a></li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="cart.html">Cart Page</a></li>
										<li><a href="checkout.html">Checkout Page</a></li>
										<li><a href="wishlist.html">Wishlist Page</a></li>
										<li><a href="error404.html">404 Page</a></li>
										<li><a href="faq.html">Faq Page</a></li>
										<li><a href="team.html">Team Page</a></li>
									</ul>
								</li>
								<li><a href="shop-grid.html">Shop</a>
									<ul>
										<li><a href="shop-grid.html">Shop Grid</a></li>
										<li><a href="single-product.html">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a>
									<ul>
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">
				</div>
				<!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->