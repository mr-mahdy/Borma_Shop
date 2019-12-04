<?php
$pesan = $this->session->flashdata('pesan');
if ($pesan) : ?>
<div style="position:relative;z-index:100; padding:20px 20px 50px;background: white;width:40%; left:30%; border: 2px solid silver" class="kotakPesan">
    <span style="position:absolute;right:0;" class="closePesan">X</span>
    <center><i class="fas fa-3x fa-times-circle"></i></center>
    <center>
        <p style="color:blue;font-size:20px;font-weight:500"><?= $pesan; ?></p>
    </center>

</div>
<?php endif; ?>

<form method="post" action="<?= base_url('Penjual/updateProduk'); ?>" enctype="multipart/form-data" id="formProduk2">
    <input type="hidden" name="id" value="<?= $produk['id'] ?>">
    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Informasi Produk</h4>
            <hr>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="gambarProduk">Gambar Produk</label><span class="wajib">Wajib</span>
                    <p>Format gambarnya adalah jpg, jpeg, dan png.</p><br>
                    <p>Ukuran minimal 600x400px</p>
                </div>
                <div class="col-lg-10">
                    <img src="<?= base_url() ?>/uploadImg/<?= $produk['image'] ?>" alt="" width="100"><br>
                    <input type="file" name="image" id="gambarProduk">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="namaProduk">Nama Produk</label><span class="wajib">Wajib</span>
                    <p>Tulis nama produk sesuai jenis, merek dan rincian produk</p>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="name" id="namaProduk" class="form-control" placeholder="Masukkan Nama Produk" value="<?= $produk['name'] ?>">
                    <small class="text-danger"><?= form_error('name'); ?></small>

                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="namaProduk">Kategori</label><span class="wajib">Wajib</span>
                </div>
                <div class="col-lg-10">
                    <select name="category" id="kategori" class="form-control">
                        <?php foreach ($menuKategori as $mk) : ?>
                        <?php if ($produk['category'] == $mk['tipe_item']) : ?>
                        <option value="<?= $mk['tipe_item']; ?>" selected><?= $mk['tipe_item']; ?></option>
                        <?php else : ?>
                        <option value="<?= $mk['tipe_item']; ?>"><?= $mk['tipe_item']; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?= form_error('category'); ?></small>
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
                <div class="col-lg-3 pesanan">
                    <input type="number" name="min_order" id="pesananMin" class="form-control" placeholder="Masukkan Pesanan Minimum / Buah" value="<?= $produk['min_order'] ?>">
                    <small class="text-danger"><?= form_error('min_order'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="harga">Harga</label><span class="wajib">Wajib</span>
                </div>
                <div class="col-lg-10 harga">
                    <span>Rp. </span>
                    <input type="number" name="price" id="harga" class="form-control" placeholder="Masukkan Harga Produk" value="<?= $produk['price'] ?>">
                    <small class="text-danger"><?= form_error('price'); ?></small>
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
                    <label for="warna">Warna</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="color" class="form-control warna2" placeholder="Custom Warna" value="<?= $produk['color'] ?>">
                            <small class="text-danger"><?= form_error('color'); ?></small>
                        </div>
                    </div>

                    <label for="ukuran">Ukuran</label>
                    <div class="row form-group">
                        <div class="col-lg-6 harga">
                            <input type="text" name="size" class="form-control" placeholder="Ukuran" value="<?= $produk['size'] ?>">
                            <small class="text-danger"><?= form_error('size'); ?></small>
                        </div>
                    </div>

                    <label for="berat">Berat</label>
                    <div class="row">
                        <div class="col-lg-2">
                            <input type="text" name="weight" class="form-control" placeholder="Masukkan Berat" value="<?= $produk['weight'] ?>">
                            <small class="text-danger"><?= form_error('weight'); ?></small>
                        </div>
                        <div class="col-lg-3">
                            <select name="unit_weight" class="form-control">
                                <?php foreach ($satuan as $s) : ?>
                                <?php if ($s == $produk['unit_weight']) : ?>
                                <option value="<?= $s; ?>" selected><?= $s; ?></option>
                                <?php else : ?>
                                <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endif; ?>
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
                <div class="col-lg-3 harga">
                    <input type="number" name="stock" id="stok" class="form-control" placeholder="Masukkan  Jumlah Stok Produk" value="<?= $produk['stock'] ?>">
                    <small class="text-danger"><?= form_error('stock'); ?></small>
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
                            <?php if ($produk['condition'] == "Baru") : ?>
                            <input type="radio" name="condition" value="Baru" id="baru" checked>
                            <?php else : ?>
                            <input type="radio" name="condition" value="Baru" id="baru">
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2">
                            <label for="bekas">Bekas</label>
                            <?php if ($produk['condition'] == "Bekas") : ?>
                            <input type="radio" name="condition" value="Bekas" id="bekas" checked>
                            <?php else : ?>
                            <input type="radio" name="condition" value="Bekas" id="bekas">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <small class="text-danger"><?= form_error('condition'); ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="deskripsi">Deskripsi Produk</label>
                    <p>Deskripsikan produk secara lengkap & jelas. Rekomendasi panjang > 200 karakter</p>
                </div>
                <div class="col-lg-10 harga">
                    <textarea name="description" class="form-control"><?= $produk['description'] ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="row btnProduk">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
            <a href="<?= base_url('Penjual/daftarProduk'); ?>" class="btn">Batal</a>
            <button type="submit" class="btn" id="simpan">Simpan</button>
        </div>
    </div>
</form>