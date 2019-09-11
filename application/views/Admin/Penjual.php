<!-- Judul -->

<div class="row" id="data">
    <?php
    $msg = $this->session->flashdata('msg');
    $msg2 = $this->session->flashdata('msg2');
    if ($msg != null) : ?>
    <p class="text-success"><?= $msg; ?> </p>
    <?php elseif ($msg2 != null) : ?>
    <p class="text-success"><?= $msg2; ?> </p>
    <?php endif; ?>
    <br>
    <div class="col-lg-12">
        <h5>Overview Penjual</h5>
    </div>
    <div class="col-lg-12">
        <!-- data -->
        <table class="table table-striped">
            <tr class="thead-dark">
                <th>No.</th>
                <th>Nama Penjual</th>
                <th>Nama Toko</th>
                <th>Email</th>
                <th>Tanggal Dibuat</th>
                <th>Verifikasi</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($allPenjual as $penjual) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $penjual['nama_penjual'] ?></td>
                <td><?= $penjual['nama_toko'] ?></td>
                <td><?= $penjual['email'] ?></td>
                <td><?= $penjual['tanggal_dibuat'] ?></td>
                <td>
                    <?php if ($penjual['verifikasi'] == "Iya") : ?>
                    <span class="badge badge-success" style="padding: 10px;border-radius:3px;">Terverikasi</span>
                    <?php else : ?>
                    <a href='<?= base_url("Admin/verifikasiPenjual/{$penjual['id']}") ?>' class="badge-primary" onclick="return true">Belum</a>
                    <?php endif; ?>
                </td>
                <td>
                    <a href='<?= base_url("Admin/deletePenjual/{$penjual['id']}") ?>' class="badge badge-danger" onclick="return confirm('Apakah ingin menghapus Penjual')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Akhir data -->
    </div>
</div>

<!-- JQuery -->
<script src="<?= base_url('assets/jquery.js') ?>"></script>

<!-- Ajax -->
<script src="<?= base_url('assets/ajax/ajax.js') ?>"></script>