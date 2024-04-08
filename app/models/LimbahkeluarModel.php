<?php

class LimbahkeluarModel {
	
	private $table = 'limbah_b3';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLimbahkeluar()
	{
		$this->db->query("SELECT * FROM `limbah_keluar`");
		return $this->db->resultSet();
	}

	public function getLimbahkeluarById($id)
	{
		$this->db->query("SELECT * FROM limbah_keluar WHERE id=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahLimbahkeluar($data)
	{
		$query = "INSERT INTO limbah_keluar (jenis_limbah, nama_limbah, tgl_keluar, area, kode_line, jml_limbah_keluar, no_manifest, nama_transporter, no_kendaraan, masa_dishub, no_batch) 
		VALUES(:jenis_limbah, :nama_limbah, :tgl_keluar, :area, :kode_line, :jml_limbah_keluar, :no_manifest, :nama_transporter, :no_kendaraan, :masa_dishub, :no_batch)";
		$this->db->query($query);
		$this->db->bind('jenis_limbah', $data['jenis_limbah']);
		$this->db->bind('nama_limbah', $data['nama_limbah']);
		$this->db->bind('tgl_keluar', $data['tgl_keluar']);
		$this->db->bind('area', $data['area']);
		$this->db->bind('kode_line', $data['kode_line']);
		$this->db->bind('jml_limbah_keluar', $data['jml_limbah_keluar']);
		$this->db->bind('no_manifest', $data['no_manifest']);
		$this->db->bind('nama_transporter', $data['nama_transporter']);
		$this->db->bind('no_kendaraan', $data['no_kendaraan']);
		$this->db->bind('masa_dishub', $data['masa_dishub']);
		$this->db->bind('no_batch', $data['no_batch']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataLimbahkeluar($data)
	{
 		$query = "UPDATE limbah_keluar SET jenis_limbah=:jenis_limbah, nama_limbah=:nama_limbah, tgl_keluar=:tgl_keluar, area=:area, kode_line=:kode_line, jml_limbah_keluar=:jml_limbah_keluar, no_manifest=:no_manifest, nama_transporter=:nama_transporter, no_kendaraan=:no_kendaraan, masa_dishub=:masa_dishub, no_batch=:no_batch WHERE id=:id";
    	$this->db->query($query);
    	$this->db->bind('id', $data['id']);
    	$this->db->bind('jenis_limbah', $data['jenis_limbah']);
    	$this->db->bind('nama_limbah', $data['nama_limbah']);
    	$this->db->bind('tgl_keluar', $data['tgl_keluar']);
    	$this->db->bind('area', $data['area']);
    	$this->db->bind('kode_line', $data['kode_line']);
    	$this->db->bind('jml_limbah_keluar', $data['jml_limbah_keluar']);
    	$this->db->bind('no_manifest', $data['no_manifest']);
    	$this->db->bind('nama_transporter', $data['nama_transporter']);
    	$this->db->bind('no_kendaraan', $data['no_kendaraan']); // Perbaikan: mengubah 'no_kedaraan' menjadi 'no_kendaraan'
    	$this->db->bind('masa_dishub', $data['masa_dishub']);
    	$this->db->bind('no_batch', $data['no_batch']);
    	$this->db->execute();

    	return $this->db->rowCount();
	}


	public function deleteLimbahkeluar($id)
	{
		$this->db->query('DELETE FROM limbah_keluar WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariLimbahkeluar()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM Limbah_keluar WHERE judul LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
	public function get_jumlah_keluar()
	{
		$this->db->query("SELECT SUM(jml_limbah_keluar) AS total_qty_keluar FROM Limbah_keluar");
		$result = $this->db->single(); // Mengambil hanya satu baris hasil query
		return $result['total_qty_keluar']; // Mengembalikan nilai total_qty saja
	}
}