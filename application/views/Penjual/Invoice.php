<div class="row" id="data">


    <div class="col-lg-12">
        <h5>Pemesanan Produk</h5>
    </div>
    <div class="col-lg-12">
        <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('pesan'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php elseif ($this->session->flashdata('pesan1')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('pesan1'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <!-- data -->
        <table class="table table-striped">
            <tr class="thead-dark">
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Jasa Pengiriman</th>
                <th>Jenis Pembayaran</th>
                <th>Aksi</th>
            </tr>
            <?php if (!empty($invoice)) : ?>
                <?php foreach ($invoice as $inv) : ?>
                    <tr>
                        <td><img src="<?= base_url() . 'uploadImg/' . $inv['image'] ?>" alt="Produk" width="100"></td>
                        <td><?= $inv['name'] ?></td>
                        <td><?= $inv['jumlah'] ?></td>
                        <td><?= $inv['alamat']; ?></td>
                        <td><?= $inv['telepon'] ?></td>
                        <td><?= $inv['jasa_pengiriman'] ?></td>
                        <td><?= $inv['jenis_pembayaran'] ?></td>
                        <td>
                            <?php if ($inv['status'] == 'Kirim') : ?>
                                <span class="badge badge-success">Pengiriman Berhasil</span>
                            <?php else : ?>
                                <a href='<?= base_url("Penjual/kirimProduk/{$inv['id']}") ?>' class="badge badge-primary">Kirim</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">Pemesanan produk tidak ada.</td>
                </tr>
            <?php endif; ?>
        </table>

        <!-- Akhir data -->
    </div>
</div>