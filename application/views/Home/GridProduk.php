<!-- Start Shop Page -->

<div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
    <div class="container mt--50">
        <div class="row">
            <div class="col-lg-3">
                <p>Home / Produk</p>
            </div>
            <div class="col-lg-4">
                <form action="<?= base_url('Home/search') ?>" method="post">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Cari Produk" aria-label="Search">
                    <button class="btn btn-success" type="submit" style="margin-left:370px;margin-top:-62px;height: 38px;">Search</button>
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
                                <?php $kp = $k['tipe_item']; ?>
                                <li><a href="<?= base_url() ?>home/gridproduk/<?= $kp ?>"><?= $kp; ?> <span>(<?= $jmlK; ?>)</span></a></li>
                            <?php endforeach; ?>
                        </ul>
                        </ul>
                    </aside>
                    <aside class="wedget__categories pro--range">
                        <h3 class="wedget__title">Filter Berdasarkan Harga</h3>
                        <div class="content-shopby">
                            <div class="price_filter s-filter clear">
                                <div id="slider-range"></div>
                                <div class="slider__range--output">
                                    <div class="price__output--wrap">
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
                            <p>Hasil Pencarian : <?= count($produkKategori); ?></p>
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
                            <?php foreach ($produkKategori as $pk) : ?>
                                <!-- Start Single Product -->
                                <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <div class="product__thumb">
                                        <a class="first__img" href="<?= base_url("Home/detailProduk/{$pk['id']}") ?>">
                                            <img src="<?= base_url() . 'uploadImg/' . $pk['image'] ?>" alt="product image" height="250">
                                        </a>
                                        <div class="hot__box">
                                            <span class="hot-label">Baru</span>
                                        </div>
                                    </div>
                                    <div class="product__content content--center">
                                        <h4><a href="single-product.html"><?= $pk['name']; ?></a></h4>
                                        <ul class="prize d-flex">
                                            <li>Rp. <?= number_format($pk['price'], 0, ',', '.') ?></li>
                                        </ul>
                                        <div class="action">
                                            <div class="actions_inner">
                                                <ul class="add_to_links">
                                                    <li><a class="cart" href="<?= base_url('keranjang/addKeranjang/') . $pk['id'] ?>"><i class="bi bi-shopping-bag4"></i></a></li>
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
                            <?php endforeach; ?>
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
                            <?php foreach ($produkKategori as $pk) : ?>
                                <!-- Start Single Product -->
                                <div class="list__view">
                                    <div class="thumb">
                                        <a class="first__img" href="<?= base_url("GridProduk/detailProduk/{$pk['id']}") ?>"><img src="<?= base_url() . 'uploadImg/' . $pk['image'] ?>" alt="product images"></a>

                                    </div>
                                    <div class="content">
                                        <h2><a href="single-product.html"><?= $pk['name']; ?></a></h2>
                                        <ul class="rating d-flex">
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li class="on"><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="prize__box">
                                            <li>Rp. <?= number_format($pk['price'], 0, ',', '.') ?></li>

                                        </ul>
                                        <p><?= $pk['description'] ?></p>
                                        <ul class="cart__action d-flex">
                                            <li class="cart"><a href="<?= base_url('keranjang/addKeranjang/') . $pk['id'] ?>">Add to cart</a></li>
                                            <li class="wishlist"><a href="cart.html"></a></li>
                                            <li class="compare"><a href="cart.html"></a></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- End Single Product -->
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Shop Page -->