<?php

class LimbahmasukModel {
	
	private $table = 'limbah_b3';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLimbahmasuk()
	{
		$this->db->query("SELECT * FROM `limbah_masuk`");
		return $this->db->resultSet();
	}

	public function getLimbahmasukById($id)
	{
		$this->db->query("SELECT * FROM limbah_masuk WHERE id=:id");
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahLimbahmasuk($data)
	{
		$query = "INSERT INTO limbah_masuk (jenis_limbah, nama_limbah, tgl_masuk, area, kode_line, jml_limbah_masuk, no_manifest, nama_transporter, no_kendaraan, masa_dishub, no_batch) 
		VALUES(:jenis_limbah, :nama_limbah, :tgl_masuk, :area, :kode_line, :jml_limbah_masuk, :no_manifest, :nama_transporter, :no_kendaraan, :masa_dishub, :no_batch)";
		$this->db->query($query);
		$this->db->bind('jenis_limbah', $data['jenis_limbah']);
		$this->db->bind('nama_limbah', $data['nama_limbah']);
		$this->db->bind('tgl_masuk', $data['tgl_masuk']);
		$this->db->bind('area', $data['area']);
		$this->db->bind('kode_line', $data['kode_line']);
		$this->db->bind('jml_limbah_masuk', $data['jml_limbah_masuk']);
		$this->db->bind('no_manifest', $data['no_manifest']);
		$this->db->bind('nama_transporter', $data['nama_transporter']);
		$this->db->bind('no_kendaraan', $data['no_kendaraan']);
		$this->db->bind('masa_dishub', $data['masa_dishub']);
		$this->db->bind('no_batch', $data['no_batch']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataLimbahmasuk($data)
	{
 		$query = "UPDATE limbah_masuk SET jenis_limbah=:jenis_limbah, nama_limbah=:nama_limbah, tgl_masuk=:tgl_masuk, area=:area, kode_line=:kode_line, jml_limbah_masuk=:jml_limbah_masuk, no_manifest=:no_manifest, nama_transporter=:nama_transporter, no_kendaraan=:no_kendaraan, masa_dishub=:masa_dishub, no_batch=:no_batch WHERE id=:id";
    	$this->db->query($query);
    	$this->db->bind('id', $data['id']);
    	$this->db->bind('jenis_limbah', $data['jenis_limbah']);
    	$this->db->bind('nama_limbah', $data['nama_limbah']);
    	$this->db->bind('tgl_masuk', $data['tgl_masuk']);
    	$this->db->bind('area', $data['area']);
    	$this->db->bind('kode_line', $data['kode_line']);
    	$this->db->bind('jml_limbah_masuk', $data['jml_limbah_masuk']);
    	$this->db->bind('no_manifest', $data['no_manifest']);
    	$this->db->bind('nama_transporter', $data['nama_transporter']);
    	$this->db->bind('no_kendaraan', $data['no_kendaraan']); // Perbaikan: mengubah 'no_kedaraan' menjadi 'no_kendaraan'
    	$this->db->bind('masa_dishub', $data['masa_dishub']);
    	$this->db->bind('no_batch', $data['no_batch']);
    	$this->db->execute();

    	return $this->db->rowCount();
	}


	public function deleteLimbahmasuk($id)
	{
		$this->db->query('DELETE FROM limbah_masuk WHERE id=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariLimbahmasuk()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM Limbah_masuk WHERE judul LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}

	public function get_jumlah_masuk()
	{
		$this->db->query("SELECT SUM(jml_limbah_masuk) AS total_qty_masuk FROM Limbah_masuk");
		$result = $this->db->single(); // Mengambil hanya satu baris hasil query
		return $result['total_qty_masuk']; // Mengembalikan nilai total_qty saja
	}
}