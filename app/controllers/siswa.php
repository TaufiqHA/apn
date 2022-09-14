<?php 

class Siswa extends Controller
{
	public function index()
	{
		$data['judul'] = "Siswa";
		$this->view('templates/header', $data);
		$this->view('siswa/index');
		$this->view('templates/footer');
	}

	public function getDataSiswa()
	{
		$data['kelas'] = $_POST['kelas'];
		$data['id'] = $_POST['id'];
		echo json_encode($this->model('Kelas_model')->getDataById($data));
	}

	public function ubah()
}
