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
		$siswa = $this->model('Kelas_model');
		$siswa1 = $siswa->tambahSiswa($data);
		$siswa->tambahAbsensi($data);
		if ($siswa1 === true) {
			$this->inputSiswa($data['kelas']);
		}
	}

	public function hapus($kelas)
	{
		$data['kelas'] = $kelas;
		$hapus = $this->model('Kelas_model')->hapus($data);
		if ($hapus === true) {
			$this->index();
		}
	}

	public function tambahDesk($id, $kelas)
	{
		$data['id'] = $id;
		$data['kelas'] = $kelas;
		$data['desk'] = $_POST;
		$desk = $this->model('Kelas_model')->tambah_desk($data);
		if ($desk === true) {
			$this->inputSiswa($kelas);
		}
	}
}