  <!-- Begin Page Content -->
  <?php if (isset($_SESSION['message_tambah'])) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Keterangan berhasil ditambahkan!',
        timer: 1500
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_tambah']);
  endif; ?>
  <?php if (isset($_SESSION['message_ubah'])) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Keterangan berhasil diubah!',
        timer: 1500
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_ubah']);
  endif; ?>
  <?php if (isset($_SESSION['message_hapus'])) : ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Keterangan berhasil dihapus!',
        timer: 1500
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_hapus']);
  endif; ?>
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Data Perhitungan Profile Matching</h4>
    <?php if (isset($_SESSION['message_simpan'])) : ?>
      <script>
        Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: 'Data berhasil disimpan!',
          // footer: '<a href="">Why do I have this issue?</a>'
        });
      </script>
    <?php unset($_SESSION['message_simpan']);
    endif; ?>

    <a class="btn btn-sm btn-primary mt-2" href="<?= base_url('Admin/index_submit/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI); ?>">
      <i class="far fa-hand-point-left"></i> Kembali ke Tabel Pembobotan
    </a>
    <a class="btn btn-sm btn-primary mt-2" href="<?= base_url('Admin'); ?>">
      Kembali ke halaman Admin <i class="far fa-hand-point-right"></i>
    </a>
    <div class="row col">
      <a class="btn btn-sm btn-primary mt-2" href="<?= base_url('Admin/cetak') ?>">
        <i class="fa fa-print"></i> Print
      </a>
      <form action="<?= base_url('Admin/index_profile_matching/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI) ?>" method="post">
        <button class="btn btn-sm btn-primary mt-2 ml-2">
          <input name="simpan" type="hidden" value="true">
          <input type="hidden" name="date1" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                    echo (date("d-M-Y")); ?>">
          <input type="hidden" name="date2" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                    echo (date("H:i:s")); ?>">
          <i class="far fa-save"></i> Simpan
        </button>
      </form>
      </form>
    </div>
    <hr class="sidebar-divider">

    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive mt-2" style="font-size: 12px;">
          <table class=" text-center table table-bordered" id="dataTable1">
            <thead class="font-weight-bold">
              <tr>
                <th class="table-primary" colspan="9">Tabel Nilai Pembobotan GAP</th>
              </tr>
              <tr class="table-warning">
                <th class="table-primary">No</th>
                <th class="table-primary">Kode Barang</th>
                <th class="table-primary">Nama Barang</th>
                <th class="table-primary">Modal</th>
                <th class="table-primary">Penjualan</th>
                <th class="table-primary">Waktu</th>
                <th class="table-primary">M</th>
                <th class="table-primary">P</th>
                <th class="table-primary">W</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($profile_matching as $pm) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $pm['kode_barang']; ?></td>
                  <td><?= $pm['nama_barang']; ?></td>
                  <td><?= 'Rp. ' . number_format($pm['modal']) . ',-' ?></td>
                  <td><?= 'Rp. ' . number_format($pm['penjualan']) . ',-' ?></td>
                  <td><?= $pm['waktu'] . ' Hari'; ?></td>
                  <td><?= $pm['bobot_modal']; ?></td>
                  <td><?= $pm['bobot_penjualan']; ?></td>
                  <td><?= $pm['bobot_waktu']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive mt-2" style="font-size: 12px;">
          <table class="text-center table table-bordered" id="dataTable2">
            <thead class="font-weight-bold">
              <tr>
                <th class="table-primary" colspan="11">Tabel Perhitugan GAP, NCF & NSF</th>
              </tr>
              <tr class="table-warning">
                <th class="table-primary">No</th>
                <th class="table-primary">Kode Barang</th>
                <th class="table-primary">Nama Barang</th>
                <th class="table-primary">GAP M</th>
                <th class="table-primary">GAP P</th>
                <th class="table-primary">GAP W</th>
                <th class="table-primary">M</th>
                <th class="table-primary">P</th>
                <th class="table-primary">W</th>
                <th class="table-primary">NCF</th>
                <th class="table-primary">NSF</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($profile_matching as $pm) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $pm['kode_barang']; ?></td>
                  <td><?= $pm['nama_barang']; ?></td>
                  <td><?= $pm['GAP_M']; ?></td>
                  <td><?= $pm['GAP_P']; ?></td>
                  <td><?= $pm['GAP_W']; ?></td>
                  <td><?= $pm['GAP_M_fix']; ?></td>
                  <td><?= $pm['GAP_P_fix']; ?></td>
                  <td><?= $pm['GAP_W_fix']; ?></td>
                  <td><?= $pm['NCF']; ?></td>
                  <td><?= $pm['NSF']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive mt-2" style="font-size: 12px;">
          <table class="text-center table table-bordered" id="dataTable3">
            <thead class="font-weight-bold" style="vertical-align: middle;">
              <tr>
                <th class="table-primary" colspan="8">Tabel NI & Hasil</th>
              </tr>
              <tr class="table-warning">
                <th class="table-primary">No</th>
                <th class="table-primary">Kode Barang</th>
                <th class="table-primary">Nama Barang</th>
                <th class="table-primary">NI (Nilai Total)</th>
                <th class="table-primary">Hasil Akhir</th>
                <th class="table-primary">Kesimpulan</th>
                <th class="table-primary">Keterangan</th>
                <th class="table-primary" style="width:200px;">Aksi Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              for ($i = 0; $i < count($profile_matching); $i++) : ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $profile_matching[$i]['kode_barang']; ?></td>
                  <td><?= $profile_matching[$i]['nama_barang']; ?></td>
                  <td><?= '((' . $presentasi_NCF . ' / 100) * ' . $profile_matching[$i]['NCF'] . ') +  ((' . $presentasi_NSF . ' / 100) * ' . $profile_matching[$i]['NSF'] . ') = <b>' . $profile_matching[$i]['NI'] . '</b>'; ?></td>
                  <td><?= '((' . $presentasi_NCF2 . ' / 100) * ' . $profile_matching[$i]['NCF'] . ') + ((' . $presentasi_NSF2 . ' / 100) * ' . $profile_matching[$i]['NSF'] . ') + ((' . $presentasi_NI . ' / 100) * ' . $profile_matching[$i]['NI'] . ') = <b>' . $profile_matching[$i]['hasil'] . '</b>'; ?></td>
                  <td><?= $profile_matching[$i]['kesimpulan']; ?></td>
                  <td id='tambahKet<?= $profile_matching[$i]['id_barang']; ?>'><?= $profile_matching[$i]['keterangan']; ?></td>
                  <td>
                    <div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalTambah<?= $profile_matching[$i]['id_barang']; ?>"><i class="fa-solid fa-plus"></i></div>

                    <div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalUbah<?= $profile_matching[$i]['id_barang']; ?>"><i class="fa-solid fa-pen-to-square"></i></div>

                    <div href="#" class="btn btn-sm btn-primary" onclick="hapusKet('<?= $profile_matching[$i]['id_barang'] ?>','<?= $presentasi_NCF ?>','<?= $presentasi_NSF ?>','<?= $presentasi_NCF2 ?>','<?= $presentasi_NSF2 ?>','<?= $presentasi_NI ?>')"><i class="fa-solid fa-trash-can"></i></div>

                    <div class="modal fade" id="modalTambah<?= $profile_matching[$i]['id_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keterangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form role="form" action="<?= base_url('Admin/tambahKet/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI) ?>" method="post">
                              <label for="recipient-name" class="col-form-label">Kode Barang : <?= $profile_matching[$i]['kode_barang']; ?></label>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-user text-center" id="tambahKet<?= $profile_matching[$i]['id_barang']; ?>" name="tambahKet" value="<?= $profile_matching[$i]['keterangan']; ?>">
                                <input type="hidden" class="form-control form-control-user text-center" id="id" name="id" value="<?= $profile_matching[$i]['id_barang']; ?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah Keterangan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="modalUbah<?= $profile_matching[$i]['id_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Keterangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form role="form" action="<?= base_url('Admin/ubahKet/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI) ?>" method="post">
                              <label for="recipient-name" class="col-form-label">Kode Barang : <?= $profile_matching[$i]['kode_barang']; ?></label>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-user text-center" id="ubahKet<?= $profile_matching[$i]['id_barang']; ?>" name="ubahKet" value="<?= $profile_matching[$i]['keterangan']; ?>">
                                <input type="hidden" class="form-control form-control-user text-center" id="id" name="id" value="<?= $profile_matching[$i]['id_barang']; ?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Ubah Keterangan</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <a class="btn btn-primary btn-sm" href="<?= base_url('Admin/index_profile_matching/') . 'perhitungan_pm_smntr' . '/' . $profile_matching[$i]['id_barang'] . '/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI ?>"><i class="fa-solid fa-trash"></i></a> -->



                    <!-- <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_profile_matching/') . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI . $key2 = 'hapus' . '/' . $id2 = $profile_matching[$i]['id_barang']; ?>"><i class="fa-solid fa-trash-can"></i></a> -->
                    <!-- 
                    <button type="button" onclick="hps(<?= $profile_matching[$i]['id_barang']; ?>)" class="btn btn-primary btn-sm"><i class="fa-solid fa-trash"></i></button> -->

                    <!-- <form action="<?= base_url('Admin/tambahKet/' . $presentasi_NCF . '/' . $presentasi_NSF . '/' . $presentasi_NCF2 . '/' . $presentasi_NSF2 . '/' . $presentasi_NI) ?>" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user text-center" id="tambahKet<?= $profile_matching[$i]['id_barang']; ?>" name="tambahKet" value="<?= $profile_matching[$i]['keterangan']; ?>">
                        <input type="hidden" class="form-control form-control-user text-center" id="id" name="id" value="<?= $profile_matching[$i]['id_barang']; ?>">
                      </div> -->
                  </td>
                  <!-- <td> -->
                  <!-- <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen"></i></button>
                    <button type="button" onclick="hps(<?= $profile_matching[$i]['id_barang']; ?>)" class="btn btn-primary btn-sm"><i class="fa-solid fa-trash"></i></button>
                    </form> -->
                  <!-- </td> -->
                </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#dataTable1').dataTable();
    });
    $(document).ready(function() {
      $('#dataTable2').dataTable();
    });
    $(document).ready(function() {
      $('#dataTable3').dataTable();
    });


    function hapusKet(id, ncf, nsf, ncf2, nsf2, ni) {
      Swal.fire({
        title: 'Yakin ingin Menghapus Keterangan?',
        // text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.replace(baseUrl + 'Admin/hapusKet/' + id + '/' + ncf + '/' + nsf + '/' + ncf2 + '/' + nsf2 + '/' + ni);
        }
      })
    }
  </script>
  <!-- End of Main Content -->