    <!-- Form Kontak Penjual -->
    <div class="row" id="formKontak">
        <div class="col-lg-4"></div>
        <div class="col-lg-4" style="padding:10px;">
            <h6>Informasi Kontak Penjual</h6><br>
            <form action="<?= base_url('Penjual/insertKontakPenjual') ?>" method="post">
                <div class="form-group">
                    <input type="text" name="nama_penjual" placeholder="Nama Lengkap Penjual" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="alamat" id="" placeholder="Alamat Penjual" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <select name="kota_penjual" id="" style="display:block;margin-left:3px;" class="form-control">
                        <option disabled selected>Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Semarang">Semarang</option>
                        <option value="Bali">Bali</option>
                        <option value="Medan">Medan</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Pontianak">Pontianak</option>
                        <option value="Makassar">Makassar</option>
                        <option value="Jayapura">Jayapura</option>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-light align-center">Simpan</button>
            </form>
        </div>

    </div>
    <!-- Akhir Form Kontak Penjual -->