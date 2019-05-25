<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class land_models extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
 
  public function auth($username, $password)
	{
		return $this->db->where(array('username' => $username, 'password' => $password))
						->get('users')
						->result_array();
	}

}

?>