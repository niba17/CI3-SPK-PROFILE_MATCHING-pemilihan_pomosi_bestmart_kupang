  <!-- Begin Page Content -->
  <?php if (isset($_SESSION['message_gagal_tambah_kode'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Kode barang "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_tambah_kode']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_tambah_nama'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama barang "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_tambah_nama']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_tambah_pass'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Konfirmasi password tidak sesuai!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_tambah_pass']);
  endif; ?>

  <?php if (isset($_SESSION['message_gagal_tambah_username'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama akun "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_tambah_username']);
  endif; ?>
  <?php if (isset($_SESSION['message_gagal_tambah_email'])) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Nama akun "' + '<?php echo urldecode($namaOrkode) ?>' +
          '" sudah ada!'
        // footer: '<a href="">Why do I have this issue?</a>'
      });
    </script>
  <?php unset($_SESSION['message_gagal_tambah_email']);
  endif; ?>

  <div class="container-fluid p-3">
    <h4 class="font-weight-bold text-primary">Tambah Data</h4>
    <!-- <?= $this->session->flashdata('message'); ?> -->
    <hr class="sidebar-divider">

    <?php if ($topbar == 'index') : ?>
      <div class="row mt-2">
        <div class="col-lg-12 text-right px-4">
          <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index') ?>">Kembali ke halaman admin <i class="fa-solid fa-hand-point-right"></i></a>
        </div>
      </div>
      <form action="<?= base_url('Admin/tambah_data/') . $topbar; ?>" method="post" style="font-size: 12px;">
        <div class="col-lg-5 mb-3 mb-sm-0">
          <label class="font-weight-bold" for="kode_barang">Kode Barang</label>
          <input type="text" class="form-control form-control-user" id="kode_barang" name="kode_barang" placeholder="Masukkan Kode Barang" required>
          <div id="warning_NB" class="h7 text-danger"></div>
          <br>
          <label class="font-weight-bold" for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control form-control-user" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" required>
          <div id="warning_KB" class="h7 text-danger"></div>
          <?= form_error('nama_barang', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="modal">Modal</label>
          <input type="number" class="form-control form-control-user" id="modal" name="modal" placeholder="Masukkan Modal" required>
          <?= form_error('modal', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="penjualan">Penjualan</label>
          <input type="number" class="form-control form-control-user" id="penjualan" name="penjualan" placeholder="Masukkan Penjualan" required>
          <?= form_error('penjualan', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <label class="font-weight-bold" for="penjualan">Waktu (Hari)</label>
          <input type="number" class="form-control form-control-user" id="penjualan" name="waktu" placeholder="Masukkan Waktu" required>
          <?= form_error('waktu', '<small class="text-danger ml-2">', '</small>'); ?>
          <br>
          <button id="submit" type="submit" class="btn btn-sm btn-primary btn-user mt-3">Tambah Barang <i class="fa-solid fa-circle-plus"></i></button>
      </form>
    <?php endif; ?>

    <?php if ($topbar == 'akun') : ?>
      <div class="row">
        <div class="col-lg-12 text-right px-4">
          <a class="btn btn-sm btn-primary" href="<?= base_url('Admin/index_akun') ?>">Kembali ke halaman Akun <i class="far fa-hand-point-right"></i></a>
        </div>
      </div>
      <form action="<?= base_url('Admin/tambah_data/' . $topbar) ?>" method="post" style="font-size: 12px;">
        <div class="col-lg-5 mb-3 mb-sm-0">
          <label class="font-weight-bold" for="username">Username</label>
          <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username" required>
          <div id="warning_username" class="h7 text-danger"></div>
          <br>
          <label class="font-weight-bold" for="email">Email</label>
          <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email" required>
          <div id="warning_email" class="h7 text-danger"></div>
          <br>
          <label class="font-weight-bold" for="password">Password</label>
          <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password" required>
          <div id="warning_password1" class="h7 text-danger"></div>
          <br>
          <label class="font-weight-bold" for="password2">Konfirmasi Password</label>
          <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukkan Konfirmasi Password" required>
          <div id="warning_password2" class="h7 text-danger"></div>
          <br>
          <button id="submit2" type="submit" class="btn btn-sm btn-primary mt-3">Tambah Akun <i class="fa-solid fa-circle-plus"></i></button>
      </form>
    <?php endif; ?>
  </div>
  <script>
    <?php if ($topbar == 'index') : ?>
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
            var namaBarang;
            for ($i = 0; $i < data.barang.length; $i++) {
              if (kodeBarang == data.barang[$i].kode_barang) {
                namaBarang = data.barang[$i].nama_barang;
              }
            }

            if (namaBarang) {
              // $("#submit").attr("disabled", true);
              $('#warning_NB').html('Kode barang sudah ada! "' + namaBarang + '" (' + kodeBarang + ')');
              // $(this).attr("placeholder", "Type your answer here");
            }
            if (!namaBarang) {
              // $("#submit").removeAttr("disabled");
              $('#warning_NB').html('');
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
              // $("#submit").attr("disabled", true);
              $('#warning_KB').html('Nama Barang sudah ada! "' + namaBarang + '" (' + kodeBarang + ')');
            }
            if (!kodeBarang) {
              // $("#submit").removeAttr("disabled");
              $('#warning_KB').html('');
            }


          }
        });
      });

    <?php endif; ?>

    <?php if ($topbar == 'akun') : ?>
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
            var email;
            for ($i = 0; $i < data.admin.length; $i++) {
              if (username == data.admin[$i].username) {
                email = data.admin[$i].email;
              }
            }

            if (email) {
              $('#warning_username').html('Username sudah ada!');
            }
            if (!email) {
              valid = true;
              $('#warning_username').html('');
            }
          }

        });
      });
      if (valid = true) {
        $("#submit2").removeAttr("disabled");
      }

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
              // $("#submit2").attr("disabled", true);
              $('#warning_email').html('Email sudah ada!');
            }
            if (!username) {
              // $("#submit2").removeAttr("disabled");
              $('#warning_email').html('');
              // $('#kode_barang').val();
            }
          }
        });
      });

      $("#password").blur(function() {
        if ($('#password').val() != $('#password2').val()) {
          // $("#submit2").attr("disabled", true);

          $('#warning_password2').html('Konfirmasi password tidak sesuai!');
        } else if ($('#password').val() == $('#password2').val()) {
          $("#submit2").removeAttr("disabled");
          // $('#warning_password').html('');
          $('#warning_password2').html('');
        }
        // console.log($('#password').val());
      });

      $("#password2").blur(function() {
        if ($('#password').val() != $('#password2').val()) {
          // $("#submit2").attr("disabled", true);
          $('#warning_password2').html('Konfirmasi password tidak sesuai!');
        } else if ($('#password').val() == $('#password2').val()) {
          // $("#submit2").removeAttr("disabled");
          $('#warning_password2').html('');
        }
        // console.log($('#password').val());
      });
    <?php endif; ?>
  </script>
  <!-- End of Main Content -->