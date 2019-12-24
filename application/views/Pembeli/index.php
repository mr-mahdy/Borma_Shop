<form method="post" action="<?= base_url('Pembeli/updateProfil'); ?>" enctype="multipart/form-data" id="formProduk2">
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
                    <label for="name">Nama Pembeli</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="name" id="name" class="form-control" value="<?= $pembeli['name']; ?>">
                    <small class="text-danger"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="email">Email</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="email" id="email" class="form-control" value="<?= $pembeli['email'] ?>">
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
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                </div>
                <div class="col-lg-7">
                    <select name="jenis_kelamin" id="jenis_kelamin" style="display:block;margin-left:3px;" class="form-control">
                        <option disabled selected>Pilih jenis kelamin</option>
                        <?php if ($pembeli['jenis_kelamin'] == 'P') : ?>
                            <option value="P" selected>P</option>
                            <option value="L">L</option>
                        <?php elseif ($pembeli['jenis_kelamin'] == 'L') : ?>
                            <option value="P">P</option>
                            <option value="L" selected>L</option>
                        <?php else : ?>
                            <option value="P">P</option>
                            <option value="L">L</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="tgl_lhr">Tanggal Lahir</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="tgl_lhr" id="tgl_lhr" class="form-control" value="<?= $pembeli['tgl_lhr'] ?>">
                    <small class="text-danger"><?= form_error('tgl_lhr'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="telepon">No Telepon</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" name="telepon" id="telepon" class="form-control" value="<?= $pembeli['telepon'] ?>">
                    <small class="text-danger"><?= form_error('telepon'); ?></small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-2">
                    <label for="alamat">Alamat</label>
                </div>
                <div class="col-lg-4">
                    <textarea name="alamat" id="alamat" class="form-control"><?= $pembeli['alamat'] ?></textarea>
                    <small class="text-danger"><?= form_error('alamat'); ?></small>
                </div>
            </div>
        </div>
    </div>
    <div class="row btnProduk">
        <div class="col-lg-10"></div>
        <div class="col-lg-2">
            <a href="<?= base_url('Home/index'); ?>" class="btn">Batal</a>
            <button type="submit" class="btn" id="simpan">Simpan</button>
        </div>
    </div>
</form>