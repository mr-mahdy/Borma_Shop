<!-- Start Slider area -->
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
	<!-- Start Single Slide -->
	<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="slider__content">
						<div class="contentbox">
							<h2>Tempat <span>Jual</span> dan</h2>
							<h2><span>Beli </span> Produk</h2>
							<h2><span>Terbaik</span></h2>
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
							<h2>Tempat <span>Jual</span> dan</h2>
							<h2><span>Beli </span> Produk</h2>
							<h2><span>Terbaik</span></h2>
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
			<?php if (date('m', $pb['date_upload']) >= (date('m', time()) - 2)) : ?>
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
							<li>Rp. <?= number_format($pb['price'], 0, ',', '.') ?>  </li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/1.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/2.jpg') ?>" alt="product image"></a>
						<div class="hot__box">
							<span class="hot-label">Baru</span>
						</div>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">robin parrish</a></h4>
						<ul class="prize d-flex">
							<li>$35.00</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<!-- Start Single Product -->
			<!-- Start Single Product -->
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/3.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/4.jpg') ?>" alt="product image"></a>
						<div class="hot__box color--2">
							<span class="hot-label">Baru</span>
						</div>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">The Remainng</a></h4>
						<ul class="prize d-flex">
							<li>$35.00</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<!-- Start Single Product -->
			<!-- Start Single Product -->
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/5.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/6.jpg') ?>" alt="product image"></a>
						<div class="hot__box">
							<span class="hot-label">Baru</span>
						</div>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">Bowen Greenwood</a></h4>
						<ul class="prize d-flex">
							<li>$40.00</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<!-- Start Single Product -->
			<!-- Start Single Product -->
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/7.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/8.jpg') ?>" alt="product image"></a>
						<div class="hot__box">
							<span class="hot-label">populer</span>
						</div>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">Lando</a></h4>
						<ul class="prize d-flex">
							<li>$35.00</li>
							<li class="old_prize">$50.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<!-- Start Single Product -->
			<!-- Start Single Product -->
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/9.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/3.jpg') ?>" alt="product image"></a>
						<div class="hot__box">
							<span class="hot-label">Baru</span>
						</div>
					</div>
					<div class="product__content content--center">
						<h4><a href="single-product.html">Doctor Wldo</a></h4>
						<ul class="prize d-flex">
							<li>$35.00</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
			<!-- Start Single Product -->
			<!-- Start Single Product -->
			<div class="product product__style--3">
				<div class="col-lg-3 col-md-4 col-sm-6 col-12">
					<div class="product__thumb">
						<a class="first__img" href="single-product.html"><img src="<?= base_url('assets/images/books/11.jpg') ?>" alt="product image"></a>
						<a class="second__img animation1" href="single-product.html"><img src="<?= base_url('assets/images/books/12.jpg') ?>" alt="product image"></a>
						<div class="hot__box">
							<span class="hot-label">Populer</span>
						</div>
					</div>
					<div class="product__content content--center content--center">
						<h4><a href="single-product.html">Ghost</a></h4>
						<ul class="prize d-flex">
							<li>$50.00</li>
							<li class="old_prize">$35.00</li>
						</ul>
						<div class="action">
							<div class="actions_inner">
								<ul class="add_to_links">
									<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
									<li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
									<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
									<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
				<!-- Start Single Product -->
			</div>
		</div>
		<!-- End Single Tab Content -->
	</div>
</section>
<!-- End Produk Laris -->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
	<!-- Modal -->
	<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal__container" role="document">
			<div class="modal-content">
				<div class="modal-header modal__header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<!-- Start product images -->
						<div class="product-images">
							<div class="main-image images">
								<img alt="big images" src="images/product/big-img/1.jpg">
							</div>
						</div>
						<!-- end product images -->
						<div class="product-info">
							<h1>Simple Fabric Bags</h1>
							<div class="rating__and__review">
								<ul class="rating">
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
									<li><span class="ti-star"></span></li>
								</ul>
								<div class="review">
									<a href="#">4 customer reviews</a>
								</div>
							</div>
							<div class="price-box-3">
								<div class="s-price-box">
									<span class="new-price">$17.20</span>
									<span class="old-price">$45.00</span>
								</div>
							</div>
							<div class="quick-desc">
								Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
							</div>
							<div class="select__color">
								<h2>Select color</h2>
								<ul class="color__list">
									<li class="red"><a title="Red" href="#">Red</a></li>
									<li class="gold"><a title="Gold" href="#">Gold</a></li>
									<li class="orange"><a title="Orange" href="#">Orange</a></li>
									<li class="orange"><a title="Orange" href="#">Orange</a></li>
								</ul>
							</div>
							<div class="select__size">
								<h2>Select size</h2>
								<ul class="color__list">
									<li class="l__size"><a title="L" href="#">L</a></li>
									<li class="m__size"><a title="M" href="#">M</a></li>
									<li class="s__size"><a title="S" href="#">S</a></li>
									<li class="xl__size"><a title="XL" href="#">XL</a></li>
									<li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
								</ul>
							</div>
							<div class="social-sharing">
								<div class="widget widget_socialsharing_widget">
									<h3 class="widget-title-modal">Share this product</h3>
									<ul class="social__net social__net--2 d-flex justify-content-start">
										<li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
										<li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
										<li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
										<li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="addtocart-btn">
								<a href="#">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END QUICKVIEW PRODUCT -->
</div>
<!-- //Main wrapper -->