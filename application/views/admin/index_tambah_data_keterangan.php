  <!-- Begin Page Content -->
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Tambah Data Keterangan</h4>
    <div class="row">
      <div class="col-lg-12 text-right px-4">
        <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index') ?>">Kembali ke halaman admin</a>
      </div>
    </div>
    <hr class="sidebar-divider">

    <form action="<?= base_url('Admin/tambah_data_keterangan/' . $kode); ?>" method="post">
      <div class="col-lg-5 mb-3 mb-sm-0 mt-2">
        <label class="font-weight-bold" for="nama_barang">Keterangan</label>
        <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
        <?= form_error('nama_barang', '<small class="text-danger ml-2">', '</small>'); ?>
        <button type="submit" class="btn btn-sm btn-primary btn-user mt-3">Tambah Keterangan</button>
    </form>
  </div>


  <!-- End of Main Content -->