<?php 

class Ulangan extends Controller
{
	public function index()
	{
		$data['judul'] = 'Ulangan Harian';
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('ulangan/index', $data);
		$this->view('templates/footer');
	}

	public function listSiswa($kelas)
	{
		$data['judul'] = 'Ulangan Harian';
		$data['kelas'] = $kelas;
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('ulangan/ulangan', $data);
		$this->view('templates/footer');
	}

	public function tambahNilai($kelas)
	{
		$data['nilai'] = $_POST;
		$data['kelas'] = $kelas;
		$data['count'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$ulangan = $this->model('Ulangan_model')->insertNilai($data);
		if ($ulangan === true) {
			$this->listSiswa($data['kelas']);
		}
	}
}
