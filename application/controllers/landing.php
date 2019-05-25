<?php
defined ('BASEPATH') or exit('No direct script access allowed!');

class Landing extends CI_Controller
{
    public function __construct() {
		parent::__construct();
		$this->load->model('land_models');
    }
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('landing');
        $this->load->view('templates/footer');
        
    }

  public function auth()
	{
    $username   = strtolower($this->input->post('username'));
		$password   = md5($this->input->post('password'));
		$result     = $this->land_models->auth($username, $password);
		if ($result) {
			if ($result[0]['status_user'] == 1) {
				if (($result[0]['akses_user'] == 1) || ($result[0]['akses_user'] == 2)) {
					$sess = array(
				    	'akses'		=> $result[0]['akses_user'],
				    	'user'		=> $result[0]['id_user'],
              'nama'		=> $result[0]['nama_user'],
				    	'logged_in' => TRUE
					);
					$this->session->set_userdata($sess);
					redirect('dashboard');
				}
			}else{
				$this->session->set_flashdata('message', 'Username Anda '.ucwords($username).' Sedang Dinonaktifkan');
				redirect(base_url());
			}
		} else {
			$this->session->set_flashdata('message', 'Kombinasi Username atau Password Salah');
			redirect(base_url('#login_frm'));
		}

	}
	
 function logout()
	{	
		$this->session->sess_destroy();
		redirect('');
	}

  
}
