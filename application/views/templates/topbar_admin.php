<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="font-size:30px;"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-0">
          <li class="nav-item">
            <a class="nav-link mr-3" href="<?= base_url("Admin/index"); ?>" style="font-size:25px; color:#4e73df;"><i class="fa-solid fa-bars mr-2"></i><?php if ($topbar == 'index') {
                                                                                                                                                          echo ('<u><b>MENU</b  ></u>');
                                                                                                                                                        } else {
                                                                                                                                                          echo ('<b>MENU</b>');
                                                                                                                                                        } ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link mr-3" href="<?= base_url("Admin/index_perhitungan"); ?>" style="font-size:25px; color:#4e73df;"><i class="fa-solid fa-square-root-variable mr-2"></i><?php if ($topbar == 'perhitungan') {
                                                                                                                                                                                      echo ('<u><b>PERHITUNGAN</b></u>');
                                                                                                                                                                                    } else {
                                                                                                                                                                                      echo ('<b>PERHITUNGAN</b>');
                                                                                                                                                                                    } ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href="<?= base_url("Admin/index_akun"); ?>" style="font-size:25px; color:#4e73df;"><i class=" fa-solid fa-users mr-2"></i><?php if ($topbar == 'akun') {
                                                                                                                                                                  echo ('<u><b>AKUN</b></u>');
                                                                                                                                                                } else {
                                                                                                                                                                  echo ('<b>AKUN</b>');
                                                                                                                                                                } ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href="#" onclick="logout()" style="font-size:25px; color:#4e73df;"><i class=" fa-solid fa-right-from-bracket"></i> <b>LOGOUT</b></a>
          </li>
        </ul>
      </div>

    </nav>

    <script>
      function logout() {
        Swal.fire({
          title: 'Yakin ingin Logout?',
          // text: "You won't be able to revert this!",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Logout!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.replace(baseUrl + 'Autentifikasi/logout');
          }
        })
      }
    </script>