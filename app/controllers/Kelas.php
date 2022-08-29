<?php 

class Kelas extends Controller
{
	public function index()
	{
		$data['judul'] = "Kelas";
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('kelas/index', $data);
		$this->view('templates/footer');
	}

	public function inputKelas()
	{
		$data = $_POST;
		$model = $this->model('Kelas_model');
		$model1 = $model->tambahKelas($data);
		$model->tambahAbsen($data);
		$model->className($data);
		if ($model1 === true) {
			header('Location: ' . BASEURL . "/public/kelas/index");
			}
	}

	public function inputSiswa($kelas)
	{
		$data['judul'] = 'Siswa';
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($kelas);
		$data['kelas'] = $kelas;
		$this->view('templates/header', $data);
		$this->view('siswa/index', $data);
		$this->view('templates/footer');
	}

	public function tambahSiswa($kelas)
	{
		$data['siswa'] = $_POST;
		$data['kelas'] = $kelas;
		$siswa = $this->model('Kelas_model')->tambahSiswa($data);
		if ($siswa === true) {
			$this->inputSiswa($data['kelas']);
		}
	}
}