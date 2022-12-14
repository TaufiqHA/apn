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
		for ($i=1; $i <= sizeof($data['count']); $i++) { 
			$this->db->query('UPDATE ' . $data['kelas'] . '_absen ' . ' SET ' . $data['siswa']['absen'] . ' = :absen WHERE id = :id;');
			$this->db->bind('absen', $data['siswa']['nilai' . $i]);
			$this->db->bind('id', $data['siswa']['id' . $i]);
			$this->db->execute();
		}
		return true;
	}

	public function getClassByName($kelas)
	{
		$this->db->query('SELECT * FROM nama_kelas WHERE kelas = :kelas');
		$this->db->bind('kelas', $kelas);
		return $this->db->single();
	}

	public function absenCount($data)
	{
		for ($i=1; $i <= sizeof($data['count']); $i++) { 
			switch (true) {
				case $data['siswa']['nilai' . $i] === 'A' :
					$this->db->query('UPDATE ' . $data['kelas'] . '_absen SET A = A + 1 WHERE id = :id');
					break;
				case $data['siswa']['nilai' . $i] === 'I' :
					$this->db->query('UPDATE ' . $data['kelas'] . '_absen SET I = I + 1 WHERE id = :id');
					break;
				case $data['siswa']['nilai' . $i] === 'S' :
					$this->db->query('UPDATE ' . $data['kelas'] . '_absen SET S = S + 1 WHERE id = :id');
					break;
				default;
					$this->db->query('UPDATE ' . $data['kelas'] . '_absen SET A = A + 0 WHERE id = :id');
					break;
			}

			$this->db->bind('id', $data['siswa']['id' . $i]);
			$this->db->execute();
		}
	}
}