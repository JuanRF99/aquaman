<?php
defined ('BASEPATH') or exit('No direct script access allowed!');

class Dashboard extends CI_Controller
{
    public function __construct() 
    {
    parent::__construct();
    if(empty($this->session->userdata('nama')))
    {
  redirect(site_url());
  }
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('auth/dashboard');
    }

    /*============================= Form Barang ========================== */

    public function barang()
    {
      $this->load->database();
		  $query = $this->db->get('barang');
		  $data['barangs'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/barang/dt_barang',$data);
    }

    public function tambah_brg()
    {
      $this->load->database();
      $query = $this->db->get('supplier');
      $data['supplies'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/barang/tambah_barang',$data);
    }

    public function proses_tambah_brg()
    {
      $nama_supplier = $this->input->post('nama_supplier');
      $nama_brg = $this->input->post('nama_brg');
      $harga = $this->input->post('harga');
      $stok = $this->input->post('stok');
      $totalh = $harga*$stok;
      $date = date('Y-m-d H:i:s');

      $databrg = array(
        'nama_brg' => $nama_brg,
        'stok' => $stok,
        'tgl_update' => $date,
        'supplier' => $nama_supplier,
        'harga' => $harga,
      );

      $datapembelian = array(
        'tgl' => $date,
        'totalq' => $stok,
        'supplier' => $nama_supplier,
        'barang' => $nama_brg,
        'totalh' => $totalh,
      );

      $this->load->database();
      $this->db->insert('barang',$databrg);
      $this->db->insert('pembelian',$datapembelian);
      redirect('/dashboard/barang/');
    }

    public function frm_updt_brg($id)
    {
      $this->load->database();
      $query = $this->db->get_where('barang', array('id' => $id));
      $data['barang'] = $query->row_array();
      $query = $this->db->get('supplier',array('id' => $id));
      $data['supplier'] = $query->row_array();

      
      $this->load->view('templates/header');
      $this->load->view('/auth/barang/frm_updt_brg', $data);
    }

    public function proses_update_brg($id = false)
    {
      $this->load->view('templates/header');

      $this->load->database();
      $nm_sup = $this->input->post('nm_sup');
      $nm_brg = $this->input->post('nm_brg');
      $hrg = $this->input->post('hrg');
      $stok = $this->input->post('stok');
      $totalh = $hrg*$stok;
      $date = date('Y-m-d H:i:s');
     
      $datapembelian = array(
        'tgl' => $date,
        'totalq' => $stok,
        'supplier' => $nm_sup,
        'barang' => $nm_brg,
        'totalh' => $totalh
      );
      
      $this->db->query('UPDATE barang SET stok = stok + '.$_POST['stok'].' WHERE id = '.$id);
      $this->db->insert('pembelian',$datapembelian);
      redirect('/dashboard/barang');  
    }

    public function pakai_barang($id)
    {
      $this->load->database();
      $query = $this->db->get_where('barang', array('id' => $id));
      $data['barang'] = $query->row_array();
      
      $this->load->view('templates/header');
      $this->load->view('/auth/barang/frm_pakai_brg', $data);
    }

    public function pros_pakai_brg($id = false)
    {
      $this->load->database();
      $date = date('Y-m-d H:i:s');
      $jumlah = $this->input->post('jumlah');
     
      $datapemakaian = array(
        'tgl_pakai' => $date,
        'barang' => $this->input->post('nama_brg'),
        'jumlah' => $jumlah
      );
    
      $this->db->query("UPDATE barang SET stok='$_POST[sisa]',tgl_update='$date' WHERE id =$id");
      $this->db->insert('pemakaian',$datapemakaian);
      redirect('/dashboard/barang');

    }

    public function delete_barang($id)
    {
      $this->load->database();
      $this->db->delete('barang', array('id' => $id));
      redirect('/dashboard/barang');
    }

    /*============================= End Form Barang ========================== */

    public function kns()
    {
      $this->load->database();
      $query = $this->db->get('konsumen');
      $data['kons'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/konsumen',$data);
    }

    public function addc()
    {
      $this->load->view('templates/header');
      $this->load->view('auth/tambah_konsumen');
    }

    public function add_cust()
    {
      $this->load->database();
      $nm_konsumen = $this->input->post('nm_konsumen');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
      
      $data = array(
        'nama' => $nm_konsumen,
        'alamat' => $alamat,
        'telp' => $telp
      );
      $query = $this->db->insert('konsumen', $data);
      if(!!$query)
      {
        
        $this->session->set_flashdata('message', 'Berhasil Menambahkan Data <br> ======================
        <br> Nama &nbsp; : <b>'.$nm_konsumen.'</b><br> Alamat : <b>'.$alamat.'</b> <br> Telp &nbsp;&nbsp;&nbsp; : <b> '.$telp.'</b> ');
        redirect('dashboard/addc');
        
      }else {
        $this->session->set_flashdata('message','Gagal Menambahkan, <a href="site_url("dashboard/addc")"> klik disini</a>');
      }
    }

    public function spply()
    {
      $this->load->database();
      $query = $this->db->get('supplier');
      $data['supplies'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/supplier',$data);
    }

    public function kryw()
    {
      $this->load->database();
      $query = $this->db->get('users');
      $data['pengguna'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/karyawan',$data);
    }

    /* =========================== Jenis Laundry ============================ */

    public function jl()
    {
      $this->load->database();
      $query = $this->db->get('jenis');
      $data['types'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/jenis/jenis',$data);
    }

    public function add_jl()
    {
      $this->load->view('templates/header');
      $this->load->view('auth/jenis/add_jl');

      $this->load->database();

      $data = array(
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga'),
      );

      if(isset($_POST['submit']))
      {
        $query = $this->db->insert('jenis', $data);
        if(!!$query)
        {
          
          $this->session->set_flashdata('message', 'Berhasil Menambahkan Data Jenis Laundry <br> ==============================
          <br> Jenis &nbsp; : <b>'.$this->input->post('jenis').'</b><br> Harga : <b>'.$this->input->post('harga').'</b> ');
          redirect('dashboard/add_jl');
          
        }else {
          $this->session->set_flashdata('message','Gagal Menambahkan, <a href="site_url("dashboard/add_jl")"> klik disini</a>');
        }
      }

    }

    public function edit_jl($id = false)
    {
      $this->load->database();
      $query = $this->db->get_where('jenis', array('id' => $id));
      $data['jenis'] = $query->row_array();
      
      $this->load->view('templates/header');
      $this->load->view('/auth/jenis/frm_edit_jenis', $data);

      $data = array(
        'jenis' => $this->input->post('jenis'),
        'harga' => $this->input->post('harga'),
      );

      if(isset($_POST['submit']))
      {
        $this->db->update('jenis', $data, array('id' => $id));
        redirect('dashboard/jl');
      }
    
    }

    public function delete_jl($id)
    {
      $this->load->database();
      $this->db->delete('jenis', array('id' => $id));
      redirect('dashboard/jl');
    }

    /* ===================== End Jenis Pakai =================== */

    public function sell()
    {
      $this->load->database();
      $query = $this->db->get('pembelian');
      $data['sells'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/pembelian',$data);
    }

    public function pakai()
    {
      $this->load->database();
      $query = $this->db->get('pemakaian');
      $data['uses'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/pemakaian',$data);
    }

    // ================================= Admin Menu =============================

    //-------------------------------- Karyawan ---------------------------------

    public function add_emp()
    {
      $this->load->view('templates/header');
      $this->load->view('auth/admin/add_emp');

      
    $this->load->database();

      $nik = $this->input->post('nik');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
      $gender = $this->input->post('gender');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      
      $data = array(
        'nik' => $nik,
        'nama_user' =>$nama,
        'alamat' =>$alamat,
        'telp' => $telp,
        'gender' => $gender,
        'username' => $username,
        'password' => md5($password)
      );
      $this->db->where('username',$username);
      $select = $this->db->get('users');
      
      if(isset($_POST['submit']))
      {
        if($select->num_rows() <> 0)
        {
          echo "<script>alert('ERROR : Username sudah terdaftar, silahkan masukkan username yang lain')</script>";
        }else
        {
          $query = $this->db->insert('users', $data);
          if(!!$query)
          {
            
            $this->session->set_flashdata('message', 'Berhasil Menambahkan Data Karyawan <br> ======================
            <br><b>Info Karyawan</b> <br> NIK &nbsp; : <b>'.$nik.'</b><br> Nama : <b>'.$nama.'</b> <br> Alamat &nbsp;&nbsp;&nbsp; : <b> '.$alamat.'</b>
            <br> Telp : <b> '.$telp.' </b> <br> Gender : <b> '.$gender.' <br> ====================== <br> <b> Info Akun </b>
            <br> Username : <b> '.$username.' </b> <br> Password : <b> '.$password.' </b> ');
            redirect('dashboard/add_emp');
            
          }else {
            $this->session->set_flashdata('message','Gagal Menambahkan, <a href="site_url("dashboard/add_emp")"> klik disini</a>');
          }
        }
      }
    }

    public function man_emp()
    {
      $this->load->database();
      $query = $this->db->get('users');
      $data['pengguna'] = $query->result_array();
      $this->load->view('templates/header');
      $this->load->view('auth/admin/man_emp',$data);
    }

    public function frm_updt_emp($id)
    {
      $this->load->database();
      $query = $this->db->get_where('users', array('id_user' => $id));
      $data['pengguna'] = $query->row_array();
      
      $this->load->view('templates/header');
      $this->load->view('/auth/admin/frm_updt_emp', $data);
    }

    public function pros_updt_emp($id = false)
    {
      $this->load->database();
      $nama = $this->input->post('nama_user');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
      $gender = $this->input->post('gender');
    
      $data = array(
        'nama_user' => $nama,
        'alamat' => $alamat,
        'telp' => $telp,
        'gender' => $gender,
      );

      $this->db->update('users', $data, array('id_user' => $id));
      redirect('dashboard/man_emp'); 
    }

    public function delete_emp($id)
    {
      $this->load->database();
      $this->db->delete('users',array('id_user' => $id));
      redirect('dashboard/man_emp');
    }

    // -------------------- End Karyawan ---------------------------------

    // -------------------- Supplier ------------------------------------

    public function add_spply()
    {
      $this->load->view('templates/header');
      $this->load->view('auth/admin/add_spply');

      $this->load->database();

      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
      
      $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'telp' => $telp
      );

      if(isset($_POST['submit']))
      {
        $query = $this->db->insert('supplier', $data);
        if(!!$query)
        {
          
          $this->session->set_flashdata('message', 'Berhasil Menambahkan Data Konsumen <br> ==============================
          <br> Nama &nbsp; : <b>'.$nama.'</b><br> Alamat : <b>'.$alamat.'</b> <br> Telp &nbsp;&nbsp;&nbsp; : <b> '.$telp.'</b> ');
          redirect('dashboard/add_spply');
          
        }else {
          $this->session->set_flashdata('message','Gagal Menambahkan, <a href="site_url("dashboard/add_spply")"> klik disini</a>');
        }
      }

    }

    public function man_spply()
    {
      $this->load->database();
      $this->load->view('templates/header');
      $query = $this->db->get("supplier");
      $data['supplier'] = $query->result_array();

      $this->load->view('auth/admin/man_spply',$data);
    }

    public function frm_edit_spply($id)
    {
      $this->load->database();
      $query = $this->db->get_where('supplier', array('id' => $id));
      $data['supplier'] = $query->row_array();
      
      $this->load->view('templates/header');
      $this->load->view('/auth/admin/frm_edit_spply', $data);
    }

    public function pros_edit_spply($id = false)
    {
      $this->load->database();
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $telp = $this->input->post('telp');
    
      $data = array(
        'nama' => $nama,
        'alamat' => $alamat,
        'telp' => $telp,
      );

      $this->db->update('supplier', $data, array('id' => $id));
      redirect('dashboard/man_spply'); 
    }

    public function delete_spply($id)
    {
      $this->load->database(); 
      $this->db->delete('supplier',array('id' => $id));
      redirect('dashboard/man_spply');  
    }

    //------------------ End Spply -----------------------

    /* ==================== END ADMIN MENU ===================== */

    public function transaction()
    {
      $this->load->database();
      $query = $this->db->get('konsumen');
      $data['konsumens'] = $query->result_array();
      $query = $this->db->get('jenis');
      $data['types'] = $query->result_array();
      if(isset($_POST['id']))
      {
      $jeniss	= $this->input->post('jenis');
      $query = $this->db->get_where('jenis', array('jenis' => $jeniss));
      $data['types'] = $query->result_array();
      }

      $this->load->view('templates/header');
      $this->load->view('auth/transaction',$data);
    }

  public function trhistory()
  {
    $this->load->database();
    $query = $this->db->get("transaksi");
    $data['trans'] = $query->result_array();

    $this->load->view('templates/header');
    $this->load->view('auth/trhistory',$data);
  }

  public function kwitansi($id)
  {
    $this->load->database();
    // $query = $this->db->get_where('transaksi', array('id' => $id));
    // $data['trans'] = $query->row_array();
    // $query = $this->db->get_where('users', array('username' => $data['pengguna']));
    // $data['users'] = $query->row_array();
    $this->load->view('auth/lib/fpdf/fpdf.php');
    $this->load->view('auth/lib/lib-function.php');
    $this->load->view('auth/kwitansi');
  }


}

