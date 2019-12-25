<!-- Start Checkout Area -->

<section class="wn__checkout__area section-padding--lg bg__white">
    <?php if ($this->session->flashdata('msg')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $this->session->flashdata('msg'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php elseif ($this->session->flashdata('msg1')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= $this->session->flashdata('msg1'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('pembayaran/addInvoice') ?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Detail Pemesanan</h3>
                        <div class="customar__field">
                            <div class="input_box">
                                <label>Nama Lengkap<span>*</span></label>
                                <input name="name" type="text" value="<?= $pembeli['name'] ?>">
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="input_box">
                                <label>Email<span>*</span></label>
                                <input name="email" type="text" value="<?= $pembeli['email'] ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="input_box">
                                <label>Alamat <span>*</span></label>
                                <input type="text" name="alamat" value="<?= $pembeli['alamat'] ?>">
                                <small class="text-danger"><?= form_error('alamat'); ?></small>
                            </div>
                            <div class="input_box">
                                <label>Telepon <span>*</span></label>
                                <input type="telp" name="telp" value="<?= $pembeli['telepon'] ?>">
                                <small class="text-danger"><?= form_error('telp'); ?></small>
                            </div>
                            <div class="input_box">
                                <label>Jasa Pengiriman<span>*</span></label>
                                <select class="select__option" name="pengiriman">
                                    <option disabled selected>Pilih Jasa Pengiriman</option>
                                    <option value="JNE">JNE</option>
                                    <option value="J&T Express">J&T Express</option>
                                    <option value="TIKI">TIKI</option>
                                    <option value="POS Indonesia">POS Indonesia</option>
                                </select>
                            </div>
                            <div class="input_box">
                                <label>Jenis Pembayaran <span>*</span></label>
                                <select class="select__option" name="pembayaran">
                                    <option disabled selected>Pilih Jenis Pembayaran</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="COD">Cash On Delivery</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__order__box">
                        <h3 class="onder__title">Jumlah</h3>
                        <ul class="order__total">
                            <li>Produk</li>
                            <li>Total</li>
                        </ul>
                        <ul class="order_product">
                            <?php foreach ($this->cart->contents() as $item) : ?>
                                <li><?= $item['name']; ?> × <?= $item['qty']; ?><span>Rp. <?= number_format($item['subtotal'], 0, ',', '.') ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="total__amount">
                            <li>Total Pemesanan <span>Rp. <?= $this->cart->format_number($this->cart->total()); ?></span></li>
                        </ul>

                        <ul class="order__total">
                            <li><button type="submit" class="btn btn-pesan">Pesan</button></li>
                            <li><a class="btn btn-kembali" href="<?= base_url('Home/index') ?>">Kembali</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- End Checkout Area -->