<?php 

class Tugas extends Controller
{
	public function index()
	{
		$data['judul'] = 'Tugas';
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('tugas/index', $data);
		$this->view('templates/footer');
	}

	public function listSiswa($kelas)
	{
		$data['judul'] = 'Form Tugas';
		$data['kelas'] = $kelas;
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('tugas/formTugas', $data);
		$this->view('templates/footer');
	}

	public function tambahNilai($kelas)
	{
		$data['nilai'] = $_POST;
		$data['kelas'] = $kelas;
		$data['count'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$tugas = $this->model('Tugas_model')->insertNilai($data);
		if ($tugas === true) {
			$this->listSiswa($data['kelas']);
		}
	}
}