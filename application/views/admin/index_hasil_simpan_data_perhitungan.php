  <!-- Begin Page Content -->
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Data Perhitungan Profile Matching</h4>

    <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/cari_data_perhitungan/') . $key; ?>">
      <i class="far fa-hand-point-left"></i> Kembali ke Tabel Pembobotan
    </a>
    <a class="btn btn-sm btn-primary" href="<?= base_url('Admin'); ?>">
      Kembali ke halaman Admin <i class="far fa-hand-point-right"></i>
    </a>
    <hr class="sidebar-divider">

    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive mt-2" style="font-size: 12px;">
          <table class="text-center table table-bordered" id="dataTable1">
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
              foreach ($data_by_key as $pm) : ?>
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
              foreach ($data_by_key as $pm) : ?>
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
            <thead class="font-weight-bold">
              <tr>
                <th class="table-primary" colspan="8">Tabel NI & Hasil</th>
              </tr>
              <tr class="table-warning">
                <th class="table-primary">No</th>
                <th class="table-primary">Kode Barang</th>
                <th class="table-primary">Nama Barang</th>
                <th class="table-primary">NI</th>
                <th class="table-primary">Hasil</th>
                <th class="table-primary">Kesimpulan</th>
                <th class="table-primary">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              for ($i = 0; $i < count($data_by_key); $i++) :  ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $data_by_key[$i]['kode_barang']; ?></td>
                  <td><?= $data_by_key[$i]['nama_barang']; ?></td>
                  <td><?= $data_by_key[$i]['NI']; ?></td>
                  <td><?= $data_by_key[$i]['hasil']; ?></td>
                  <td><?= $data_by_key[$i]['kesimpulan']; ?></td>
                  <td>
                    <?php
                    echo ($data_by_key[$i]['keterangan']); ?>
                  </td>
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
  </script>
  <!-- End of Main Content -->