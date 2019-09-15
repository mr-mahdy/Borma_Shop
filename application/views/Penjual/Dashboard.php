<!-- Top Bar -->
<!-- <nav style="background: rgb(95, 220, 45);height:35px;line-height:35px">
        <div class="nav-wrapper">

            <ul class="left">
                <li><a href="#!" class="dropdown-trigger" data-target="user"><span class="fas fa-user"></span> Hi, User</a></li>

                <ul class="dropdown-content" id="user">
                    <li><a href=""><span class="fas fa-store"> Profil Toko</a></li>
                    <li><a href=""><span class="fas fa-cog"> Pengaturan Akun</a></li>
                    <li><a href=""><span class="fas fa-sign-out-alt"> Logout</a></li>
                </ul>

                <li><a href=""><span class="fas fa-phone-alt"></span> Bantuan & Kontak</a></li>
            </ul>

            <ul class="right">
                <li><a href=""><span class="fas fa-cubes"></span> Penjualan</a></li>
                <li><a href=""><span class="fas fa-bell"></span> Notifikasi</a></li>
                <li><a href=""><span class="fas fa-shopping-cart"></span> Keranjang</a></li>
            </ul>

        </div>
    </nav> -->
<!-- Akhir Top Bar -->

<!-- Menu Bar -->
<div class="container">
    <h5 style="margin-top:100px; margin-left:30px">Pusat Penjual ( <?= $penjual['nama_toko']; ?> )</h5>
    <br>
    <!-- Akhir Menu Bar -->

    <!-- data -->
    <div class="row">
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak">
                <center>
                    <h6 class="white-text">Pesan Belum dibaca</h6>
                    <h5 style="color:silver">52</h5>
                </center>
            </div>
        </div>
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak">
                <center>
                    <h6 class="white-text">Menunggu Pengiriman</h6>
                    <h5 style="color:silver">3</h5>
                </center>
            </div>
        </div>
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak">
                <center>
                    <h6 class="white-text">Penjualan Hari Ini</h6>
                    <h5 style="color:silver">120</h5>
                </center>
            </div>
        </div>
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak">
                <center>
                    <h6 class="white-text">FeedBack Hari ini</h6>
                    <h5 style="color:silver">20</h5>
                </center>
            </div>
        </div>
    </div>
    <!-- Akhir data -->

    <!-- Task & Penjualan -->
    <div class="row">
        <div class="col 14 m4 s12" style="padding:10px;">
            <div class="kotak center-align" style="border: 1px solid rgb(95, 220, 45);">
                <h6 class="white-text" style="margin: 0;background:rgb(95, 220, 45);padding:5px">Task</h6>
                <ul id="set_task" style="color:silver;padding-left:15px;line-height:30px" class="left-align">
                    <li><a href="">Pesan <span class="badge badge-danger">5</span></a></li>
                    <li><a href="">Pengiriman <span class="badge badge-danger">5</span></a></li>
                    <li><a href="">FeedBack <span class="badge badge-danger">5</span></a></li>
                </ul>

            </div>

            <!-- Tools Penjualan -->
            <div class="kotak center-align" style="border: 1px solid rgb(95, 220, 45);margin-top:10px">
                <h6 class="white-text" style="margin: 0;background:rgb(95, 220, 45);padding:5px">Alat Penjualan</h6>
                <ul id="set_task" style="color:silver;padding-left:15px;line-height:30px" class="left-align">
                    <li><a href="">Profil Toko ( <?= $penjual['nama_toko']; ?> )</a></li>
                    <li><a href="">Lihat Katalog Toko</a></li>
                    <li><a href="">Pengaturan Profil ( <?= $penjual['nama_toko']; ?> )</a></li>
                    <li><a href="">Buat Penjualan</a></li>
                    <li><a href="">Performa Toko</a></li>
                </ul>
            </div>
            <!--  Akhir Tools Penjualan -->

        </div>

        <!-- Penjualan -->
        <div class="col 18 m8 s12" style="padding:10px;">
            <div style="border:1px solid rgb(95, 220, 45);">
                <h6 class="white-text" style="margin: 0;background:rgb(95, 220, 45);padding:5px">Penjualan</h6>
                <div class="row text-center">
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Hari ini</h6>
                        <h5>Rp. 500.000</h5><br>
                    </div>
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Minggu ini</h6>
                        <h5>Rp. 500.000</h5><br>
                    </div>
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Bulan ini</h6>
                        <h5>Rp. 500.000</h5><br>
                    </div>
                    <div class="col 12 m3 s6">
                        <h6 class="mt--20">Tahun ini</h6>
                        <h5>Rp. 500.000</h5><br>
                    </div>
                </div>
            </div>

            <!-- Feedback -->
            <div class="kotak center-align" style="border: 1px solid rgb(95, 220, 45);margin-top:10px">
                <h6 class="white-text" style="margin: 0;background:rgb(95, 220, 45);padding:5px">Feedback Bulan ini</h6>
                <ul id="set_task" style="color:silver;padding-left:15px;line-height:30px" class="left-align">
                    <li><a href="">Positive <span class="badge badge-success">60</span></a></li>
                    <li><a href="">Negative <span class="badge badge-danger">60</span></a></li>
                </ul>
                <hr>
                <ul id="set_task" style="color:silver;padding-left:15px;line-height:30px" class="left-align">
                    <li><a href="">Satu Feedback</a></li>
                    <li><a href="">Satu Feedback</a></li>
                    <li><a href="">Satu Feedback</a></li>
                </ul>
            </div>
            <!--  Akhir Feedback -->

        </div>
        <!-- Akhir Penjualan -->

    </div>
    <!--  Akhir Task & Penjualan -->
</div>