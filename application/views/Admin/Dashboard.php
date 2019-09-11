<br>

<!-- modal produk -->
<div class="modal" id="produk">
    <div class="modal-content">
        <div class="row">
            <div class="col-lg-11">
                <h6><span class="fas fa-2x fa-cubes"></span> Tambah Kategori</h6>
            </div>
            <div class="col-lg-1"><span class="modal-close"><b>X</b></span></div>
        </div>

        <br>
        <div class="form-group">
            <label for="nama_produk">Nama Kategori</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control">
        </div>
        <input type="hidden" value="produk">
        <button type="button" class="btn waves-effect waves-light btnsimpan">Simpan</button>

    </div>
</div>
<!-- akhir modal produk -->

<!-- modal brand -->
<div class="modal" id="brand">
    <div class="modal-content">
        <div class="row">
            <div class="col-lg-11">
                <h6><span class="fas fa-2x fa-cubes"></span> Tambah Brand</h6>
            </div>
            <div class="col-lg-1">
                <span class="right modal-close"><b>X</b></span>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="">Kategori</label>
            <div id="item_data"></div>
        </div>
        <div class="form-group">
            <label for="nama_brand">Nama Brand</label>
            <input type="text" name="nama_brand" id="nama_brand" class="form-control">
        </div>
        <input type="hidden" value="brand">
        <button type="button" class="btn waves-effect waves-light btnsimpan">Simpan</button>

    </div>
</div>
<!-- akhir modal brand -->

<!-- data -->
<div id="adminD">
    <div class="row mt--100 ">
        <div class="col-lg-12">
            <p>Selamat Datang Admin di Dashboard Toko Online</p>
        </div>
    </div>
    <div class="row text-center mt--10">
        <div class="col-lg-3 " style="padding: 5px;">
            <div class="kotak">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="jmlPenjual">
                            <h4>0</h4>
                        </div>
                        <h6><a href="<?= base_url('Admin/penjual') ?>">Penjual</a></h6>
                    </div>
                    <div class="col-lg-4">
                        <h4>
                            <span class="fas fa-2x fa-users"></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak center-align">
                <div class="row white-text">
                    <div class="col-lg-8">
                        <div id="jmlProduk">
                            <h4>100000</h4>
                        </div>

                        <h6><a href="#!">Produk</a></h6>
                    </div>
                    <div class="col-lg-4">
                        <h4>
                            <span class="fas fa-2x fa-cubes"></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak center-align">
                <div class="row white-text">
                    <div class="col-lg-8">
                        <h4>1000</h4>
                        <h6><a href="#!">Transaksi</a></h6>
                    </div>
                    <div class="col-lg-4">
                        <h4>
                            <span class="fas fa-2x fa-users"></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3" style="padding: 5px;">
            <div class="kotak center-align">
                <div class="row white-text">
                    <div class="col-lg-8">
                        <h4>Rp. 250.000.000</h4>
                        <h6><a href="#!">Income</a></h6>
                    </div>
                    <div class="col-lg-4">
                        <h4>
                            <span class="fas fa-2x fa-users"></span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir data -->

<!-- Ajax -->
<script src="<?= base_url('assets/ajax/ajax.js') ?>"></script>

<script>
    $(document).ready(function() {
        // ambil semua produk
        getItems()

        function getItems() {
            $.ajax({
                type: 'ajax',
                url: 'getAllProduk',
                success: function(data) {
                    $('#item_data').html(data);
                },
                error: function() {
                    alert('Data tidak ditemukan');
                }
            });
        }

        // ambil jumlah penjual
        countAllPenjual()

        function countAllPenjual() {
            $.ajax({
                type: 'ajax',
                url: 'countAllPenjual',
                success: function(data) {
                    $('#jmlPenjual').html(data);
                },
                error: function() {
                    alert('Data tidak ditemukan');
                }
            });
        }

        // ambil jumlah produk
        countAllProduk()

        function countAllProduk() {
            $.ajax({
                type: 'ajax',
                url: 'countAllProduk',
                success: function(data) {
                    $('#jmlProduk').html(data);
                },
                error: function() {
                    alert('Data tidak ditemukan');
                }

            });
        }
    });
</script>