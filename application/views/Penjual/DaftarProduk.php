<div class="row" id="data">


    <div class="col-lg-12">
        <h5>Overview Produk</h5>
    </div>
    <div class="col-lg-12">
        <?php if ($this->session->flashdata('msg')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('msg'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <!-- data -->
        <table class="table table-striped">
            <tr class="thead-dark">
                <th>No.</th>
                <th>Gambar Produk</th>
                <th>Judul Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php if (!empty($allProduk)) : ?>
                <?php foreach ($allProduk as $produk) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img src="<?= base_url() . 'uploadImg/' . $produk['image'] ?>" alt="Produk" width="100"></td>
                        <td><?= $produk['name'] ?></td>
                        <td><?= $produk['category'] ?></td>
                        <td>Rp. <?= number_format($produk['price'], 0, ',', '.') ?></td>
                        <td><?= $produk['stock'] ?></td>
                        <td>
                            <a href='<?= base_url("Penjual/editProduk/{$produk['id']}") ?>' class="badge badge-primary">Edit</a>
                            <a href="<?= base_url("Penjual/deleteProduk/{$produk['id']}"); ?>" class="badge badge-danger" onclick="return confirm('Apakah ingin menghapus Produk')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">Produk penjual tidak ada.</td>
                </tr>
            <?php endif; ?>
        </table>

        <!-- Akhir data -->
    </div>
</div>