  <!-- Begin Page Content -->
  <div class="card-body">
    <h1 class="font-weight-bold text-primary">Data Akun</h1>
    <hr class="sidebar-divider">
    <div class="row no-gutters align-items-center mb-3">
      <i class="fas fa-plus" style="color: Dodgerblue;"></i>
      <div class="text-xs font-weight-bold text-primary mb-1"><a class="ml-2 mr-4" style="font-size: 15px;" href="<?= base_url("Admin/index") ?>">Tambah Data</a></div>
      <i class="fas fa-sync" style="color: Dodgerblue;"></i>
      <div class="text-xs font-weight-bold text-primary mb-1"><a class="ml-2" style="font-size: 15px;" href="<?= base_url("Admin/index") ?>">Refresh</a></div>
    </div>
    <div class="table-responsive w-50">
      <table class="table table-bordered bg-light" id="dataTable" width="100%" cellspacing="0">
        <tr class="text-center m-0 font-weight-bold table-primary">
          <th>No</th>
          <th>Username</th>
          <th>Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($admin as $a) : ?>
          <tr>
            <td class="text-center m-0 font-weight-bold"><?= $no++; ?></td>
            <td class="text-center"><?= $a->username ?></td>
            <td class="text-center">
              <a href="<?= base_url('Ubah/index/') . $a->id; ?>" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-sm text-white-50"></i>Ubah</a>
              <a href="<?= base_url('Hapus/aksiHapus/') . $a->id; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="return confirm('yakin ingin menghapus?')"><i class="fa-sm text-white-50"></i>Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- End of Main Content -->