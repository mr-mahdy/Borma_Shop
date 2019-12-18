<!-- Daftar Akun Pembeli -->
<div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
    <div class="container">
        <div class="row indexPenjual">
            <div class="col-lg-4 daftar">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Daftar Akun Pembeli</h3>
                    <?php if ($this->session->flashdata('pesan2')) : ?>
                        <p class="text-danger"><?= $this->session->flashdata('pesan2'); ?></p>
                    <?php endif; ?>
                    <form action="<?= base_url('Auth/registration2'); ?>" method="post" id="daftarAkun">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Nama<span>*</span></label>
                                <input type="text" name="name" id="namaPembeli" value="<?= set_value('name'); ?>">
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="input__box">
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" id="emailD" value="<?= set_value('email'); ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>

                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password" id="pass">
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>
                            <div class="input__box">
                                <label>Re-Password<span>*</span></label>
                                <input type="password" name="password2" id="pass2">
                            </div>
                            <div class="form__btn">
                                <button type="submit" id="btnDaftar">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Akhir Daftar Akun Pembeli -->

            <!-- Login -->
            <div class="col-lg-4 login">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Login</h3>
                    <?php if ($this->session->flashdata('pesanlogin')) : ?>
                        <p class="text-danger"><?= $this->session->flashdata('pesanlogin'); ?></p>
                    <?php endif; ?>
                    <form action="<?= base_url('Auth/index'); ?>" method="post">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email<span>*</span></label>
                                <input type="email" name="emaillogin" value="<?= set_value('emaillogin'); ?>">
                                <small class="text-danger"><?= form_error('emaillogin'); ?></small>
                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="passwordlogin">
                                <small class="text-danger"><?= form_error('passwordlogin'); ?></small>
                            </div>
                            <div class="form__btn">
                                <button type="submit">Login</button>
                                <label class="label-for-checkbox">
                                    <input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
                                    <span>Ingatkan saya</span>
                                </label>
                            </div>
                            <a class="forgot_pass" href="<?= base_url('auth/forgotpassword'); ?>">Lupa password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Akhir Login -->

            <!-- Daftar Akun Penjual -->
            <div class="col-lg-4 daftar">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Daftar Akun Penjual</h3>
                    <?php if ($this->session->flashdata('pesan')) : ?>
                        <p class="text-danger"><?= $this->session->flashdata('pesan'); ?></p>
                    <?php endif; ?>
                    <form action="<?= base_url('Auth/registration1'); ?>" method="post" id="daftarAkun">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Nama<span>*</span></label>
                                <input type="text" name="name" id="namaToko" value="<?= set_value('name'); ?>">
                                <small class="text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="input__box">
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" id="emailD" value="<?= set_value('email'); ?>">
                                <small class="text-danger"><?= form_error('email'); ?></small>

                            </div>
                            <div class="input__box">
                                <label>Password<span>*</span></label>
                                <input type="password" name="password" id="pass">
                                <small class="text-danger"><?= form_error('password'); ?></small>
                            </div>
                            <div class="input__box">
                                <label>Re-Password<span>*</span></label>
                                <input type="password" name="password2" id="pass2">
                            </div>
                            <div class="form__btn">
                                <button type="submit" id="btnDaftar">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Daftar Akun -->

<!-- Konten -->
<div class="row text-center indexPenjual" style="background:white;">
    <div class="col-lg-12">
        <h3><span>Akun</span> Pembeli & Penjual</h3>
        <hr>
        <br><br><br>
    </div>
    <div class="col-lg-6">
        <div>
            <i class="fas fa-users fa-5x"></i>
            <h5>> 15.000 Pembeli</h5>
            <p>Lebih dari 15.000 Akun Pembeli di Borma Shop</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div>
            <i class="fas fa-users fa-5x"></i>
            <h5>> 5.000 Penjual</h5>
            <p>Lebih dari 5.000 Akun Penjual di Borma Shop</p>
        </div>
    </div>
</div>

<div class="row text-center indexPenjual">
    <div class="col-lg-12">
        <h3>Ikuti <span>4</span> Langkah Mudah <span>Memulai</span> Bisnis Mu di <span>Borma Shop</span></h3>
        <hr>
    </div>
</div>

<div class="row text-center">
    <div class="col-lg-6 hijau">
        <div>
            <i class="fas fa-user-plus fa-5x"></i>
            <h5>Daftar Akun</h5>
        </div>
    </div>
    <div class="col-lg-6 putih">
        <div>
            <h5>Buat Akun Mu di Borma Shop</h5>
            <hr>
            <br>
            <p style="text-align:justify;font-weight:500;font-size:16px;padding:0 50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, inventore consequuntur aperiam molestiae libero, possimus corrupti, maiores amet iste molestias quas quis pariatur cumque mollitia harum optio aut maxime tempore odit eos quibusdam. Eius iusto assumenda quisquam maiores voluptates quaerat ab at ratione id cupiditate? Et ipsam magnam aliquid sequi!</p>
        </div>
    </div>
</div>

<div class="row text-center">
    <div class="col-lg-6 putih">
        <div>
            <h5>Upload Produk Mu di Borma Shop</h5>
            <hr>
            <br>
            <p style="text-align:justify;font-weight:500;font-size:16px;padding:0 50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, inventore consequuntur aperiam molestiae libero, possimus corrupti, maiores amet iste molestias quas quis pariatur cumque mollitia harum optio aut maxime tempore odit eos quibusdam. Eius iusto assumenda quisquam maiores voluptates quaerat ab at ratione id cupiditate? Et ipsam magnam aliquid sequi!</p>
        </div>
    </div>

    <div class="col-lg-6 hijau">
        <div>
            <i class="fas fa-upload fa-5x"></i>
            <h5>Upload Produk</h5>
        </div>
    </div>
</div>

<div class="row text-center">
    <div class="col-lg-6 hijau">
        <div>
            <i class="fas fa-cubes fa-5x"></i>
            <h5>Terima Pesanan</h5>
        </div>
    </div>
    <div class="col-lg-6 putih">
        <div>
            <h5>Terima Pesanan Pembeli</h5>
            <hr>
            <br>
            <p style="text-align:justify;font-weight:500;font-size:16px;padding:0 50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, inventore consequuntur aperiam molestiae libero, possimus corrupti, maiores amet iste molestias quas quis pariatur cumque mollitia harum optio aut maxime tempore odit eos quibusdam. Eius iusto assumenda quisquam maiores voluptates quaerat ab at ratione id cupiditate? Et ipsam magnam aliquid sequi!</p>
        </div>
    </div>
</div>

<div class="row text-center">
    <div class="col-lg-6 putih">
        <div>
            <h5>Produk Dikirim ke Pembeli & Terima Bayaran</h5>
            <hr>
            <br>
            <p style="text-align:justify;font-weight:500;font-size:16px;padding:0 50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, inventore consequuntur aperiam molestiae libero, possimus corrupti, maiores amet iste molestias quas quis pariatur cumque mollitia harum optio aut maxime tempore odit eos quibusdam. Eius iusto assumenda quisquam maiores voluptates quaerat ab at ratione id cupiditate? Et ipsam magnam aliquid sequi!</p>
        </div>
    </div>

    <div class="col-lg-6 hijau">
        <div>
            <i class="fas fa-handshake fa-5x white-text"></i>
            <h5>Terima Bayaran</h5>
        </div>
    </div>
</div>
<!-- Akhir Konten -->