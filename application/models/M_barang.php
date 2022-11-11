<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
  public function semuaDataBarang()
  {
    $data = [
      'admin' => $this->db->get('admin')->result_array(),
      'barang' => $this->getBarangJoined(),
      'gap' => [
        "0" => ["selisih" => "0", "bobot" => "5"],
        "1" => ["selisih" => "1", "bobot" => "4.5"],
        "2" => ["selisih" => "-1", "bobot" => "4"],
        "3" => ["selisih" => "2", "bobot" => "3.5"],
        "4" => ["selisih" => "-2", "bobot" => "3"],
        "5" => ["selisih" => "3", "bobot" => "2.5"],
        "6" => ["selisih" => "-3", "bobot" => "2"],
        "7" => ["selisih" => "4", "bobot" => "1.5"],
        "8" => ["selisih" => "-4", "bobot" => "1"]
      ],
      'perhitungan_pm' => $this->db->get('perhitungan_pm')->result_array(),
      'perhitungan_pm_smntr' => $this->db->get('perhitungan_pm_smntr')->result_array()
    ];
    return $data;
  }

  public function getBarangJoined()
  {
    return $this->db->get('barang')->result_array();
    // $this->db->from('barang');
    // $this->db->join('perhitungan_pm_smntr', 'perhitungan_pm_smntr.kode_barang = barang.kode_barang');
    // return $this->db->get()->result_array();
  }

  public function profileMatching($data, $p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI)
  {
    $nilai_GAP = [
      "0" => ["selisih" => "0", "bobot" => "5"],
      "1" => ["selisih" => "1", "bobot" => "4.5"],
      "2" => ["selisih" => "-1", "bobot" => "4"],
      "3" => ["selisih" => "2", "bobot" => "3.5"],
      "4" => ["selisih" => "-2", "bobot" => "3"],
      "5" => ["selisih" => "3", "bobot" => "2.5"],
      "6" => ["selisih" => "-3", "bobot" => "2"],
      "7" => ["selisih" => "4", "bobot" => "1.5"],
      "8" => ["selisih" => "-4", "bobot" => "1"]
    ];

    $data['presentasi_NCF'] = $p_NCF;
    $data['presentasi_NSF'] = $p_NSF;
    $data['presentasi_NCF2'] = $p_NCF2;
    $data['presentasi_NSF2'] = $p_NSF2;
    $data['presentasi_NI'] = $p_NI;

    // echo ($p_NCF2);
    // die;

    $data_barang = [];

    for ($i = 0; $i < count($data['barang']); $i++) {

      //mengurangi bobot dengan nilai harapan masing2 bobot
      $data['barang'][$i]['GAP_M'] = $data['barang'][$i]['bobot_modal'] - 5;
      $data['barang'][$i]['GAP_P'] = $data['barang'][$i]['bobot_penjualan'] - 5;
      $data['barang'][$i]['GAP_W'] = $data['barang'][$i]['bobot_waktu'] - 5;

      //mencocokkan nilai GAP
      for ($j = 0; $j < count($nilai_GAP); $j++) {
        if ($data['barang'][$i]['GAP_M'] == $nilai_GAP[$j]['selisih']) {
          $data['barang'][$i]['GAP_M_fix'] =  $nilai_GAP[$j]['bobot'];
        }
        if ($data['barang'][$i]['GAP_P'] == $nilai_GAP[$j]['selisih']) {
          $data['barang'][$i]['GAP_P_fix'] =  $nilai_GAP[$j]['bobot'];
        }
        if ($data['barang'][$i]['GAP_W'] == $nilai_GAP[$j]['selisih']) {
          $data['barang'][$i]['GAP_W_fix'] =  $nilai_GAP[$j]['bobot'];
        }
      }

      //perhitungan nilai NCF dan NSF
      $data['barang'][$i]['NCF'] = ($data['barang'][$i]['GAP_M_fix'] + $data['barang'][$i]['GAP_P_fix']) / 2;
      $data['barang'][$i]['NSF'] = $data['barang'][$i]['GAP_W_fix'];

      //perhitungan nilai NI
      $data['barang'][$i]['NI'] = $data['presentasi_NCF'] / 100 * $data['barang'][$i]['NCF'] + $data['presentasi_NSF'] / 100 * $data['barang'][$i]['NSF'];

      //perhitungan nilai hasil
      $data['barang'][$i]['hasil'] = $data['presentasi_NCF2'] / 100 *  $data['barang'][$i]['NCF'] + $data['presentasi_NSF2'] / 100 * $data['barang'][$i]['NSF'] + $data['presentasi_NI'] / 100 * $data['barang'][$i]['NI'];

      //menentukan kesimpulan akhir
      for ($j = 0; $j < 4; $j++) {
        if ($data['barang'][$i]['hasil'] >= 3) {
          $data['barang'][$i]['kesimpulan'] = 'Rafaksi';
        }
        if ($data['barang'][$i]['hasil'] < 3 && $data['barang'][$i]['hasil'] >= 2.5) {
          $data['barang'][$i]['kesimpulan'] = 'Mailer';
        }
        if ($data['barang'][$i]['hasil'] >= 1.5 && $data['barang'][$i]['hasil'] < 2.5) {
          $data['barang'][$i]['kesimpulan'] = 'Discount';
        }
        if ($data['barang'][$i]['hasil'] < 1.5) {
          $data['barang'][$i]['kesimpulan'] = 'Listing';
        }
      }


      $data_barang[$i] = [
        'id' => $data['barang'][$i]['id'],
        'nama_barang' => $data['barang'][$i]['nama_barang'],
        'kode_barang' => $data['barang'][$i]['kode_barang'],
        'modal' => $data['barang'][$i]['modal'],
        'bobot_modal' => $data['barang'][$i]['bobot_modal'],
        'penjualan' => $data['barang'][$i]['penjualan'],
        'bobot_penjualan' => $data['barang'][$i]['bobot_penjualan'],
        'waktu' => $data['barang'][$i]['waktu'],
        'bobot_waktu' => $data['barang'][$i]['bobot_waktu'],
        'GAP_M' => $data['barang'][$i]['GAP_M'],
        'GAP_P' =>  $data['barang'][$i]['GAP_P'],
        'GAP_W' => $data['barang'][$i]['GAP_W'],
        'GAP_M_fix' => $data['barang'][$i]['GAP_M_fix'],
        'GAP_P_fix' => $data['barang'][$i]['GAP_P_fix'],
        'GAP_W_fix' => $data['barang'][$i]['GAP_W_fix'],
        'NCF' =>  $data['barang'][$i]['NCF'],
        'NSF' => $data['barang'][$i]['NSF'],
        'NI' =>  $data['barang'][$i]['NI'],
        'hasil' => $data['barang'][$i]['hasil'],
        'keterangan' => isset($data['perhitungan_pm_smntr'][$i]['keterangan']) ? $data['perhitungan_pm_smntr'][$i]['keterangan'] : '',
        'kesimpulan' => $data['barang'][$i]['kesimpulan'],
        'presentasi_NCF/NSF' => $data['presentasi_NCF'] . '/' . $data['presentasi_NSF'],
        'presentasi_NCF2/NSF2/NI' => $data['presentasi_NCF2'] . '/' . $data['presentasi_NSF2'] . '/' . $data['presentasi_NI']
      ];
    }

    $this->db->empty_table('perhitungan_pm_smntr');

    for ($i = 0; $i < count($data['barang']); $i++) {
      $this->db->insert('perhitungan_pm_smntr', $data_barang[$i] = [
        'nama_barang' => $data['barang'][$i]['nama_barang'],
        'kode_barang' => $data['barang'][$i]['kode_barang'],
        'modal' => $data['barang'][$i]['modal'],
        'bobot_modal' => $data['barang'][$i]['bobot_modal'],
        'penjualan' => $data['barang'][$i]['penjualan'],
        'bobot_penjualan' => $data['barang'][$i]['bobot_penjualan'],
        'waktu' => $data['barang'][$i]['waktu'],
        'bobot_waktu' => $data['barang'][$i]['bobot_waktu'],
        'GAP_M' => $data['barang'][$i]['GAP_M'],
        'GAP_P' =>  $data['barang'][$i]['GAP_P'],
        'GAP_W' => $data['barang'][$i]['GAP_W'],
        'GAP_M_fix' => $data['barang'][$i]['GAP_M_fix'],
        'GAP_P_fix' => $data['barang'][$i]['GAP_P_fix'],
        'GAP_W_fix' => $data['barang'][$i]['GAP_W_fix'],
        'NCF' =>  $data['barang'][$i]['NCF'],
        'NSF' => $data['barang'][$i]['NSF'],
        'NI' =>  $data['barang'][$i]['NI'],
        'hasil' => $data['barang'][$i]['hasil'],
        'keterangan' => $data_barang[$i]['keterangan'],
        'kesimpulan' => $data['barang'][$i]['kesimpulan'],
        'presentasi_NCF/NSF' => $data['presentasi_NCF'] . '/' . $data['presentasi_NSF'], 'presentasi_NCF2/NSF2/NI' => $data['presentasi_NCF2'] . '/' . $data['presentasi_NSF2'] . '/' . $data['presentasi_NI']
      ]);
    }
    return $data_barang;
  }

  //logika ambilstatus user
  public function getDataRoleUser($username)
  {
    $this->db->where('username', $username);
    $detail = $this->db->get('admin')->row();
    return $detail;
  }

  //logika cek login
  public function cekLogin($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function tambahData($data, $topbar)
  {
    if ($topbar == 'index') {
      $tabel = 'barang';
      $data['bobot_modal'] = preg_replace('/\D/', '', $data['modal']);
      if ($data['bobot_modal'] <= 1000000) {
        $data['bobot_modal'] = '5';
      } else if ($data['bobot_modal'] > 1000000 && $data['bobot_modal'] <= 2000000) {
        $data['bobot_modal'] = '4';
      } else if ($data['bobot_modal'] > 2000000 && $data['bobot_modal'] <= 3000000) {
        $data['bobot_modal'] = '3';
      } else if ($data['bobot_modal'] > 3000000 && $data['bobot_modal'] <= 4000000) {
        $data['bobot_modal'] = '2';
      } else if ($data['bobot_modal'] > 4000000) {
        $data['bobot_modal'] = '1';
      }

      $data['bobot_penjualan'] = preg_replace('/\D/', '', $data['penjualan']);
      if ($data['bobot_penjualan'] > 6400000) {
        $data['bobot_penjualan'] = '5';
      } else if ($data['bobot_penjualan'] > 4800000 && $data['bobot_penjualan'] <= 6400000) {
        $data['bobot_penjualan'] = '4';
      } else if ($data['bobot_penjualan'] > 3200000 && $data['bobot_penjualan'] <= 4800000) {
        $data['bobot_penjualan'] = '3';
      } else if ($data['bobot_penjualan'] > 1600000 && $data['bobot_penjualan'] <= 3200000) {
        $data['bobot_penjualan'] = '2';
      } else if ($data['bobot_penjualan'] > 3000 && $data['bobot_penjualan'] <= 1600000) {
        $data['bobot_penjualan'] = '1';
      }

      $data['bobot_waktu'] = preg_replace('/\D/', '', $data['waktu']);
      if ($data['bobot_waktu'] > 0 && $data['bobot_waktu'] <= 6) {
        $data['bobot_waktu'] = '5';
      } else if ($data['bobot_waktu'] > 6 && $data['bobot_waktu'] <= 12) {
        $data['bobot_waktu'] = '4';
      } else if ($data['bobot_waktu'] > 12 && $data['bobot_waktu'] <= 18) {
        $data['bobot_waktu'] = '3';
      } else if ($data['bobot_waktu'] > 18 && $data['bobot_waktu'] <= 24) {
        $data['bobot_waktu'] = '2';
      } else if ($data['bobot_waktu'] > 24) {
        $data['bobot_waktu'] = '1';
      }
    }
    if ($topbar == 'akun') {
      $tabel = 'admin';
    }
    return $this->db->insert($tabel, $data);
  }

  public function ubahData($tabel, $data)
  {
    if ($tabel == 'barang') {
      $data['bobot_modal'] = preg_replace('/\D/', '', $data['modal']);
      if ($data['bobot_modal'] <= 1000000) {
        $data['bobot_modal'] = '5';
      } else if ($data['bobot_modal'] > 1000000 && $data['bobot_modal'] <= 2000000) {
        $data['bobot_modal'] = '4';
      } else if ($data['bobot_modal'] > 2000000 && $data['bobot_modal'] <= 3000000) {
        $data['bobot_modal'] = '3';
      } else if ($data['bobot_modal'] > 3000000 && $data['bobot_modal'] <= 4000000) {
        $data['bobot_modal'] = '2';
      } else if ($data['bobot_modal'] > 4000000) {
        $data['bobot_modal'] = '1';
      }

      $data['bobot_penjualan'] = preg_replace('/\D/', '', $data['penjualan']);
      if ($data['bobot_penjualan'] > 6400000) {
        $data['bobot_penjualan'] = '5';
      } else if ($data['bobot_penjualan'] > 4800000 && $data['bobot_penjualan'] <= 6400000) {
        $data['bobot_penjualan'] = '4';
      } else if ($data['bobot_penjualan'] > 3200000 && $data['bobot_penjualan'] <= 4800000) {
        $data['bobot_penjualan'] = '3';
      } else if ($data['bobot_penjualan'] > 1600000 && $data['bobot_penjualan'] <= 3200000) {
        $data['bobot_penjualan'] = '2';
      } else if ($data['bobot_penjualan'] > 3000 && $data['bobot_penjualan'] <= 1600000) {
        $data['bobot_penjualan'] = '1';
      }

      $data['bobot_waktu'] = preg_replace('/\D/', '', $data['waktu']);
      if ($data['bobot_waktu'] > 0 && $data['bobot_waktu'] <= 6) {
        $data['bobot_waktu'] = '5';
      } else if ($data['bobot_waktu'] > 6 && $data['bobot_waktu'] <= 12) {
        $data['bobot_waktu'] = '4';
      } else if ($data['bobot_waktu'] > 12 && $data['bobot_waktu'] <= 18) {
        $data['bobot_waktu'] = '3';
      } else if ($data['bobot_waktu'] > 18 && $data['bobot_waktu'] <= 24) {
        $data['bobot_waktu'] = '2';
      } else if ($data['bobot_waktu'] > 24) {
        $data['bobot_waktu'] = '1';
      }
      $this->db->where('id', $data['id']);
      return $this->db->update($tabel, $data);
    }

    if ($tabel == 'admin') {
      $this->db->where('id', $data['id']);
      return $this->db->update($tabel, $data);
    }

    if ($tabel == 'perhitungan_pm_smntr') {
      $temp = $this->db->get_where('perhitungan_pm_smntr', ['id_barang' => $data['id_barang']])->result_array();

      $dataUbah = [
        'nama_barang' => $temp[0]['nama_barang'],
        'kode_barang' => $temp[0]['kode_barang'],
        'modal' => $temp[0]['modal'],
        'bobot_modal' => $temp[0]['bobot_modal'],
        'penjualan' => $temp[0]['penjualan'],
        'bobot_penjualan' => $temp[0]['bobot_penjualan'],
        'waktu' => $temp[0]['waktu'],
        'bobot_waktu' => $temp[0]['bobot_waktu'],
        'GAP_M' => $temp[0]['GAP_M'],
        'GAP_P' => $temp[0]['GAP_P'],
        'GAP_W' => $temp[0]['GAP_W'],
        'GAP_M_fix' => $temp[0]['GAP_M_fix'],
        'GAP_P_fix' => $temp[0]['GAP_P_fix'],
        'GAP_W_fix' => $temp[0]['GAP_W_fix'],
        'NCF' => $temp[0]['NCF'],
        'NSF' => $temp[0]['NSF'],
        'NI' => $temp[0]['NI'],
        'hasil' => $temp[0]['hasil'],
        'kesimpulan' => $temp[0]['kesimpulan'],
        'keterangan' => $data['keterangan'],
        'presentasi_NCF/NSF' => $temp[0]['presentasi_NCF/NSF'],
        'presentasi_NCF2/NSF2/NI' => $temp[0]['presentasi_NCF2/NSF2/NI'],
      ];
      // print_r($dataUbah);
      // die;
      $this->db->set($dataUbah);
      $this->db->where('id_barang', $data['id_barang']);
      return $this->db->update($tabel);
      // $this->db->replace($tabel, $dataUbah);
      // print_r($dataUbah);
      // die;
    }
  }

  public function dataById($tabel, $id)
  {
    $this->db->where('id', $id);
    return $this->db->get($tabel)->row_array();
  }

  public function hapusData($tabel, $id)
  {
    if ($tabel == 'perhitungan_pm') {
      $this->db->where('tanggal', urldecode($id));
      $this->db->delete($tabel);
    } else if ($tabel == 'perhitungan_pm_smntr') {
      $this->db->where('id_barang', $id);
      $this->db->delete($tabel);
    } else {
      $this->db->where('id', $id);
      $this->db->delete($tabel);
    }
  }

  public function cariDataPerhitungan($f)
  {
    $this->db->where('tanggal', urldecode($f));
    // print_r(urldecode($f));
    return $this->db->get('perhitungan_pm')->result_array();
  }
}
