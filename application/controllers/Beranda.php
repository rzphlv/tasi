<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller {
	public function index()
	{
		$isi['konten'] = 'Mahasiswa/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['sub_judul'] = '';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
