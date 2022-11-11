 <div class="container-fluid p-3">
   <h4 class="font-weight-bold text-primary">Data Barang</h4>
   <hr class="sidebar-divider">
   <?php if (isset($_SESSION['message_tambah'])) : ?>
     <script>
       Swal.fire({
         icon: 'success',
         title: 'Berhasil!',
         text: 'Data berhasil ditambahkan!',
         timer: 1000
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
         timer: 1000
         // footer: '<a href="">Why do I have this issue?</a>'
       });
     </script>
   <?php unset($_SESSION['message_ubah']);
    endif; ?>
   <?php if (isset($_SESSION['message_gagal_ubah'])) : ?>
     <script>
       Swal.fire({
         icon: 'error',
         title: 'Gagal!',
         text: 'Data gagal diubah!',
         // footer: '<a href="">Why do I have this issue?</a>'
       });
     </script>
   <?php unset($_SESSION['message_gagal_ubah']);
    endif; ?>
   <?php if (isset($_SESSION['message_hapus'])) : ?>
     <script>
       Swal.fire({
         icon: 'success',
         title: 'Berhasil!',
         text: 'Data berhasil dihapus!',
         timer: 1000
         // footer: '<a href="">Why do I have this issue?</a>'
       });
     </script>
   <?php unset($_SESSION['message_hapus']);
    endif; ?>
   <!-- Begin Page Content -->


   <a class="btn btn-sm btn-primary mr-1" href="<?= base_url("Admin/index_tambah_data/") . $topbar; ?>">Tambah Data Barang <i class="fa-solid fa-cart-plus"></i></a>
   <a class="btn btn-sm btn-primary mr-1" href="<?= base_url("Admin/index") ?>">Refresh <i class="fas fa-sync"></i></a>
   <a class="btn btn-sm btn-primary" href="#" onclick="submit()">Submit <i class="fa-solid fa-square-root-variable"></i></a>

   <div class="table-responsive mt-2" style="font-size:12px;">
     <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
       <thead class="table-primary">
         <tr>
           <th>No</th>
           <th>Kode Barang</th>
           <th>Nama Barang</th>
           <th>Modal</th>
           <th>Bobot Modal</th>
           <th>Penjualan</th>
           <th>Bobot Penjualan</th>
           <th>Waktu</th>
           <th>Bobot Waktu</th>
           <th style="width:90px;">Aksi</th>
         </tr>
       </thead>
       <tbody>
         <?php $no = 1;
          $tabel = 'barang';
          // $angka_format = number_format($angka, 2, ",", ".");
          foreach ($semua['barang'] as $s) : ?>
           <tr>
             <td class="text-center m-0 font-weight-bold"><?= $no++; ?></td>
             <td class="text-center"><?= $s['kode_barang'] ?></td>
             <td class="text-center"><?= $s['nama_barang'] ?></td>
             <td class="text-center"><?= 'Rp. ' . number_format($s['modal']) . ',-' ?></td>
             <td class="text-center"><?= $s['bobot_modal'] ?></td>
             <td class="text-center"><?= 'Rp. ' . number_format($s['penjualan']) . ',-' ?></td>
             <td class="text-center"><?= $s['bobot_penjualan'] ?></td>
             <td class="text-center"><?= $s['waktu'] ?> Hari</td>
             <td class="text-center"><?= $s['bobot_waktu'] ?></td>
             <td class="text-center">
               <a href="<?= base_url('Admin/index_ubah_data/') . $tabel . '/' . $s['id']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
               <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary" onclick="hapus('<?= $tabel; ?>','<?= $s['id']; ?>')"><i class="fa-solid fa-trash-can"></i></a>
             </td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
   </div>
 </div>
 <script>
   function submit() {
     Swal.fire({
       icon: 'question',
       title: 'Yakin ingin Memulai perhitungan Profile Matching?',
       showDenyButton: true,
       // showCancelButton: true,
       confirmButtonText: 'Ya',
       denyButtonText: `Batal`,
     }).then((result) => {
       /* Read more about isConfirmed, isDenied below */
       if (result.isConfirmed) {

         window.location.replace(baseUrl + 'Admin/index_submit');
         // Swal.fire('Berhasil!', '', 'success')
       }
       // else if (result.isDenied) {
       //   Swal.fire('Dibatalkan ', '', 'info')
       // }
     });
   }

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
       } else if (result.isDenied) {
         Swal.fire({
           icon: 'success',
           title: 'Dibatalkan!',
           timer: 1000
           //  text: 'Berhasil !',
           // footer: '<a href="">Why do I have this issue?</a>'
         })
       }
     });
   }
 </script>
 <!-- End of Main Content -->