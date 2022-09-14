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
	{
		$data = $_POST;
		$change = $this->model('Kelas_model')->change($data);
		if ($change === true) {
			header('Location: ' . BASEURL . '/public/kelas/inputSiswa/' . $data['kelas']);
		}
	}
}
