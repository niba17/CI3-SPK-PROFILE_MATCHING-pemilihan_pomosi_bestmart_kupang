<!-- Begin Page Content -->
<div class="container-fluid p-3">
  <h4 class="font-weight-bold text-primary mb-3">Data Perhitungan Profile Matching</h4>
  <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_perhitungan'); ?>"><i class="far fa-hand-point-left"></i> Kembali Ke Halaman Perhitungan</a>
  <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_hasil_simpan_perhitungan/') . $key; ?>">Ke Perhitungan Profile Matching <i class="far fa-hand-point-right"></i></a>

  <div class="row">
    <div class="col-lg-6">
      <div class="mt-2 alert alert-info mb-1" role="alert"><b>Total presentasi NCF & NSF untuk perhitungan NI adalah 100</b></div>
    </div>
    <div class="col-lg-6">
      <div class="mt-2 alert alert-info mb-1" role="alert"><b>Total presentasi NCF, NSF & NI untuk perhitungan hasil adalah 100</b></div>
    </div>
  </div>
  <form action="<?= base_url('Admin/index_submit') ?>" method="post">
    <div class="row" style="font-size: 13px;">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-4">
            <label class="font-weight-bold" for="presentasi_NCF">Presentasi NCF (%)</label>
            <input type="number" class="form-control form-control-user" id="presentasi_NCF" name="presentasi_NCF" value="<?= $presentasi_NCF ?>" style="height:33px;" disabled required>
          </div>
          <div class="col-lg-4">
            <label class="font-weight-bold" for="presentasi_NSF">Presentasi NSF (%)</label>
            <input type="number" class="form-control form-control-user" id="presentasi_NSF" name="presentasi_NSF" value="<?= $presentasi_NSF ?>" style="height:33px;" disabled required>
          </div>
        </div>
        <div class="text-danger" id="notifikasi"></div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-3">
            <label class="font-weight-bold" for="presentasi_NCF2">Presentasi NCF (%)</label>
            <input type="number" class="form-control form-control-user" id="presentasi_NCF2" name="presentasi_NCF2" value="<?= $presentasi_NCF2 ?>" style="height:33px;" disabled required>
          </div>
          <div class="col-lg-3">
            <label class="font-weight-bold" for="presentasi_NSF2">Presentasi NSF (%)</label>
            <input type="number" class="form-control form-control-user" id="presentasi_NSF2" name="presentasi_NSF2" value="<?= $presentasi_NSF2 ?>" style="height:33px;" disabled required>
          </div>
          <div class="col-lg-3">
            <label class="font-weight-bold" for="presentasi_NI">Presentasi NI (%)</label>
            <input type="number" class="form-control form-control-user" id="presentasi_NI" name="presentasi_NI" value="<?= $presentasi_NI ?>" style="height:33px;" disabled required>
          </div>
        </div>
        <div class="text-danger" id="notifikasi2"></div>
      </div>
    </div>
  </form>
  <hr class="sidebar-divider">

  <div class="row">
    <div class="col-lg-6">
      <div class="table-responsive mt-2" style="font-size:12px;">
        <table class="text-center table table-bordered">
          <thead class="font-weight-bold">
            <tr>
              <th class="table-primary" colspan="4">Tabel Nilai GAP</th>
            </tr>
            <tr class="table-warning">
              <th class="table-primary">No</th>
              <th class="table-primary">Selisih</th>
              <th class="table-primary">Bobot</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($semua['gap'] as $gap) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $gap['selisih']; ?></td>
                <td><?= $gap['bobot']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="table-responsive mt-2" style="font-size: 12px;">
        <table class="text-center table table-bordered">
          <thead class="font-weight-bold">
            <tr>
              <th class="table-primary" colspan="4">Tabel Aspek Modal</th>
            </tr>
            <tr class="table-warning">
              <th class="table-primary">No</th>
              <th class="table-primary">Modal</th>
              <th class="table-primary">Bobot</th>
              <th class="table-primary">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>2000 - <= 1.000.000</td>
              <td>5</td>
              <td>Sangat Rendah</td>
            </tr>
            <tr>
              <td>2</td>
              <td>1.000.000 - <= 2.000.000</td>
              <td>4</td>
              <td>Rendah</td>
            </tr>
            <tr>
              <td>3</td>
              <td>2.000.000 - <= 3.000.000</td>
              <td>3</td>
              <td>Normal</td>
            </tr>
            <tr>
              <td>4</td>
              <td>3.000.000 - <= 4.000.000</td>
              <td>2</td>
              <td>Tinggi</td>
            </tr>
            <tr>
              <td>5</td>
              <td>> 4.000.000</td>
              <td>1</td>
              <td>Sangat Tinggi</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <div class="table-responsive mt-2" style="font-size: 12px;">
        <table class="text-center table table-bordered">
          <thead class="font-weight-bold">
            <tr>
              <th class="table-primary" colspan="4">Tabel Aspek Penjualan</th>
            </tr>
            <tr class="table-warning">
              <th class="table-primary">No</th>
              <th class="table-primary">Penjualan</th>
              <th class="table-primary">Bobot</th>
              <th class="table-primary">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>> 6.400.000</td>
              <td>5</td>
              <td>Sangat Tinggi</td>
            </tr>
            <tr>
              <td>2</td>
              <td>4.800.000 - <= 6.400.000</td>
              <td>4</td>
              <td>Tinggi</td>
            </tr>
            <tr>
              <td>3</td>
              <td>3.200.000 - <= 4.800.000 </td>
              <td>3</td>
              <td>Normal</td>
            </tr>
            <tr>
              <td>4</td>
              <td>1.600.000 - <= 3.200.000 </td>
              <td>2</td>
              <td>Rendah</td>
            </tr>
            <tr>
              <td>5</td>
              <td>3000 - <= 1.600.000 </td>
              <td>1</td>
              <td>Sangat Rendah</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="table-responsive mt-2" style="font-size: 12px;">
        <table class="text-center table table-bordered">
          <thead class="font-weight-bold">
            <tr>
              <th class="table-primary" colspan="4">Tabel Aspek Waktu</th>
            </tr>
            <tr class="table-warning">
              <th class="table-primary">No</th>
              <th class="table-primary">Waktu</th>
              <th class="table-primary">Bobot</th>
              <th class="table-primary">Kelas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>1 - 6 Hari</td>
              <td>5</td>
              <td>Sangat Rendah</td>
            </tr>
            <tr>
              <td>2</td>
              <td>7 - 12 Hari</td>
              <td>4</td>
              <td>Rendah</td>
            </tr>
            <tr>
              <td>3</td>
              <td>13 - 18 Hari</td>
              <td>3</td>
              <td>Normal</td>
            </tr>
            <tr>
              <td>4</td>
              <td>19 - 24 Hari</td>
              <td>2</td>
              <td>Tinggi</td>
            </tr>
            <tr>
              <td>5</td>
              <td>>= 25 Hari</td>
              <td>1</td>
              <td>Sangat Tinggi</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->