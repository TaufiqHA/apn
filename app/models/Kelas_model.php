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
		$this->db->query('CREATE TABLE ' . $data['name'] . "_absen" . '(
			id INT(6),
			nama VARCHAR(30),
			nis VARCHAR(6),
			nisn VARCHAR(20),
			p1 CHAR(2),
			p2 CHAR(2),
			p3 CHAR(2),
			p4 CHAR(2),
			p5 CHAR(2),
			p6 CHAR(2),
			p7 CHAR(2),
			p8 CHAR(2),
			p9 CHAR(2),
			p10 CHAR(2),
			p11 CHAR(2),
			p12 CHAR(2),
			p13 CHAR(2),
			p14 CHAR(2),
			p15 CHAR(2),
			p16 CHAR(2),
			p17 CHAR(2),
			p18 CHAR(2),
			uh1 CHAR(2),
			uh2 CHAR(2),
			uh3 CHAR(2),
			t1 CHAR(2),
			t2 CHAR(2),
			t3 CHAR(2),
			pts CHAR(2),
			pas CHAR(2)
	)');
		$this->db->execute();
	}

	public function className($data)
	{
		$this->db->query('INSERT INTO nama_kelas VALUES ("", :kelas)');
		$this->db->bind('kelas', $data['name']);
		$this->db->execute();
	}

	public function getClass()
	{
		$this->db->query('SELECT * FROM nama_kelas');
		return $this->db->resultSet();
	}
}