<?php 

class Absensi extends Controller
{
	public function index()
	{	
		$data['judul'] = "Absensi";
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('absensi/index', $data);
		$this->view('templates/footer');
	}

	public function absensi($kelas)
	{
		$data['judul'] = 'Absensi';
		$data['kelas'] = $kelas;
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('absensi/absen', $data);
		$this->view('templates/footer');
	}
}