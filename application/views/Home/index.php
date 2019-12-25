<!-- Start Slider area -->
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
	<!-- Start Single Slide -->
	<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider__content">
						<div class="contentbox">
							<h2>Belanja <span>Murah</span></h2>
							<h2><span>Setiap </span> Saat</h2>
							<a class="shopbtn" href="#">Beli Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Slide -->
	<!-- Start Single Slide -->
	<div class="slide animation__style10 bg-image--2 fullscreen align__center--left">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider__content">
						<div class="contentbox">
							<h2>Belanja <span>Murah</span></h2>
							<h2><span>Setiap </span> Saat</h2>
							<a class="shopbtn" href="#">Beli Sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Single Slide -->
</div>
<!-- End Slider area -->

<!-- Produk Baru -->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">Produk <span class="color--theme">Baru</span></h2>
				</div>
			</div>
		</div>
		<!-- Start Single Tab Content -->
		<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
			<!-- Start Single Product -->
			<?php foreach ($produkBaru as $pb) : ?>
				<?php if (date('m', $pb['date_upload']) >= (date('m', time()) - 1)) : ?>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?= base_url("Home/detailProduk/{$pb['id']}") ?>">
									<img src="<?= base_url() . 'uploadImg/' . $pb['image'] ?>" alt="product image" height="250">
								</a>
								<div class="hot__box">
									<span class="hot-label">Baru</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html"><?= $pb['name']; ?></a></h4>
								<ul class="prize d-flex">
									<li>Rp. <?= number_format($pb['price'], 0, ',', '.') ?> </li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="<?= base_url('keranjang/addKeranjang/') . $pb['id'] ?>"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
			<!-- Start Single Product -->
		</div>
	</div>
	<!-- End Single Tab Content -->
	</div>
</section>
<!-- end Produk Baru -->

<!-- Produk Laris -->
<section class="wn__product__area brown--color pt--80  pb--30">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section__title text-center">
					<h2 class="title__be--2">Produk <span class="color--theme">Terlaris</span></h2>
				</div>
			</div>
		</div>
		<!-- Start Single Tab Content -->
		<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
			<!-- Start Single Product -->
			<?php foreach ($produkBaru as $pb) : ?>
				<?php if (date('m', $pb['date_upload']) >= (date('m', time()) - 2)) : ?>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="<?= base_url("Home/detailProduk/{$pb['id']}") ?>">
									<img src="<?= base_url() . 'uploadImg/' . $pb['image'] ?>" alt="product image" height="250">
								</a>
								<div class="hot__box">
									<span class="hot-label">Terlaris</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html"><?= $pb['name']; ?></a></h4>
								<ul class="prize d-flex">
									<li>Rp. <?= number_format($pb['price'], 0, ',', '.') ?> </li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="<?= base_url('keranjang/addKeranjang/') . $pb['id'] ?>"><i class="bi bi-shopping-bag4"></i></a></li>
											<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
			<!-- Start Single Product -->
		</div>

		<!-- End Single Tab Content -->
	</div>
</section>
<!-- End Produk Laris -->

</div>
<!-- //Main wrapper -->