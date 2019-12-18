<!-- Footer Area -->
<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
    <div class="footer-static-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__widget footer__menu">
                        <div class="ft__logo">
                            <a href="<?= base_url('Home/index'); ?>" style="font-size: 50px;font-weight: bolder;">
                                B<span class="fas fa-store"></span>rma
                            </a>
                            <p>Alamat : Jl. Dr. Setiabudi No. 156 Hergamanah, Kota Bandung, Jawa Barat</p>
                        </div>
                        <div class="footer__content">
                            <ul class="social__net social__net--2 d-flex justify-content-center">
                                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                <li><a href="#"><i class="bi bi-google"></i></a></li>
                                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                            </ul>
                            <ul class="mainmenu d-flex justify-content-center">
                                <li><a href="<?= base_url('Home/index'); ?>">Home</a></li>
                                <li><a href="<?= base_url('Auth/index'); ?>">Login</a></li>
                                <li><a href="<?= base_url('Home/gridproduk/0'); ?>">Semua Produk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright">
                        <div class="copy__right__inner text-left">
                            <p>Copyright <i class="fa fa-copyright"></i> <?= date('Y'); ?> | Borma Shop</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="payment text-right">
                        <img src="<?= base_url('assets/images/icons/payment.png') ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer Area -->



<!-- JS Files -->
<script src="<?= base_url('assets/js/vendor/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/plugins.js') ?>"></script>
<script src="<?= base_url('assets/js/active.js') ?>"></script>
<script src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>



</body>

</html>