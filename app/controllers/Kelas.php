<?php 

class Kelas extends Controller
{
	public function index()
	{
		$data['judul'] = "Kelas";
		$this->view('templates/header', $data);
		$this->view('kelas/index');
		$this->view('templates/footer');
	}

	public function inputKelas()
	{
		$data = $_POST;
		$model = $this->model('Kelas_model');
		$model1 = $model->tambahKelas($data);
		$model->tambahAbsen($data);
		if ($model1 === true) {
			header('Location: ' . BASEURL . "/public/kelas/index");
			}
	}

	public function inputSiswa()
	{

	}

	public function listKelas()
	{
		
	}
}