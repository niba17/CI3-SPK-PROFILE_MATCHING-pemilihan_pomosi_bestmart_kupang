  <!-- Begin Page Content -->
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Data Akun</h1>
      <hr class="sidebar-divider">
      <?php if (isset($_SESSION['message_tambah'])) : ?>
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data berhasil ditambahkan!',
            // footer: '<a href="">Why do I have this issue?</a>'
          });
        </script>
      <?php unset($_SESSION['message_tambah']);
      endif; ?>
      <?php if (isset($_SESSION['message_gagal_tambah'])) : ?>
        <script>
          Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data gagal ditambahkan!',
            // footer: '<a href="">Why do I have this issue?</a>'
          });
        </script>
      <?php unset($_SESSION['message_gagal_tambah']);
      endif; ?>
      <?php if (isset($_SESSION['message_ubah'])) : ?>
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data berhasil diubah!',
            // footer: '<a href="">Why do I have this issue?</a>'
          });
        </script>
      <?php unset($_SESSION['message_ubah']);
      endif; ?>

      <a class="btn btn-sm btn-primary mr-1" href="<?= base_url("Admin/index_tambah_data/") . $topbar; ?>">Tambah Data Akun <i class="fa-solid fa-user-plus"></i></a>
      <a class="btn btn-sm btn-primary" href="<?= base_url("Admin/index_akun") ?>">Refresh <i class="fas fa-sync"></i></a>

      <div class="table-responsive mt-2" style="font-size:12px;">
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $tabel = 'admin';
            $no = 1;
            foreach ($semua['admin'] as $a) : ?>
              <tr>
                <td class="text-center m-0 font-weight-bold"><?= $no++; ?></td>
                <td class="text-center"><?= $a['username'] ?></td>
                <td class="text-center"><?= $a['email'] ?></td>
                <td class="text-center">
                  <a href="<?= base_url('Admin/index_ubah_data/') . $tabel . '/' . $a['id']; ?>" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa-sm text-white-50"></i><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="hapus('<?= $tabel ?>','<?= $a['id'] ?>')"><i class="fa-sm text-white-50"></i><i class="fa-solid fa-trash-can"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
  <script>
    function hapus(tabel, id) {
      Swal.fire({
        icon: 'question',
        title: 'Yakin ingin menghapus?',
        showDenyButton: true,
        // showCancelButton: true,
        confirmButtonText: 'Ya',
        denyButtonText: `Batal`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {

          window.location.replace(baseUrl + 'Admin/hapus_data/' + tabel + '/' + id);
          // Swal.fire('Berhasil!', '', 'success')
        }
        // else if (result.isDenied) {
        //   Swal.fire('Dibatalkan ', '', 'info')
        // }
      });
    }
  </script>
  <!-- End of Main Content -->