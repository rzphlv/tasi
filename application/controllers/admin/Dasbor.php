<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function index()
	{
		$data = array (	'title' => 'Halaman dasbor',
						'isi'   => 'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
}