<!-- cart-main-area start -->
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container mt--50">
        <div class="row">
            <div class="col-lg-2">Home / Keranjang</div>
        </div>
        <div class="row mt--20">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content wnro__table table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->cart->contents() as $item) : ?>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt="product img"></a></td>
                                        <td class="product-name"><a href="#"><?= $item['name']; ?></a></td>
                                        <td class="product-price"><span class="amount">Rp. <?= number_format($item['price'], 0, ',', '.') ?></span></td>
                                        <td class="product-quantity"><?= $item['qty']; ?></td>
                                        <td class="product-subtotal">Rp. <?= number_format($item['subtotal'], 0, ',', '.') ?></td>
                                        <td class="product-remove"><a href="<?= base_url('Keranjang/removeKeranjang/') . $item['rowid'] ?>">X</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="cartbox__btn">
                    <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                        <li class="mr-3"><a href="<?= base_url('Pembayaran/index') ?>">Pembayaran</a></li>
                        <li class="mr-3"><a href="<?= base_url('Home/index') ?>">Lanjut Belanja</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cart__total__amount">
                        <span>Total</span>
                        <span>Rp. <?= $this->cart->format_number($this->cart->total()); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->