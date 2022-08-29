<?php 

class Absensi_model
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getDataSiswa($kelas)
	{
		$this->db->query('SELECT * FROM ' . $kelas . '_absen');
		return $this->db->resultSet();
	}

	public function ubahAbsen($data)
	{
		$this->db->query('UPDATE ' . $data['kelas'] . '_absen ' . ' SET ' . $data['siswa']['absen'] . ' = :absen WHERE id = :id');
		$this->db->bind('id', $data['siswa']['id']);
		$this->db->bind('absen', $data['siswa']['nilai']);
		$this->db->execute();
		return true;
	}
}