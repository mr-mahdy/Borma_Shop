<!-- Form Login Admin -->
<div class="container mt--150" id="admin">
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <h4>Admin Login</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4" id="kotak">
            <form action="<?= base_url('Admin/login'); ?>" method="post"><br>
                <?php if ($msg = $this->session->flashdata('msg')) : ?>
                <center>
                    <p class="text-danger" style="font-size:14px;"><?= $msg ?></p>
                </center>
                <?php endif; ?>

                <div class="form-group mb-4">
                    <label for="useradmin">Username</label>
                    <input type="text" name="useradmin" class="form-control" required>
                    <label for="passadmin">Password</label>
                    <input type="password" name="passadmin" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Login</button><br><br>
                <center><a href="#!">Lupa Password</a></center>
            </form>
        </div>
        <div class="col-lg-8">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum tempora maiores, amet accusantium modi deserunt, officiis voluptas asperiores totam, nam pariatur voluptates doloremque temporibus quisquam? Assumenda saepe consequuntur sint eligendi aliquam quasi beatae vel exercitationem officia. Labore accusamus voluptate, qui quaerat consequuntur vitae a laborum quia eum rem error voluptates reprehenderit! Doloremque odit harum consectetur officia iusto? Suscipit, quas adipisci!</p>
            <div class="row kotak text-center">
                <div class="col-lg-3">
                    <h1><span class="fas fa-users"></span></h1>
                    <h6>Mengatur Pengguna</h6>
                </div>
                <div class="col-lg-3">
                    <h1><span class="fas fa-users"></span></h1>
                    <h6>Mengatur Penjual</h6>
                </div>
                <div class="col-lg-3">
                    <h1><span class="fas fa-gift"></span></h1>
                    <h6>Mengatur Penjualan</h6>
                </div>
                <div class="col-lg-3">
                    <h1><span class="fas fa-cubes"></span></h1>
                    <h6>Mengatur Barang</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/jquery.js') ?>"></script>
<script src="<?= base_url('assets/materialize/js/materialize.js'); ?>"></script>