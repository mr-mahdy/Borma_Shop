<!-- Start Shop Page -->
<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    <div class="container mt--50">
        <div class="row">
            <div class="col-lg-3">
                <p>Home / Produk</p>
            </div>
            <div class="col-lg-4">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Cari Produk">
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt--20">
            <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
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
                            <li><a href="#"><?= $k['tipe_item']; ?> <span>(<?= $jmlK; ?>)</span></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                    <aside class="wedget__categories pro--range">
                        <h3 class="wedget__title">Filter by price</h3>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                                <form action="#" method="GET">
                                    <div id="slider-range"></div>
                                    <div class="slider__range--output">
                                        <div class="price__output--wrap">
                                            <div class="price--output">
                                                <span>Price :</span><input type="text" id="amount" readonly="">
                                            </div>
                                            <div class="price--filter">
                                                <a href="#">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-12 order-1 order-lg-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                            <div class="shop__list nav justify-content-center" role="tablist">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
                            </div>
                            <p>Hasil Pencarian : 40</p>
                            <div class="orderby__wrapper">
                                <span>Sort berdasarkan</span>
                                <select class="shot__byselect">
                                    <?php foreach ($kategori as $k) : ?>
                                    <option><a href="#"><?= $k['tipe_item']; ?></a></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab__container">
                    <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                        <div class="row">
                            <!-- Start Single Product -->
                            <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="images/books/1.jpg" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
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
                            <!-- End Single Product -->
                        </div>
                        <ul class="wn__pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
                        <div class="list__view__wrapper">
                            <!-- Start Single Product -->
                            <div class="list__view">
                                <div class="thumb">
                                    <a class="first__img" href="single-product.html"><img src="images/product/1.jpg" alt="product images"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="images/product/2.jpg" alt="product images"></a>
                                </div>
                                <div class="content">
                                    <h2><a href="single-product.html">Ali Smith</a></h2>
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <ul class="prize__box">
                                        <li>$111.00</li>
                                        <li class="old__prize">$220.00</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <ul class="cart__action d-flex">
                                        <li class="cart"><a href="cart.html">Add to cart</a></li>
                                        <li class="wishlist"><a href="cart.html"></a></li>
                                        <li class="compare"><a href="cart.html"></a></li>
                                    </ul>

                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->