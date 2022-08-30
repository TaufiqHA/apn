<?php 
 
class PTS extends Controller
{
	public function index()
	{	
		$data['judul'] = 'PTS';
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('pts/index', $data);
		$this->view('templates/footer');
	}

	public function listSiswa($kelas)
	{
		$data['kelas'] = $kelas;
		$data['judul'] = 'Penilaian Tengah Semester';
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('pts/pts_siswa', $data);
		$this->view('templates/footer');
	}

	public function tambahNilai($kelas)
	{
		$data['kelas'] = $kelas;
		$data['nilai'] = $_POST;
		$data['count'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$nilai = $this->model('Penilaian_model')->insertNilai($data);
		if ($nilai === true) {
			$this->listSiswa($data['kelas']);
		}
	}

	public function pas()
	{
		$data['judul'] = 'PAS';
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('pts/pas', $data);
		$this->view('templates/footer');
	}

	public function listSiswaPas($kelas)
	{
		$data['kelas'] = $kelas;
		$data['judul'] = 'Penilaian Akhir Semester';
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('pts/pas_siswa', $data);
		$this->view('templates/footer');
	}

	public function tambahNilaiAkhir($kelas)
	{
		$data['kelas'] = $kelas;
		$data['nilai'] = $_POST;
		$data['count'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$nilai = $this->model('Penilaian_model')->insertNilaiAkhir($data);
		if ($nilai === true) {
			$this->listSiswaPas($data['kelas']);
		}
	}
}