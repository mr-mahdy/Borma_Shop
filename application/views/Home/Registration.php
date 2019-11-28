<div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
    <div class="container">
        <div class="row indexPenjual">
            <div class="col-lg-4">
                <div class="slider__content">
                    <div class="contentbox">
                        <h5 style="margin-top:50px;font-weight:bolder">Ayo Mulai <span style="color:rgb(95, 220, 45)">Jualan</span> Sekarang Juga <span style="color:rgb(95, 220, 45)">Disini</span></h5>
                        <hr style="width:100px;margin-left:0px;height:2px;background: rgb(95, 220, 45);box-shadow:none;margin-top:20px">
                        <p style="margin-top:30px;text-align:justify;font-weight:500;font-size:16px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis incidunt quo consequuntur quasi itaque dolore. Obcaecati quos doloribus consectetur dolorum iusto aut officia cumque odit numquam alias! Itaque ipsum sapiente ipsam voluptas nesciunt, est ut ullam molestias illo quaerat iure culpa saepe, placeat odio nam aliquam natus autem eum sit!</p>
                        <p style="text-align:justify;font-weight:500;font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptas incidunt exercitationem aspernatur facilis doloremque commodi eos consequuntur illo. Officiis repudiandae illo quidem fugit, veniam quod magni consequatur vero expedita!</p>
                        <a class="shopbtn btnBesar" href="#" style="background: rgb(95, 220, 45);color:white; ">Jual Produk</a>
                    </div>
                </div>
            </div>
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
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <a class="forget_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 daftar">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Daftar Akun</h3>
                    <?php if ($this->session->flashdata('pesan')) : ?>
                    <p class="text-danger"><?= $this->session->flashdata('pesan'); ?></p>
                    <?php endif; ?>
                    <form action="<?= base_url('Auth/registration'); ?>" method="post" id="daftarAkun">
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