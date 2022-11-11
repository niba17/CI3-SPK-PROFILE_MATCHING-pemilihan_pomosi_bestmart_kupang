  <!-- Begin Page Content -->
  <?php if (isset($_SESSION['message_gagal_ubah'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Konfirmasi password tidak sesuai!',
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah']);
  endif; ?>
  <?php if (isset($_SESSION['message_gagal_ubah_kode'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Kode barang "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah_kode']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_ubah_nama'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama barang "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah_nama']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_ubah_pass'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Konfirmasi password tidak sesuai!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah_pass']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_ubah_username'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama akun "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah_username']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_ubah_email'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama akun "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_ubah_email']);
  endif; ?>

  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Ubah Data</h4>
    <?php if ($tabel == 'barang') : ?>
      <div class="row">
        <div class="col-lg-12 text-right px-4">
          <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index') ?>">Kembali ke halaman admin <i class="fa-solid fa-hand-point-right"></i></a>
        </div>
      </div>
      <hr class="sidebar-divider">

      <form action="<?= base_url('Admin/ubah_data/') . $tabel . '/' . $id; ?>" method="post" style="font-size: 12px;">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="row">
          <div class="col-lg-6 mb-3 mb-sm-0 mt-2">
            <label class="font-weight-bold" for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control form-control-user" id="kode_barang" name="kode_barang" value="<?= $kode_barang; ?>">
            <?= form_error('kode_barang', '<small class="text-danger ml-2">', '</small>'); ?>
            <br>
            <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" value="<?= $nama_barang; ?>">
            <?= form_error('nama_barang', '<small class="text-danger ml-2">', '</small>'); ?>
            <br>
            <label class="font-weight-bold" for="modal">Modal</label>
            <input type="number" class="form-control form-control-user" id="modal" name="modal" value="<?= $modal; ?>">
            <?= form_error('modal', '<small class="text-danger ml-2">', '</small>'); ?>
            <br>
            <label class="font-weight-bold" for="penjualan">Penjualan</label>
            <input type="number" class="form-control form-control-user" id="penjualan" name="penjualan" value="<?= $penjualan; ?>">
            <?= form_error('penjualan', '<small class="text-danger ml-2">', '</small>'); ?>
            <br>
            <label class="font-weight-bold" for="waktu">Waktu (Hari)</label>
            <input type="number" class="form-control form-control-user" id="waktu" name="waktu" value="<?= $waktu; ?>">
            <?= form_error('waktu', '<small class="text-danger ml-2">', '</small>'); ?>
            <br>
          </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary btn-user mt-3">Ubah Data Barang <i class="fa-solid fa-circle-check"></i></button>
      </form>
    <?php endif; ?>

    <?php if ($tabel == 'admin') : ?>
      <div class="row">
        <div class="col-lg-12 text-right px-4">
          <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_akun') ?>">Kembali ke halaman akun <i class="fa-solid fa-hand-point-right"></i></a>
        </div>
      </div>
      <hr class="sidebar-divider">

      <form action="<?= base_url('Admin/ubah_data/') . $tabel; ?>" method="post" style="font-size: 12px;">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="col-lg-5 mb-3 mb-sm-0 mt-2">
          <label class="font-weight-bold" for="username">Username</label>
          <input type="text" class="form-control form-control-user" id="username" name="username" value="<?= $username; ?>" required>
          <?= form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="email">Email</label>
          <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= $email; ?>" required>
          <?= form_error('email', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="password">Password</label>
          <input type="password" class="form-control form-control-user" id="password" name="password" required>
          <?= form_error('password', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="password2">Konfirmasi Password</label>
          <input type="password" class="form-control form-control-user" id="password2" name="password2" required>
          <?= form_error('password2', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <button type=" submit" class="btn btn-sm btn-primary btn-user mt-3">Ubah Akun <i class="fa-solid fa-circle-check"></i></button>
        </div>
  </div>
  </form>
  <?php endif; ?>
  <script>
    <?php if ($tabel == 'barang') : ?>
      $("#kode_barang").keyup(function() {
        var kodeBarang = $(this).val();

        $.ajax({
          url: baseUrl + 'Admin/json_semua_data',
          method: 'post',
          data: {
            kodeBarang: kodeBarang
          },
          cache: false,
          dataType: 'json',
          success: function(data) {
            // console.log(data);
            var namaBarang;
            for ($i = 0; $i < data.barang.length; $i++) {
              if (kodeBarang == data.barang[$i].kode_barang) {
                namaBarang = data.barang[$i].nama_barang;
              }
            }

            if (namaBarang) {
              $('#nama_barang').val('');
              $('#nama_barang').attr('placeholder', namaBarang + ' (Barang sudah ada!)');
              // $(this).attr("placeholder", "Type your answer here");
            }
            if (!namaBarang) {
              $('#nama_barang').val();
              $('#nama_barang').attr("placeholder", "<?= $nama_barang ?>");
              // $('#nama_barang').val();
            }
          }

        });
      });


      $("#nama_barang").keyup(function() {
        var namaBarang = $(this).val();

        $.ajax({
          url: baseUrl + 'Admin/json_semua_data',
          method: 'post',
          data: {
            namaBarang: namaBarang
          },
          cache: false,
          dataType: 'json',
          success: function(data) {
            var kodeBarang;
            for ($i = 0; $i < data.barang.length; $i++) {
              if (namaBarang == data.barang[$i].nama_barang) {
                kodeBarang = data.barang[$i].kode_barang;
              }
            }

            if (kodeBarang) {
              $('#kode_barang').val('');
              $('#kode_barang').attr('placeholder', kodeBarang + ' (Kode barang sudah ada!)');
            }
            if (!kodeBarang) {
              $('#kode_barang').val();
              $('#kode_barang').attr("placeholder", "<?= $kode_barang ?>");
              // $('#kode_barang').val();
            }

          }
        });
      });
    <?php endif; ?>
    <?php if ($tabel == 'admin') : ?>
      $("#username").keyup(function() {
        var username = $(this).val();

        $.ajax({
          url: baseUrl + 'Admin/json_semua_data',
          method: 'post',
          data: {
            username: username
          },
          cache: false,
          dataType: 'json',
          success: function(data) {
            console.log(data);
            var email;
            for ($i = 0; $i < data.admin.length; $i++) {
              if (username == data.admin[$i].username) {
                email = data.admin[$i].email;
              }
            }

            if (email) {
              $('#email').val('');
              $('#email').attr('placeholder', email + ' (Email sudah ada!)');
              // $(this).attr("placeholder", "Type your answer here");
            }
            if (!email) {
              $('#email').val();
              $('#email').attr("placeholder", "<?= $email ?>");
              // $('#nama_barang').val();
            }
          }

        });
      });


      $("#email").keyup(function() {
        var email = $(this).val();

        $.ajax({
          url: baseUrl + 'Admin/json_semua_data',
          method: 'post',
          data: {
            email: email
          },
          cache: false,
          dataType: 'json',
          success: function(data) {
            var username;
            for ($i = 0; $i < data.admin.length; $i++) {
              if (email == data.admin[$i].email) {
                username = data.admin[$i].username;
              }
            }

            if (username) {
              $('#username').val('');
              $('#username').attr('placeholder', username + ' (Username sudah ada!)');
            }
            if (!username) {
              $('#username').val();
              $('#username').attr("placeholder", "<?= $username ?>");
              // $('#kode_barang').val();
            }

          }
        });
      });
    <?php endif; ?>
  </script>
  <!-- End of Main Content -->