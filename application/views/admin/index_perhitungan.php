<div class="container-fluid p-3">
  <h4 class="font-weight-bold text-primary">Data Perhitungan</h4>
  <hr class="sidebar-divider">
  <?php if (isset($_SESSION['message_hapus'])) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Data berhasil dihapus!',
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_hapus']);
  endif; ?>

  <!-- Begin Page Content -->

  <?php
  $key = [];
  $index = 0;
  foreach ($semua['perhitungan_pm'] as $d) {
    $key[$index] = $d['tanggal'];
    foreach ($semua['perhitungan_pm'] as $d2) {
      if ($d['tanggal'] != $d2['tanggal']) {
        $index++;
        $key[$index] = $d['tanggal'];
      }
    }
  }
  $fix_key = array_unique($key, SORT_REGULAR);
  // var_dump($fix_key);
  // die;
  ?>

  <div class="table-responsive mt-2" style="font-size: 12px;">
    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
      <thead class="table-primary">
        <tr>
          <th style="width:80px;">No</th>
          <th>Perhitungan</th>
          <th style="width: 100px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0;
        foreach ($fix_key as $f) : ?>
          <tr>
            <td><?= ++$no; ?></td>
            <td><a href="<?= base_url('Admin/cari_data_perhitungan/') . $f; ?>"><?= $f; ?></a></td>
            <td><a class="btn btn-primary btn-sm" href="#" onclick="hapus('perhitungan_pm','<?= $i = $f ?>')"><i class="fa-solid fa-trash-can"></i></a></td>
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