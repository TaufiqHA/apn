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
			uh1 VARCHAR(5),
			uh2 VARCHAR(5),
			uh3 VARCHAR(5),
			t1 VARCHAR(5),
			t2 VARCHAR(5),
			t3 VARCHAR(5),
			pts VARCHAR(5),
			pas VARCHAR(5),
			pengetahuan VARCHAR(200),
			keterampilan VARCHAR(200)
			)
			');
		$this->db->execute();
	}

	public function tambahAbsen($data)
	{
		$this->db->query('CREATE TABLE ' . $data['name'] . "_absen" . '(
			id INT(6) AUTO_INCREMENT PRIMARY KEY,
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
			pas CHAR(2),
			A CHAR(2),
			I CHAR(2),
			S CHAR(2)
	)');
		$this->db->execute();
	}

	public function className($data)
	{
		$this->db->query('INSERT INTO nama_kelas (id, kelas, mt, wk, nip, semester, ta) VALUES ("", :kelas, :pelajaran, :wali, :nip, :semester, :ta)');
		$this->db->bind('kelas', $data['name']);
		$this->db->bind('pelajaran', $data['pelajaran']);
		$this->db->bind('wali', $data['wali']);
		$this->db->bind('nip', $data['nip']);
		$this->db->bind('semester', $data['semester']);
		$this->db->bind('ta', $data['ta']);
		$this->db->execute();
		return true;
	}

	public function getClass()
	{
		$this->db->query('SELECT * FROM nama_kelas');
		return $this->db->resultSet();
	}

	public function getDataSiswa($kelas)
	{
		$this->db->query('SELECT * FROM ' . $kelas);
		return $this->db->resultSet();
	}

	public function tambahSiswa($data)
	{
		$this->db->query('INSERT INTO ' . $data['kelas'] . '(id, name, nis, nisn, uh1, uh2, uh3, t1, t2, t3, pts, pas) VALUES ("", :name, :nis, :nisn, 0, 0, 0, 0, 0, 0, 0, 0)');
		$this->db->bind('name', $data['siswa']['name']);
		$this->db->bind('nis', $data['siswa']['nis']);
		$this->db->bind('nisn', $data['siswa']['nisn']);
		$this->db->execute();
		return true;
	}

	public function tambahAbsensi($data)
	{
		$this->db->query('INSERT INTO ' . $data['kelas'] . "_absen (id, nama, nis, nisn, A, I, S) " . ' VALUES ("", :nama, :nis, :nisn, 0, 0, 0)');
		$this->db->bind('nama', $data['siswa']['name']);
		$this->db->bind('nis', $data['siswa']['nis']);
		$this->db->bind('nisn', $data['siswa']['nisn']);
		$this->db->execute();
	}

	public function hapus($data)
	{	
		$kelas = $data['kelas'];
		$this->db->query('DROP TABLE ' . $kelas . '; DROP TABLE ' . $kelas . '_absen; DELETE FROM nama_kelas WHERE kelas = :kelas;');
		$this->db->bind('kelas', $kelas);
		$this->db->execute();
		return true;
	}

	public function tgl_indo($tanggal)
	{
		$bulan = [
			'January' => 'Januari',
			'February' => 'Februari',
			'March' => 'Maret',
			'April' => 'April',
			'May' => 'Mei',
			'June' => 'Juni',
			'July' => 'Juli',
			'August' => 'Agustus',
			'September' => 'September',
			'October' => 'Oktober',
			'November' => 'November',
			'December' => 'Desember'
		];

		$split = explode(" ", $tanggal);
		return $split[0] . " " . $bulan[$split[1]] . " " . $split[2];
	}

	public function tambah_desk($data)
	{
		$this->db->query('UPDATE ' . $data['kelas'] . ' SET pengetahuan = :pengetahuan, keterampilan = :keterampilan WHERE id = :id');
		$this->db->bind('pengetahuan', $data['desk']['pengetahuan']);
		$this->db->bind('keterampilan', $data['desk']['keterampilan']);
		$this->db->bind('id', $data['id']);
		$this->db->execute();
		return true;
	}
}