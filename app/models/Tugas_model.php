<?php 

class Tugas_model
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	public function insertNilai($data)
	{
		for ($i=1; $i <= sizeof($data['count']); $i++) { 
			$this->db->query('UPDATE ' . $data['kelas'] . ' SET ' . $data['nilai']['tugas'] . ' = :tugas WHERE id = :id');
			$this->db->bind('tugas', $data['nilai']['nilai' . $i]);
			$this->db->bind('id', $data['nilai']['id' . $i]);
			$this->db->execute();
		}
		return true;
	}
}