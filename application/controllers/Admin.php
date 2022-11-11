<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  //deklarasi library untuk semua fungsi
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  //deklarasi fungsi 'index'
  public function index()
  {

    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi' 
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      $this->db->empty_table('perhitungan_pm_smntr');
      //deklarasi index variabel $data
      $data['topbar'] = 'index';
      $data['title'] = "Admin";
      $data['semua'] = $this->M_barang->SemuaDataBarang();

      //load view berisikan variabel $data
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar_admin');
      $this->load->view('templates/topbar_admin', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('templates/footer');
    }
  }

  //deklarasi fungsi 'index_perhitungan'
  public function index_perhitungan()
  {
    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi' 
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      //deklarasi index variabel $data
      $data['topbar'] = 'perhitungan';
      $data['title'] = "Halaman Perhitungan";
      $data['semua'] = $this->M_barang->SemuaDataBarang();

      //load view berisikan variabel $data
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar_admin');
      $this->load->view('templates/topbar_admin', $data);
      $this->load->view('admin/index_perhitungan', $data);
      $this->load->view('templates/footer');
    }
  }

  //deklarasi fungsi 'index_akun'
  public function index_akun()
  {
    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi' 
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      //deklarasi index variabel $data
      $data['topbar'] = 'akun';
      $data['title'] = "Halaman Akun";
      $data['semua'] = $this->M_barang->semuaDataBarang();

      //load view berisikan variabel $data
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar_admin');
      $this->load->view('templates/topbar_admin', $data);
      $this->load->view('admin/index_akun', $data);
      $this->load->view('templates/footer');
    }
  }

  //deklarasi fungsi 'index_tambah_data'
  public function index_tambah_data($topbar, $namaOrkode = null)
  {
    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi' 
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      //deklarasi index variabel $data
      $data['namaOrkode'] = $namaOrkode;
      $data['topbar'] = $topbar;
      $data['title'] = "Tambah Data";

      //deklarasi kondisi jika variabel $topbar = 'index' 
      if ($topbar == 'index') {

        //load view berisikan variabel $data
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar_admin');
        $this->load->view('admin/index_tambah_data', $data);
        $this->load->view('templates/footer');
      }

      if ($topbar == 'akun') {

        //load view berisikan variabel $data
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar_admin');
        $this->load->view('admin/index_tambah_data');
        $this->load->view('templates/footer');
      }
    }
  }

  public function json_semua_data()
  {
    $semuaData = $this->M_barang->semuaDataBarang();
    echo json_encode($semuaData);
  }

  //deklarasi fungsi tambah_data
  public function tambah_data($topbar)
  {
    $semuaData = $this->M_barang->semuaDataBarang();
    $duplikat = false;

    //deklarasi kondisi jika variabel $topbar = 'index'
    if ($topbar == 'index') {

      //deklarasi variabel $redir dan index $data
      $redir = 'index';
      $data = [
        'nama_barang' => $this->input->post('nama_barang'),
        'kode_barang' => $this->input->post('kode_barang'),
        'modal' => $this->input->post('modal'),
        'bobot_modal' => null,
        'penjualan' => $this->input->post('penjualan'),
        'bobot_penjualan' => null,
        'waktu' => $this->input->post('waktu'),
        'bobot_waktu' => null
      ];

      //deklarasi perulangan sebanyak jumlah jumlah data array $semuaData
      foreach ($semuaData['barang'] as $rowSD) {
        if ($data['kode_barang'] == $rowSD['kode_barang']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_tambah_kode', '<div class="alert alert-success" role="alert">
      Gagal</div>');
          redirect(base_url('Admin/index_tambah_data/' . $topbar . '/' . $data['kode_barang']));
        }

        if ($data['nama_barang'] == $rowSD['nama_barang']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_tambah_nama', '<div class="alert alert-success" role="alert">
    Gagal</div>');
          redirect(base_url('Admin/index_tambah_data/' . $topbar . '/' . $data['nama_barang']));
        }
      }
    }


    //deklarasi kondisi jika variabel $topbar = 'akun'
    if ($topbar == 'akun') {

      //deklarasi variabel $password2 dan $redir dan index $data
      $password2 = md5($this->input->post('password2'));
      $redir = 'index_akun';
      $data = [
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password'))
      ];

      foreach ($semuaData['admin'] as $rowSD) {
        if ($data['username'] == $rowSD['username']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_tambah_username', '<div class="alert alert-success" role="alert">
      Gagal</div>');
          redirect(base_url('Admin/index_tambah_data/' . $topbar . '/' . urlencode($data['username'])));
        }
        if ($data['email'] == $rowSD['email']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_tambah_email', '<div class="alert alert-success" role="alert">
      Gagal</div>');
          redirect(base_url('Admin/index_tambah_data/' . $topbar . '/' . urlencode($data['email'])));
        }
      }

      //deklarasi kondisi jika $data index 'password' tidak sama dengan variabel $password2 
      if ($data['password'] != $password2) {

        //dekarasi flash data
        $this->session->set_flashdata('message_gagal_tambah_pass', '<div class="alert alert-success" role="alert">
    Gagal</div>');

        //deklarasi redirect ke 'index/akun'
        redirect(base_url('Admin/index_tambah_data/' . $topbar));
      }
    }

    //deklarasi variabel $query untuk menampung nilai dari proses tambah data
    if ($duplikat == false) {
      $query = $this->M_barang->tambahData($data, $topbar);
    }

    //deklarasi kondisi jika $query = true maka set flash_data message_tambah
    if ($query == true) {
      $this->session->set_flashdata('message_tambah', '<div class="alert alert-success" role="alert">
    Berhasil</div>');

      //deklarasi kondisi jika selain $query = true maka  set flash_data message_gagal_tambah
    } else {
      $this->session->set_flashdata('message_gagal_tambah', '<div class="alert alert-success" role="alert">
    Gagal</div>');
    }

    //deklarasi redirect ke 'index/akun'
    redirect(base_url('Admin/' . $redir));
  }

  //deklarasi fungsi 'index_submit'
  public function index_submit($p_NCF = null, $p_NSF = null, $p_NCF2 = null, $p_NSF2 = null, $p_NI = null)
  {
    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi'
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      //deklarasi index $data
      $data['topbar'] = 'index';
      $data['title'] = "Bobot Aspek dan GAP";
      $data['semua'] = $this->M_barang->SemuaDataBarang();
      if ($p_NCF != null && $p_NSF != null) {
        $data['presentasi_NCF_NSF'] = [
          'presentasi_NCF' => $p_NCF,
          'presentasi_NSF' => $p_NSF
        ];
      }

      //deklarasi kondisi
      if ($this->input->post('presentasi_NCF') && $this->input->post('presentasi_NSF')) {
        $data['presentasi_NCF_NSF'] = [
          'presentasi_NCF' => $this->input->post('presentasi_NCF'),
          'presentasi_NSF' => $this->input->post('presentasi_NSF')
        ];
      }
      if ($p_NCF == null && $p_NSF == null && !$this->input->post('presentasi_NCF') && !$this->input->post('presentasi_NSF')) {
        $data['presentasi_NCF_NSF'] = [
          'presentasi_NCF' => 70,
          'presentasi_NSF' => 30
        ];
      }

      if ($p_NCF2 != null && $p_NSF2 != null && $p_NI != null) {
        $data['presentasi_NCF2_NSF2_NI'] = [
          'presentasi_NCF2' => $p_NCF2,
          'presentasi_NSF2' => $p_NSF2,
          'presentasi_NI' => $p_NI
        ];
      }
      if ($this->input->post('presentasi_NCF2') && $this->input->post('presentasi_NSF2') && $this->input->post('presentasi_NI')) {
        $data['presentasi_NCF2_NSF2_NI'] = [
          'presentasi_NCF2' => $this->input->post('presentasi_NCF2'),
          'presentasi_NSF2' => $this->input->post('presentasi_NSF2'),
          'presentasi_NI' => $this->input->post('presentasi_NI')
        ];
      }
      if ($p_NCF2 == null && $p_NSF2 == null && $p_NI == null && !$this->input->post('presentasi_NCF2') && !$this->input->post('presentasi_NSF2') && !$this->input->post('presentasi_NI')) {
        $data['presentasi_NCF2_NSF2_NI'] = [
          'presentasi_NCF2' => 40,
          'presentasi_NSF2' => 40,
          'presentasi_NI' => 20
        ];
      }

      //deklarasi load view
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar_admin');
      $this->load->view('templates/topbar_admin');
      $this->load->view('admin/index_submit', $data);
      $this->load->view('templates/footer');
    }
  }

  public function tambahKet($p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI)
  {
    $data = [
      'id_barang' => $this->input->post('id'),
      'keterangan' => $this->input->post('tambahKet')
    ];
    $this->M_barang->ubahData('perhitungan_pm_smntr', $data);
    $this->session->set_flashdata('message_tambah', '<div class="alert alert-success" role="alert">Berhasil</div>');
    redirect(base_url('Admin/index_profile_matching/' . $p_NCF . '/' . $p_NSF . '/' . $p_NCF2 . '/' . $p_NSF2 . '/' . $p_NI));
  }

  public function ubahKet($p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI)
  {
    $data = [
      'id_barang' => $this->input->post('id'),
      'keterangan' => $this->input->post('ubahKet')
    ];
    $this->M_barang->ubahData('perhitungan_pm_smntr', $data);
    $this->session->set_flashdata('message_ubah', '<div class="alert alert-success" role="alert">Berhasil</div>');
    redirect(base_url('Admin/index_profile_matching/' . $p_NCF . '/' . $p_NSF . '/' . $p_NCF2 . '/' . $p_NSF2 . '/' . $p_NI));
  }

  public function hapusKet($id, $p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI)
  {
    $data = [
      'id_barang' => $id,
      'keterangan' => ''
    ];
    $this->M_barang->ubahData('perhitungan_pm_smntr', $data);
    $this->session->set_flashdata('message_hapus', '<div class="alert alert-success" role="alert">Berhasil</div>');
    redirect(base_url('Admin/index_profile_matching/' . $p_NCF . '/' . $p_NSF . '/' . $p_NCF2 . '/' . $p_NSF2 . '/' . $p_NI));
  }

  //deklarasi fungsi 'index_profile_matching'
  public function index_profile_matching($p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI, $key = null, $id2 = null)
  {
    //deklarasi kondisi jika tidak ada ada sesi yang berindex 'nama($username)' maka redirect ke controller 'Autentifikasi'
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      $data['semua'] = $this->M_barang->SemuaDataBarang();
      $data['presentasi_NCF'] = $p_NCF;
      $data['presentasi_NSF'] = $p_NSF;
      $data['presentasi_NCF2'] = $p_NCF2;
      $data['presentasi_NSF2'] = $p_NSF2;
      $data['presentasi_NI'] = $p_NI;
      $data['profile_matching_awal'] = $this->M_barang->profileMatching($data['semua'], $p_NCF, $p_NSF, $p_NCF2, $p_NSF2, $p_NI);

      //deklarasi index $data
      $data['key2'] = $key;
      $data['key'] = $this->input->post('key');
      $data['id2'] = $id2;
      $data['id'] = $this->input->post('id');
      $data['keterangan'] = $this->input->post('keterangan');
      $data['ubah'] = $this->input->post('ubah');

      $data['topbar'] = 'index';
      $data['title'] = "Metode Profile Matching";
      $data['profile_matching'] = $this->db->get('perhitungan_pm_smntr')->result_array();
      $simpan = false;
      // $p_NCF = explode("/",   $data['profile_matching']);

      //load view dan kirim variabel $data
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar_admin');
      $this->load->view('templates/topbar_admin');
      $this->load->view('admin/index_profile_matching', $data);
      $this->load->view('templates/footer');

      //deklarasi kondisi jika tombol 'simpan' di klik, maka simpan data ke database 'barang' tabel 'perhitungan_pm'
      if ($this->input->post('simpan')) {

        //deklarasi variabel $date1 dan $date2
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');
        $date2 = explode(":", $this->input->post('date2'));
        $date2[0]++;
        $date2 = implode(":", $date2);

        //deklarasi perulangan untuk menentukan waktu setiap barang
        foreach ($data['profile_matching'] as $pm) {
          $pm['id_barang'] = '';
          $pm['tanggal'] = 'Tanggal: ' . $date1 . '<br> Waktu: ' . $date2;
          $this->db->insert('perhitungan_pm', $pm);
        }
        $simpan = true;
      }

      //deklarasi kondisi
      if ($simpan == true) {
        $this->session->set_flashdata('message_simpan', '<div class="alert alert-success" role="alert">Data berhasil di simpan!</div>');
        redirect(base_url('Admin/index_profile_matching/' . $data['presentasi_NCF'] . '/' . $data['presentasi_NSF'] . '/' . $data['presentasi_NCF2'] . '/' . $data['presentasi_NSF2'] . '/' . $data['presentasi_NI']));
      }
    }
  }

  //deklarasi fungsi 'index_ubah_data'
  public function index_ubah_data($tabel, $id = null, $namaOrkode = null)
  {
    //deklarasi kondisi
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {

      //deklarasi index $data
      $data['title'] = "Ubah Data";
      $data['tabel'] = $tabel;

      //deklarasi kondisi
      if ($namaOrkode != null) {
        $data['namaOrkode'] = $namaOrkode;
      }
      if ($tabel == 'barang') {

        //deklarasi variabel $ data dan $data_id
        $data['topbar'] = 'index';
        $data_id = $this->M_barang->dataById($tabel, $id);

        //deklarasi view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar_admin');
        $this->load->view('admin/index_ubah_data', $data_id);
        $this->load->view('templates/footer');
      }

      //deklarasi kondisi
      if ($tabel == 'admin') {

        //deklarasi $data dan $data_id
        $data['topbar'] = 'akun';
        $data_id = $this->M_barang->dataById($tabel, $id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar_admin');
        $this->load->view('admin/index_ubah_data', $data_id);
        $this->load->view('templates/footer');
      }
    }
  }

  public function ubah_data($tabel)
  {
    $semuaData = $this->M_barang->semuaDataBarang();
    $duplikat = false;
    if ($tabel == 'barang') {

      $redir = "index";
      $data = [
        'id' => $this->input->post('id'),
        'nama_barang' => $this->input->post('nama_barang'),
        'kode_barang' => $this->input->post('kode_barang'),
        'modal' => $this->input->post('modal'),
        'bobot_modal' => null,
        'penjualan' => $this->input->post('penjualan'),
        'bobot_penjualan' => null,
        'waktu' => $this->input->post('waktu'),
        'bobot_waktu' => null
      ];

      foreach ($semuaData['barang'] as $rowSD) {
        if ($data['kode_barang'] == $rowSD['kode_barang']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_ubah_kode', '<div class="alert alert-success" role="alert">
      Gagal</div>');
          redirect(base_url('Admin/index_ubah_data/' . $tabel . '/' . $data['id'] . '/' . $data['kode_barang']));
        }

        if ($data['nama_barang'] == $rowSD['nama_barang']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_ubah_nama', '<div class="alert alert-success" role="alert">
    Gagal</div>');
          redirect(base_url('Admin/index_ubah_data/' . $tabel . '/' . $data['id'] . '/' . $data['nama_barang']));
        }
      }
    }

    if ($tabel == 'admin') {
      $password2 = md5($this->input->post('password2'));
      $data = [
        'id' => $this->input->post('id'),
        'email' => $this->input->post('email'),
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password'))
      ];
      // print_r($data);
      // die;
      $redir = "index_akun";
      if ($data['password'] != $password2) {
        $this->session->set_flashdata('message_gagal_ubah', '<div class="alert alert-success" role="alert">Gagal!</div>');
        redirect(base_url('Admin/index_ubah_data/' . $tabel . '/' . $data['id']));
      }


      foreach ($semuaData['admin'] as $rowSD) {
        if ($data['username'] == $rowSD['username']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_ubah_username', '<div class="alert alert-success" role="alert">
      Gagal</div>');
          redirect(base_url('Admin/index_ubah_data/' . $tabel . '/' . $data['id'] . '/' . urlencode($data['username'])));
        }

        if ($data['email'] == $rowSD['email']) {
          $duplikat = true;

          //dekarasi flash data
          $this->session->set_flashdata('message_gagal_ubah_email', '<div class="alert alert-success" role="alert">
    Gagal</div>');
          redirect(base_url('Admin/index_ubah_data/' . $tabel . '/' . $data['id'] . '/' . urlencode($data['email'])));
        }
      }
    }
    if ($duplikat == false) {
      $query = $this->M_barang->ubahData($tabel, $data);
    }
    if ($query == true) {
      $this->session->set_flashdata('message_ubah', '<div class="alert alert-success" role="alert">Berhasil!</div>');
    } else {
      $this->session->set_flashdata('message_gagal_ubah', '<div class="alert alert-success" role="alert">Gagal!</div>');
    }
    redirect(base_url('Admin/' . $redir));
  }

  public function cari_data_perhitungan($f = null)
  {
    $data['topbar'] = 'perhitungan';
    $data['title'] = "Halaman Perhitungan";
    $data['key'] = $f;
    $data['data_by_key'] = $this->M_barang->cariDataPerhitungan($data['key']);
    $arr = explode("/", $data['data_by_key'][0]['presentasi_NCF/NSF']);
    $data['presentasi_NCF'] = $arr[0];
    $data['presentasi_NSF'] = $arr[1];
    $arr2 = explode("/", $data['data_by_key'][0]['presentasi_NCF2/NSF2/NI']);
    $data['presentasi_NCF2'] = $arr2[0];
    $data['presentasi_NSF2'] = $arr2[1];
    $data['presentasi_NI'] = $arr2[2];

    $data['semua'] = $this->M_barang->SemuaDataBarang();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar_admin');
    $this->load->view('templates/topbar_admin');
    $this->load->view('admin/index_data_perhitungan', $data);
    $this->load->view('templates/footer');
  }

  public function index_hasil_simpan_perhitungan($key = null)
  {
    $data['topbar'] = 'perhitungan';
    $data['title'] = "Halaman Perhitungan";
    $data['key'] = $key;
    $data['data_by_key'] = $this->M_barang->cariDataPerhitungan($data['key']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar_admin');
    $this->load->view('templates/topbar_admin');
    $this->load->view('admin/index_hasil_simpan_data_perhitungan', $data);
    $this->load->view('templates/footer');
  }

  public function cetak()
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      $data['title'] = 'Halaman Print';
      $data['semua'] = $this->M_barang->SemuaDataBarang();

      $this->load->view('templates/header', $data);
      $this->load->view('user/index_print', $data);
      $this->load->view('templates/footer', $data);
    }
  }

  public function hapus_data($tabel, $id)
  {
    if (empty($this->session->userdata('nama'))) {
      redirect('Autentifikasi/index_login');
    } else {
      if ($tabel == 'barang') {
        $redir = 'index';
      }
      if ($tabel == 'admin') {
        $redir = 'index_akun';
      }
      if ($tabel == 'perhitungan_pm') {
        $redir = 'index_perhitungan';
      }

      $this->M_barang->hapusData($tabel, $id);
      $this->session->set_flashdata('message_hapus', '<div class="alert alert-success" role="alert">
      Password telah dirubah, silahkan Login!</div>');
      redirect(base_url('Admin/' . $redir));
    }
  }
}
