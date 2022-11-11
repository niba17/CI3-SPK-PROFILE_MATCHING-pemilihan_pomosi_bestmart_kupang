  <!-- Begin Page Content -->
  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary mb-3">Data Perhitungan Profile Matching</h4>
    <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index'); ?>"><i class="far fa-hand-point-left"></i> Kembali Ke Halaman Admin</a>
    <a id="lanjut_pm" class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_profile_matching/' . $presentasi_NCF_NSF['presentasi_NCF'] . '/' . $presentasi_NCF_NSF['presentasi_NSF'] . '/' . $presentasi_NCF2_NSF2_NI['presentasi_NCF2'] . '/' . $presentasi_NCF2_NSF2_NI['presentasi_NSF2'] . '/' . $presentasi_NCF2_NSF2_NI['presentasi_NI']); ?>">Ke Perhitungan Profile Matching <i class="far fa-hand-point-right"></i></a>
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-2 alert alert-info mb-1" role="alert"><b>Total presentasi NCF & NSF untuk perhitungan NI adalah 100</b></div>
      </div>
      <div class="col-lg-6">
        <div class="mt-2 alert alert-info mb-1" role="alert"><b>Total presentasi NCF, NSF & NI untuk perhitungan hasil adalah 100</b></div>
      </div>
    </div>
    <form id="fNCFNSF" action="<?= base_url('Admin/index_submit') ?>" method="post">
      <div class="row" style="font-size: 13px;">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-5">
              <label class="font-weight-bold" for="presentasi_NCF">Presentasi NCF (%)</label>
              <input type="number" class="form-control form-control-user" id="presentasi_NCF" name="presentasi_NCF" value="<?= $presentasi_NCF_NSF['presentasi_NCF'] ?>" style="height:33px;" required>
            </div>
            <div class="col-lg-5">
              <label class="font-weight-bold" for="presentasi_NSF">Presentasi NSF (%)</label>
              <input type="number" class="form-control form-control-user" id="presentasi_NSF" name="presentasi_NSF" value="<?= $presentasi_NCF_NSF['presentasi_NSF'] ?>" style="height:33px;" required>
            </div>
            <div class="col-lg-2" style="margin-top: 29px;">
              <button class="btn btn-sm btn-primary" type="submit" id="submit0">Atur <i class="fa-solid fa-gears"></i></button>
            </div>
          </div>
          <div class="text-danger" id="notifikasi"></div>
        </div>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-3">
              <label class="font-weight-bold" for="presentasi_NCF2">Presentasi NCF (%)</label>
              <input type="number" class="form-control form-control-user" id="presentasi_NCF2" name="presentasi_NCF2" value="<?= $presentasi_NCF2_NSF2_NI['presentasi_NCF2'] ?>" style="height:33px;" required>
            </div>
            <div class="col-lg-3">
              <label class="font-weight-bold" for="presentasi_NSF2">Presentasi NSF (%)</label>
              <input type="number" class="form-control form-control-user" id="presentasi_NSF2" name="presentasi_NSF2" value="<?= $presentasi_NCF2_NSF2_NI['presentasi_NSF2'] ?>" style="height:33px;" required>
            </div>
            <div class="col-lg-3">
              <label class="font-weight-bold" for="presentasi_NI">Presentasi NI (%)</label>
              <input type="number" class="form-control form-control-user" id="presentasi_NI" name="presentasi_NI" value="<?= $presentasi_NCF2_NSF2_NI['presentasi_NI'] ?>" style="height:33px;" required>
            </div>
            <div class="col-lg-2" style="margin-top: 28px;">
              <button class="btn btn-sm btn-primary" type="submit" id="submit1">Atur <i class="fa-solid fa-gears"></i></button>
            </div>
          </div>
          <div class="text-danger" id="notifikasi2"></div>
        </div>
      </div>
    </form>

    <hr class="sidebar-divider">

    <div class="row">
      <div class="col-lg-6">
        <div class="table-responsive mt-2" style="font-size: 12px;">
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
  <script>
    var valid0 = true;

    $("#presentasi_NCF").keyup(function() {
      var p_NCF = $('#presentasi_NCF').val();
      var p_NSF = $('#presentasi_NSF').val();
      var total = (parseInt(p_NCF) + parseInt(p_NSF));
      if (p_NSF > p_NCF) {
        $('#notifikasi').removeClass().addClass('text-danger').html('<b>Total presentasi NSF tidak boleh melebihi NCF!</b>');
        valid0 = false;
      } else if (p_NCF < 1) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Presentasi NCF harus lebih besar dari 1!</b>');
        valid0 = false;
      } else if (p_NCF == 100) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Presentasi NCF harus lebih kecil dari 100!</b>');
        valid0 = false;
      } else if (total < 100) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Total presentasi NCF & NSF kurang dari 100!</b>');
        valid0 = false;
      } else if (total > 100) {
        $('#notifikasi').removeClass().addClass('text-danger').html('<b>Total presentasi NCF & NSF tidak boleh lebih dari 100!</b>');
        valid0 = false;
      } else {
        valid0 = true;
      }
    });

    var valid1 = true;

    $("#presentasi_NSF").keyup(function() {
      var p_NCF = $('#presentasi_NCF').val();
      var p_NSF = $('#presentasi_NSF').val();
      var total = parseInt(p_NCF) + parseInt(p_NSF);
      if (p_NSF > p_NCF) {
        $('#notifikasi').removeClass().addClass('text-danger').html('<b>Total presentasi NSF tidak boleh melebihi NCF!</b>');
        valid1 = false;
      } else if (p_NSF < 1) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Presentasi NSF harus lebih besar dari 1!</b>');
        valid1 = false;
      } else if (p_NSF == 100) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Presentasi NSF harus lebih kecil dari 100!</b>');
        valid1 = false;
      } else if (total < 100) {
        $('#notifikasi').removeClass().addClass('text-warning').html('<b>Total presentasi NCF & NSF kurang dari 100!</b>');
        valid1 = false;
      } else if (total > 100) {
        $('#notifikasi').removeClass().addClass('text-danger').html('<b>Total presentasi NCF & NSF tidak boleh lebih dari 100!</b>');
        valid1 = false;
      } else {
        valid1 = true;
      }
    });

    var valid2 = true;

    $("#presentasi_NCF2").keyup(function() {
      var p_NI = $('#presentasi_NI').val();
      var p_NCF2 = $('#presentasi_NCF2').val();
      var p_NSF2 = $('#presentasi_NSF2').val();
      var total2 = parseInt(p_NCF2) + parseInt(p_NSF2) + parseInt(p_NI);
      console.log(total2);
      if (parseInt(p_NCF2) < 1) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NCF harus lebih besar dari 1!</b>');
        valid2 = false;
      } else if (p_NCF2 == 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NCF harus lebih kecil dari 100!</b>');
        valid2 = false;
      } else if (total2 < 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Total presentasi NCF, NSF & NI kurang dari 100!</b>');
        valid2 = false;
      } else if (total2 > 100) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NCF, NSF & NI tidak boleh lebih dari 100!</b>');
        valid2 = false;
      } else if (p_NSF2 > p_NCF2) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NSF tidak boleh melebihi NCF!</b>');
        valid2 = false;
      } else {
        valid2 = true;
      }
    });

    var valid3 = true;

    $("#presentasi_NSF2").keyup(function() {
      var p_NI = $('#presentasi_NI').val();
      var p_NCF2 = $('#presentasi_NCF2').val();
      var p_NSF2 = $('#presentasi_NSF2').val();
      var total2 = parseInt(p_NCF2) + parseInt(p_NSF2) + parseInt(p_NI);
      if (p_NSF2 < 1) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NSF harus lebih besar dari 1!</b>');
        valid3 = false;
      } else if (p_NSF2 == 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NSF harus lebih kecil dari 100!</b>');
        valid3 = false;
      } else if (total2 < 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Total presentasi NCF, NSF & NI kurang dari 100!</b>');
        valid3 = false;
      } else if (total2 > 100) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NCF, NSF & NI tidak boleh lebih dari 100!</b>');
        valid3 = false;
      } else if (p_NSF2 > p_NCF2) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NSF tidak boleh melebihi NCF!</b>');
        valid3 = false;
      } else {
        valid3 = true;
      }
    });

    var valid4 = true;

    $("#presentasi_NI").keyup(function() {
      var p_NI = $('#presentasi_NI').val();
      var p_NCF2 = $('#presentasi_NCF2').val();
      var p_NSF2 = $('#presentasi_NSF2').val();
      var total2 = parseInt(p_NCF2) + parseInt(p_NSF2) + parseInt(p_NI);
      if (p_NI < 1) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NI harus lebih besar dari 1!</b>');
        valid4 = false;
      } else if (p_NI == 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Presentasi NI harus lebih kecil dari 100!</b>');
        valid4 = false;
      } else if (total2 < 100) {
        $('#notifikasi2').removeClass().addClass('text-warning').html('<b>Total presentasi NCF, NSF & NI kurang dari 100!</b>');
        valid4 = false;
      } else if (total2 > 100) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NCF, NSF & NI tidak boleh lebih dari 100!</b>');
        valid4 = false;
      } else if (p_NSF2 > p_NCF2) {
        $('#notifikasi2').removeClass().addClass('text-danger').html('<b>Total presentasi NSF tidak boleh melebihi NCF!</b>');
        valid4 = false;
      } else {
        valid4 = true;
      }
    });

    $('input').keyup(function() {
      // console.log('input 0 : ' + valid0);
      // console.log('input 1 : ' + valid1);
      // console.log('input 2 : ' + valid2);
      // console.log('input 3 : ' + valid3);
      // console.log('input 4 : ' + valid4);
      if (valid0 == true && valid1 == true) {
        $("#submit0").removeAttr("disabled", "disabled");
        $('#notifikasi').removeClass().addClass('text-success').html('<b>Total presentasi NSF & NCF sama dengan 100!</b>');
      }
      if (valid0 == false || valid1 == false) {
        $("#submit0").attr("disabled", "disabled");
      }
      if (valid2 == true && valid3 == true && valid4 == true) {
        $("#submit1").removeAttr("disabled", "disabled");
        $('#notifikasi2').removeClass().addClass('text-success').html('<b>Total presentasi NSF, NCF & NI sama dengan 100!</b>');
      }
      if (valid2 == false || valid3 == false || valid4 == false) {
        $("#submit1").attr("disabled", "disabled");
      }
      if (valid0 == true && valid1 == true && valid2 == true && valid3 == true && valid4 == true) {
        $('#lanjut_pm').removeClass('disabled');
      }
      if (valid0 == false || valid1 == false || valid2 == false || valid3 == false || valid4 == false) {
        $('#lanjut_pm').addClass('disabled');
      }
    });
  </script>
  <!-- End of Main Content -->