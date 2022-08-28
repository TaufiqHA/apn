<?php 

class Kelas_model
{
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function tambahKelas($data)
	{
		$this->db->query('CREATE TABLE ' . $data['name'] . '(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30),
			nis VARCHAR(6),
			nisn VARCHAR(20),
			deskripsi VARCHAR(200))
			');
		$this->db->execute();
		return true;
	}

	public function tambahAbsen($data)
	{
		$this->db->query('CREATE TABLE ' . $data['name'] . "_absen" . '(id int, name varchar(60))');
		$this->db->execute();
	}
}