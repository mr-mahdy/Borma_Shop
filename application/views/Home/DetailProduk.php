<!-- Start main Content -->
<div class="container mt--150">
    <div class="row">
        <div class="col-lg-3">
            <p>Home / Detail Produk</p>
        </div>
    </div>
    <div class="row mt--20">
        <div class="col-lg-9 col-12">
            <div class="wn__single__product">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="wn__fotorama__wrapper">
                            <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                <a href=""><img src="<?= base_url() . 'uploadImg/' . $produk['image'] ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="product__info__main">
                            <h1><?= $produk['name']; ?></h1>
                            <p>Penjual : <?= $penjual['name']; ?></p>
                            <div class="product-reviews-summary d-flex">
                                <ul class="rating-summary d-flex">
                                    <li><i class="zmdi zmdi-star-outline"></i></li>
                                    <li><i class="zmdi zmdi-star-outline"></i></li>
                                    <li><i class="zmdi zmdi-star-outline"></i></li>
                                    <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                    <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                </ul>
                            </div>
                            <div class="price-box">
                                <span>Rp. <?= number_format($produk['price'], 0, ',', '.'); ?></span>
                            </div>
                            <div class="product__overview">
                                <p>OVERVIEW PRODUK</p>
                                <p>Kondisi : <?= $produk['condition']; ?></p>
                                <p>Warna : <?= $produk['color']; ?></p>
                                <p>Berat : <?= $produk['weight'] . ' ' . $produk['unit_weight'] ?></p>
                                <p>Stok : <?= $produk['stock']; ?></p>
                            </div>
                            <div class="box-tocart d-flex">
                                <span>Jumlah</span>
                                <input id="qty" class="input-text qty" name="qty" min="<?= $produk['min_order'] ?>" value="<?= $produk['min_order'] ?>" title="Qty" type="number">
                                <div class="addtocart__actions">
                                    <a class="tocart btn btn-success" href="<?= base_url('keranjang/addKeranjang/') . $produk['id'] ?>" title="Tambah Ke Keranjang">Tambah</a>
                                </div>
                                <div class="product-addto-links clearfix">
                                    <a class="wishlist" href="#"></a>
                                </div>
                            </div>
                            <div class="product_meta">
                                <span class="posted_in">Kategori:
                                    <a href="#"><?= $produk['category']; ?></a>
                                </span>
                            </div>
                            <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-twitter icons"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-tumblr icons"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-facebook icons"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-linkedin icons"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__info__detailed">
                <div class="pro_details_nav nav justify-content-start" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Detail</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Review</a>
                </div>
                <div class="tab__container">
                    <!-- Start Single Tab Content -->
                    <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                        <div class="description__attribute">
                            <p><?= $produk['description']; ?></p>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                    <!-- Start Single Tab Content -->
                    <div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                        <div class="review__attribute">
                            <h1>Review Pembeli</h1>
                            <h2>Hastech</h2>
                            <div class="review__ratings__type d-flex">
                                <div class="review-ratings">
                                    <div class="rating-summary d-flex">
                                        <span>Kualitas</span>
                                        <ul class="rating d-flex">
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="rating-summary d-flex">
                                        <span>Harga</span>
                                        <ul class="rating d-flex">
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="rating-summary d-flex">
                                        <span>Nilai</span>
                                        <ul class="rating d-flex">
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review-content">
                                    <p>Hastech</p>
                                    <p>Review by Hastech</p>
                                    <p>Posted on 11/6/2018</p>
                                </div>
                            </div>
                        </div>
                        <div class="review-fieldset">
                            <h2>Review Produk:</h2>
                            <h3>Chaz Kangeroo Hoodie</h3>
                            <div class="review-field-ratings">
                                <div class="product-review-table">
                                    <div class="review-field-rating d-flex">
                                        <span>Kualitas</span>
                                        <ul class="rating d-flex">
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-field-rating d-flex">
                                        <span>Harga</span>
                                        <ul class="rating d-flex">
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="review-field-rating d-flex">
                                        <span>Nilai</span>
                                        <ul class="rating d-flex">
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_form_field">
                                <div class="input__box">
                                    <span>Nama</span>
                                    <input id="nickname_field" type="text" name="nickname">
                                </div>
                                <div class="input__box">
                                    <span>Rangkuman</span>
                                    <input id="summery_field" type="text" name="summery">
                                </div>
                                <div class="input__box">
                                    <span>Review</span>
                                    <textarea name="review"></textarea>
                                </div>
                                <div class="review-form-actions">
                                    <button>Simpan Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Tab Content -->
                </div>
            </div>
            <div class="wn__related__product pt--80 pb--50">
                <div class="section__title text-center">
                    <h2 class="title__be--2">Produk Terkait</h2>
                </div>
                <div class="row mt--60">
                    <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                        <!-- Start Single Product -->
                        <?php foreach ($allProduk as $pb) : ?>
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
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
            <div class="shop__sidebar">
                <aside class="wedget__categories poroduct--cat">
                    <h3 class="wedget__title">Kategori Produk</h3>
                    <ul>
                        <?php foreach ($kategori as $k) : ?>
                            <?php $jmlK = 0; ?>
                            <?php foreach ($allProduk as $produk) : ?>
                                <?php if ($k['tipe_item'] == $produk['category']) : ?>
                                    <?php $jmlK++; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <li><a href="<?= base_url() ?>home/gridproduk/<?= $k['tipe_item'] ?>"><?= $k['tipe_item']; ?> <span>(<?= $jmlK; ?>)</span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
                <aside class="wedget__categories pro--range">
                    <h3 class="wedget__title">Filter Berdasarkan Harga</h3>
                    <div class="content-shopby">
                        <div class="price_filter s-filter clear">
                            <div id="slider-range"></div>
                            <div class="slider__range--output">
                                <form method="post" action="<?= base_url('Home/filter') ?>">
                                    <div class="price--output">
                                        <span>Harga : </span><input type="text" id="amount" name="filter-price">
                                    </div>
                                    <div class="price--filter">
                                        <button type="submit">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End main Content -->