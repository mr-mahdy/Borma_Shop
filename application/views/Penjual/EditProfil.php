<form method="post" action="<?= base_url('Penjual/updateProfil'); ?>" enctype="multipart/form-data" id="formProduk2">
    <div class="row formProduk mt--50">
        <div class="col-lg-12">
            <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('pesan'); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row formProduk">
        <div class="col-lg-12" id="formProduk">
            <h4>Informasi Profil</h4>
            <hr>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="image">Gambar Profil</label>
                </div>
                <div class="col-lg-10">
                    <img src="<?= base_url() . '/uploadImg/' . $penjual['image'] ?>" width="100"><br>
                    <input type="file" name="image" id="image">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="name">Nama Penjual</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="name" id="name" class="form-control" value="<?= $penjual['name'] ?>">
                    <small class="text-danger"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="email">Email</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="email" id="email" class="form-control" value="<?= $penjual['email'] ?>">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="password">Password</label>
                    <p class="text-danger">Konfirmasi Perubahan Data</p>
                </div>
                <div class="col-lg-4">
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                </div>
            </div>
        </div>
    </div>
    <div class="row btnProduk">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
            <a href="<?= base_url('Penjual/index'); ?>" class="btn">Batal</a>
            <button type="submit" class="btn" id="simpan">Simpan</button>
        </div>
    </div>
</form>