  <style>
    .background {
      /* position: relative; */
      background: linear-gradient(to bottom, transparent 0%, black 100%), url(<?= base_url('assets/img/loginBG/bestMart.jpg'); ?>);
    }
  </style>

  <body class="background">

    <!-- Outer Row -->
    <br><br><br><br><br>
    <div class="row justify-content-center">
      <div class="col-lg-9 col-sm-9 mt-4">
        <div class="text-center">
          <h3 class="text-white mb-4"><b>SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN KATEGORI PROMOSI PRODUK MENGGUNAKAN METODE PROFILE MATCHING STUDI KASUS PADA SWALAYAN BESTMART</b></h3>
        </div>
      </div>
      <div class="col-lg-7 col-sm-9 mt-4">
        <form class="user" method="post" action="<?= base_url('Autentifikasi/index_login'); ?>">
          <div class="form-group">
            <input type="text" class="form-control form-control-user text-center" id="username" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-user text-center" id="password" name="password" placeholder="Password" required>
          </div>
          <hr>
          <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
            Login
          </button>
          <div class="text-center text-lg">
            <a href="#" onclick="l_password()">Lupa password?</a>
          </div>
        </form>
        <br>
      </div>
    </div>

    <script>
      <?php if (isset($_SESSION['message'])) : ?>
        Swal.fire({
          icon: 'error',
          title: 'Gagal Login!',
          text: 'Username atau password tidak sesuai!',
          // footer: '<a href="">Why do I have this issue?</a>'
        });
      <?php unset($_SESSION['message']);
      endif; ?>

      function l_password() {
        Swal.fire({
          icon: 'question',
          // title: 'Gagal Login!',
          title: '<h1><b>Lupa Password?</b></h1><div class="alert alert-info"><h3><b>Hubungi pihak developer untuk pemulihan password!</b></h3><h4>Whatsapp : 0822-3709-9342<br>Email : davidluase17@gmail.com</h4></div>'
          // footer: '<a href="">Why do I have this issue?</a>'
        });
      }
    </script>