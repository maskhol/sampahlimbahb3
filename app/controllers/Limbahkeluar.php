<?php

class Limbahkeluar extends Controller {
	
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
		$data['title'] = 'Data Limbah Keluar';
		$data['limbah_keluar'] = $this->model('LimbahkeluarModel')->getAllLimbahkeluar();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('limbahkeluar/index', $data);
		$this->view('templates/footer');
	}
	public function lihatlaporan()
	{
		$data['title'] = 'Data Laporan Limbah Keluar';
		$data['limbah_b3'] = $this->model('LimbahkeluarModel')->getAllLimbahkeluar();
		$this->view('limbahkeluar/lihatlaporan', $data);
	}

	public function laporan()
	{
		$data['limbah_b3'] = $this->model('LimbahkeluarModel')->getAllLimbahkeluar();

			$pdf = new FPDF('p','mm','A4');
			// membuat halaman baru
			$pdf->AddPage();
			// setting jenis font yang akan digunakan
			$pdf->SetFont('Arial','B',14);
			// mencetak string 
			$pdf->Cell(190,7,'LAPORAN LIMBAH KELUAR',0,1,'C');
			 
			// Memberikan space kebawah agar tidak terlalu rapat
			$pdf->Cell(10,7,'',0,1);
			 
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(85,6,'JUDUL',1);
			$pdf->Cell(30,6,'PENERBIT',1);
			$pdf->Cell(30,6,'PENGARANG',1);
			$pdf->Cell(15,6,'TAHUN',1);
			$pdf->Cell(25,6,'KATEGORI',1);
			  $pdf->Ln();
			$pdf->SetFont('Arial','',10);
			 
			foreach($data['limbah_b3'] as $row) {
			    $pdf->Cell(85,6,$row['judul'],1);
			    $pdf->Cell(30,6,$row['penerbit'],1);
			    $pdf->Cell(30,6,$row['pengarang'],1);
			    $pdf->Cell(15,6,$row['tahun'],1); 
			    $pdf->Cell(25,6,$row['nama_kategori'],1);
			    $pdf->Ln(); 
			}
			
			$pdf->Output('D', 'Laporan Limbah Keluar.pdf', true);

	}
	public function cari()
	{
		$data['title'] = 'Data Limbah Keluar';
		$data['limbah_b3'] = $this->model('LimbahkeluarModel')->cariLimahkeluar();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('limbahkeluar/index', $data);
		$this->view('templates/footer');
	}

	public function edit($id){

		$data['title'] = 'Edit Data Limbah';
		$data['limbah_b3'] = $this->model('LimbahkeluarModel')->getLimbahkeluarById($id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('limbahkeluar/edit', $data);
		$this->view('templates/footer');
	}

	public function tambah(){
		
		$data['title'] = 'Tambah Data Limbah';		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('limbahkeluar/create', $data);
		$this->view('templates/footer');
	}

	public function simpanLimbahkeluar(){		
			
		if( $this->model('LimbahkeluarModel')->tambahLimbahkeluar($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/limbah_b3');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/limbah_b3');
			exit;	
		}
	}

	public function updateLimbahkeluar(){	
		if( $this->model('LimbahkeluarModel')->updateDataLimbahkeluar($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. base_url . '/limbah_b3');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. base_url . '/limbah_b3');
			exit;	
		}
	}

	public function hapus($id){
		if( $this->model('LimbahkeluarModel')->deleteLimbahkeluar($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/limbah_b3');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/limbah_b3');
			exit;	
		}
	}
}