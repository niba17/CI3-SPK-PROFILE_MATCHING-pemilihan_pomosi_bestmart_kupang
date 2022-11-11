<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Rekomendasi Kriteria Promosi</title>
</head>


<body>
  <?php date_default_timezone_set('Asia/Jakarta');
  // echo (date("d-M-Y"));
  $date1 = date("d-M-Y");
  date_default_timezone_set('Asia/Jakarta');
  // echo (date("H:i:s"));
  $date2 = date("H:i:s");
  // $save_date = $this->input->post('save_date');
  $date2 = explode(":", date("H:i:s"));
  $date2[0]++;
  $date2 = implode(":", $date2);
  ?>
  <div class="table-responsive">
    <?php echo ('Tanggal : ' . $date1);
    echo ('<br>');
    echo ('Waktu : ' . $date2);
    echo ('<br>');
    echo ('<br>'); ?>
    <h2 class="text-center mb-5"><b>Hasil Rekomendasi</ b>
    </h2>
    <table class="table table-bordered text-center" id="" width="100%" cellspacing="0">
      <!-- <thead>
        <tr>
          <th colspan="4" style="border: none;">
            <h2><b>Hasil Rekomendasi</ b>
            </h2>
          </th>
        </tr>
      </thead> -->
      <thead class="table-primary  text-bold">
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Rekomendasi</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0;
        foreach ($semua['perhitungan_pm_smntr'] as $p) : ?>
          <tr>
            <td class="text-center m-0 font-weight-bold"><?= ++$no; ?></td>
            <td class="text-center"><?= $p['kode_barang'] ?></td>
            <td class="text-center"><?= $p['nama_barang'] ?></td>
            <td class="text-center"><?= $p['kesimpulan'] ?></td>
            <td class="text-center"><?= $p['keterangan'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <script>
      window.print();
    </script>
</body>

</html>