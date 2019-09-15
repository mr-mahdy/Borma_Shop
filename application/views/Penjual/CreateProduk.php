<?php
$pesan = $this->session->flashdata('pesan');
$pesan2 = $this->session->flashdata('pesan2');
if ($pesan != null) : ?>
<div style="position:relative;z-index:100; padding:20px 20px 50px;background: white;width:40%; left:30%; border: 2px solid silver" class="kotakPesan">
    <span style="position:absolute;right:0;" class="closePesan">X</span>
    <center><i class="fas fa-3x fa-check"></i></center>
    <center>
        <p style="color:blue;font-size:20px;font-weight:500"><?= $pesan; ?></p>
    </center>

</div>
<?php elseif ($pesan2 != null) : ?>
<div style="position:relative;z-index:100; padding:20px 20px 50px;background: white;width:40%; left:30%; border: 2px solid silver" class="kotakPesan">
    <span style="position:absolute;right:0;" class="closePesan">X</span>
    <center><i class="fas fa-3x fa-times-circle"></i></center>
    <center>
        <p style="color:blue;font-size:20px;font-weight:500"><?= $pesan2; ?></p>
    </center>

</div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data" id="formProduk2">
    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Informasi Produk</h4>
            <hr>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="gambarProduk">Gambar Produk</label><span class="wajib">Wajib</span>
                    <p>Format gambarnya adalah jpg, jpeg, dan png</p>
                </div>
                <div class="col-lg-10">
                    <div class="kotakGambar" width="100"></div>
                    <input type="file" name="gambar" id="gambarProduk" required>
                    <div class="errorImg">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="namaProduk">Nama Produk</label><span class="wajib">Wajib</span>
                    <p>Tulis nama produk sesuai jenis, merek dan rincian produk</p>
                </div>
                <div class="col-lg-10">
                    <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="Masukkan Nama Produk" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="namaProduk">Kategori</label><span class="wajib">Wajib</span>
                </div>
                <div class="col-lg-10">
                    <select name="kategori" id="kategori" class="form-control">
                        <option disabled selected>Pilih Kategori</option>
                        <?php foreach ($menuKategori as $mk) : ?>
                        <option value="<?= $mk['tipe_item']; ?>"><?= $mk['tipe_item']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <select name="kategori_sp" id="kategori2" class="form-control" disabled>
                        <option disabled selected>Pilih Kategori Spesifik</option>
                        <?php foreach ($menuKategori as $mk) : ?>
                        <option value="<?= $mk['tipe_item']; ?>"><?= $mk['tipe_item']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="namaProduk">Etalase</label>
                </div>
                <div class="col-lg-10">
                    <select name="kategori" id="kategori" class="form-control">
                        <option disabled selected>Pilih Etalase</option>
                        <?php foreach ($menuKategori as $mk) : ?>
                        <option value="<?= $mk['tipe_item']; ?>"><?= $mk['tipe_item']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Harga</h4>
            <hr>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="pesananMin">Pesanan Minimum / Buah</label><span class="wajib">Wajib</span>
                    <p>Atur jumlah minimum yang harus dibeli untuk produk ini</p>
                </div>
                <div class="col-lg-10 pesanan">
                    <input type="number" name="pesananMin" id="pesananMin" class="form-control" placeholder="Masukkan Pesanan Minimum / Buah" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="harga">Harga</label><span class="wajib">Wajib</span>
                </div>
                <div class="col-lg-10 harga">
                    <span>Rp. </span>
                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga Produk" required>
                </div>
            </div>
        </div>
    </div>

    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Pengelolaan Produk</h4>
            <hr>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label>Varian Produk</label><span class="wajib">Wajib</span>
                    <p>Tambahkan pilihan varian produk berdasarkan kategori</p>
                </div>
                <div class="col-lg-10 warna">
                    <label for="warna">Warna</label><span class="wajib">Wajib</span>
                    <div class="row">
                        <div class="col-lg-4">
                            <select name="warna" id="warna" class="form-control" required>
                                <option disabled selected>Pilih Warna</option>
                                <?php foreach ($warna as $w) : ?>
                                <option value="<?= $w; ?>"><?= $w; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="warna2" class="form-control warna2" placeholder="Custom Warna">
                        </div>
                    </div>

                    <label for="ukuran">Ukuran</label>
                    <div class="row form-group">
                        <div class="col-lg-12 harga">
                            <input type="text" name="ukuran" class="form-control" placeholder="Ukuran" value="">
                        </div>
                    </div>

                    <label for="berat">Berat</label><span class="wajib">Wajib</span>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="berat" class="form-control" placeholder="Masukkan Berat" required>
                        </div>
                        <div class="col-lg-4">
                            <select name="satuan" class="form-control">
                                <?php foreach ($satuan as $s) : ?>
                                <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="stok">Jumlah Stok</label><span class="wajib">Wajib</span>
                    <p>Stok akan berkurang saat pembayaran produk oleh pembeli telah diverifikasi. Jumlah stok tidak ditampilkan pada pembeli</p>
                </div>
                <div class="col-lg-10 harga">
                    <input type="number" name="stok" id="stok" class="form-control" placeholder="Masukkan  Jumlah Stok Produk" required>
                </div>
            </div>
        </div>
    </div>

    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Deskripsi Produk</h4>
            <hr>
            <div class="row form-group kondisi">
                <div class="col-lg-2">
                    <label for="kondisi">Kondisi</label><span class="wajib">Wajib</span>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-2">
                            <label for="baru">Baru</label>
                            <input type="radio" name="kondisi" value="Baru" id="baru">
                        </div>
                        <div class="col-lg-2">
                            <label for="bekas">Bekas</label>
                            <input type="radio" name="kondisi" value="Bekas" id="bekas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="deskripsi">Deskripsi Produk</label><span class="wajib">Wajib</span>
                    <p>Deskripsikan produk secara lengkap & jelas. Rekomendasi panjang > 200 karakter</p>
                </div>
                <div class="col-lg-10 harga">
                    <textarea name="deskripsi" class="form-control" required></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row btnProduk">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
            <a href="<?= base_url('Penjual/Dashboard'); ?>" class="btn">Batal</a>
            <button type="submit" class="btn" id="simpan">Simpan</button>
        </div>
    </div>
</form>