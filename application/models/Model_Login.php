<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_Login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('email',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('mahasiswaa');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('email'	=> $row->email,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('admin/Dasbor');
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Maaf Email atau Sandi salah
					              </div>');
			redirect('mahasiswa/login');
		}
	}
}
