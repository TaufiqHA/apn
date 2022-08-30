<?php 

class Penilaian_model
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function insertNilai($data)
	{
		for ($i=1; $i <= sizeof($data['count']); $i++) { 
			$this->db->query('UPDATE ' . $data['kelas'] . ' SET pts = :pts WHERE id = :id');
			$this->db->bind('id', $data['nilai']['id' . $i]);
			$this->db->bind('pts', $data['nilai']['nilai' . $i]);
			$this->db->execute();
		}
		return true;
	}

	public function insertNilaiAkhir($data)
	{
		for ($i=1; $i <= sizeof($data['count']); $i++) { 
			$this->db->query('UPDATE ' . $data['kelas'] . ' SET pas = :pas WHERE id = :id');
			$this->db->bind('id', $data['nilai']['id' . $i]);
			$this->db->bind('pas', $data['nilai']['nilai' . $i]);
			$this->db->execute();
		}
		return true;
	}
}