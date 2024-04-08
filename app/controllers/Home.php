<?php

class Home extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['title'] = 'Halaman Home';
		$data['total_qty_masuk'] = $this->model('LimbahmasukModel')->get_jumlah_masuk();
		$data['total_qty_keluar'] = $this->model('LimbahkeluarModel')->get_jumlah_keluar();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}