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
		$data['siswa'] = $this->model('Absensi_model')->getDataSiswa($data['kelas']);
		$this->view('templates/header', $data);
		$this->view('absensi/absen', $data);
		$this->view('templates/footer');
	}

	public function cetak($kelas)
	{
		$absen = $this->model('Absensi_model');
		$data['siswa'] = $absen->getDataSiswa($kelas);
		$data['kelas'] = $absen->getClassByName($kelas);
		$this->view('absensi/cetak', $data);
	}

	public function updateAbsen($kelas)
	{
		$data['kelas'] = $kelas;
		$data['siswa'] = $_POST;
		$absen = $this->model('Absensi_model');
		$data['count'] = $absen->getDataSiswa($data['kelas']);
		$absen1 = $absen->ubahAbsen($data);
		if ($absen1 === true) {
			$this->absensi($data['kelas']);
		}
	}
}