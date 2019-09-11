<div class="row" id="data">
    <?php
    $msg = $this->session->flashdata('msg');
    $msg2 = $this->session->flashdata('msg2');
    if ($msg != null) : ?>
    <p class="text-success"><?= $msg; ?> </p>
    <?php elseif ($msg2 != null) : ?>
    <p class="text-success"><?= $msg2; ?> </p>
    <?php endif; ?>
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
    <br>
    <div class="col-lg-12">
        <h5>Overview Produk</h5>
    </div>
    <div class="col-lg-12">
        <!-- data -->
        <table class="table table-striped">
            <tr class="thead-dark">
                <th>No.</th>
                <th>Gambar Produk</th>
                <th>Judul Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Tampilan</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($allProduk as $produk) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><img src="<?= base_url() . 'uploadImg/' . $produk['gambar'] ?>" alt="Produk" width="100"></td>
                <td><?= $produk['nama_produk'] ?></td>
                <td><?= $produk['kategori'] ?></td>
                <td>Rp. <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                <td><?= $produk['stok'] ?></td>
                <td><a href="" class="badge badge-success">View</a></td>
                <td>
                    <a href='<?= base_url("Penjual/editProduk/{$produk['id']}") ?>' class="badge badge-primary">Edit</a>
                    <a href='<?= base_url("Penjual/deleteProduk/{$produk['id']}") ?>' class="badge badge-danger" onclick="return confirm('Apakah ingin menghapus Produk')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Akhir data -->
    </div>
</div>