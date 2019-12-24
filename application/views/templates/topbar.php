<!-- Header -->
<header id="wn__header" class="header__area header__absolute sticky__header">
	<div class="container-fluid">
		<div class="row">
			<!-- Logo Borma -->
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<div class="logo">
					<a href="<?= base_url('Home/index') ?>" title="Borma Shop">
						B<span class="fas fa-store"></span>rma
					</a>
				</div>
			</div>

			<!-- Menu Kategori dan Sub Kategori -->
			<!-- searching -->
			<div class="col-lg-8 d-none d-lg-block">
				<br><br>
				<nav class="mainmenu__nav" style="display: inline;">
					<ul class="meninmenu d-flex justify-content-start">
						<!-- Jika loginnya pembeli atau yang belum login tampilkan menu keranjang -->
						<?php if ($this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == null) : ?>
							<li class="drop"><a>Kategori</a>
								<div class="megamenu mega01">
									<ul class="item item01">
										<?php foreach ($menuKategori as $mk) : ?>
											<?php $k = $mk["tipe_item"]; ?>
											<li class="title"><a href="<?= base_url() ?>home/gridproduk/<?= $k ?>"><?= $k; ?></a></li>
										<?php endforeach; ?>
									</ul>
								</div>
							</li>
						<?php endif; ?>
					</ul>
				</nav>

				<form action="<?= base_url('Home/search') ?>" method="post" class="form">
					<div class="navbar-form">
						<input style="width:300px; display: inline;" class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari Produk" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</div>
				</form>
			</div>


			<!-- Menu Login dan Registrasi -->
			<div class="col-md-6 col-sm-6 col-6 col-lg-2">
				<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
					<!-- Jika yang Loginnya pembeli atau belum login maka
						tampilan menunya ada keranjang dan wishlist  -->
					<?php if ($this->session->userdata('role_id') == 2) : ?>

						<!-- Wishlist -->
						<li class="wishlist"><a href="#"></a></li>

						<!-- Keranjang -->
						<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
							<!-- Isi dari Keranjangnya -->
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
							<!-- End Isi dari Keranjangnya -->
						</li>
					<?php endif; ?>


					<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
						<div class="searchbar__content setting__block">
							<div class="content-inner">
								<!-- Menu Akun Setelah Login  -->
								<?php if ($this->session->userdata('role_id') == 1) : ?>
									<div class="switcher-currency">
										<strong class="label switcher-label">
											<span>Akun Penjual</span>
										</strong>
										<div class="switcher-options">
											<div class="switcher-currency-trigger">
												<div class="setting__menu">
													<span><a href="<?= base_url('Penjual/index'); ?>">Dashboard</a></span>
													<span><a href="<?= base_url('Penjual/logout'); ?>">Logout</a></span>
												</div>
											</div>
										</div>
									</div>
								<?php elseif ($this->session->userdata('role_id') == 2) : ?>
									<div class="switcher-currency">
										<strong class="label switcher-label">
											<span>Akun Pembeli</span>
										</strong>
										<div class="switcher-options">
											<div class="switcher-currency-trigger">
												<div class="setting__menu">
													<span><a href="#">Profil Pembeli</a></span>
													<div class=datapembeli id=datapembeli>
													<ul>
                    								<li>Nama : <?= $pembeli['name']; ?></li>
                  									<li>Email : <?= $pembeli['email']; ?></li>
                  									<li>Tanggal Dibuat : <?= $pembeli['date_created']; ?></li>
													  </ul>
													  </div>
												<span><a href="<?= base_url('Pembeli/index'); ?>">Pengaturan Akun</a></span>
												<span><a href="<?= base_url('Pembeli/logout'); ?>">Logout</a></span>
												</div>
											</div>
										</div>
									</div>
								<?php else : ?>
									<!-- Menu Akun Sebelum Login -->
									<div class="switcher-currency">
										<strong class="label switcher-label">
											<span>Akun</span>
										</strong>
										<div class="switcher-options">
											<div class="switcher-currency-trigger">
												<div class="setting__menu">
													<span><a href="<?= base_url('Auth/index'); ?>">Login</a></span>
													<span><a href="<?= base_url('Auth/index'); ?>">Daftar Akun</a></span>
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

		<!-- Jika menu dibuka di Mobile -->
		<!-- <div class="row d-none">
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
		<div class="mobile-menu d-block d-lg-none">
		</div> -->
		<!-- Jika menu dibuka di Mobile -->
	</div>
</header>
<!-- //Header -->