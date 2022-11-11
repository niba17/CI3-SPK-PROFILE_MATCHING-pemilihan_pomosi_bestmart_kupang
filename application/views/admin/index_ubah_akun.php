  <!-- Begin Page Content -->
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Ubah Data Akun</h4>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
      <div class="col-lg-12 text-right px-4">
        <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_akun') ?>">Kembali ke halaman akun</a>
      </div>
    </div>
    <hr class="sidebar-divider">

    <form action="<?= base_url('Admin/index_ubah_akun'); ?>" method="post">
      <input type="hidden" name="id" value="<?= $id ?>">
      <div class="col-lg-5 mb-3 mb-sm-0 mt-2">
        <label class="font-weight-bold" for="username">Username</label>
        <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= $username ?>">
        <?= form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>
        <br>
        <label class="font-weight-bold" for="password">Password</label>
        <input type="password" class="form-control form-control-user" id="password" name="password">
        <?= form_error('password', '<small class="text-danger ml-2">', '</small>'); ?>
        <br>
        <label class="font-weight-bold" for="password2">Konfirmasi Password</label>
        <input type="password" class="form-control form-control-user" id="password2" name="password2">
        <?= form_error('password2', '<small class="text-danger ml-2">', '</small>'); ?>
        <br>
        <button type="submit" class="btn btn-sm btn-primary mt-3">Ubah Data Akun</button>
      </div>
  </div>
  </form>
  <!-- End of Main Content -->