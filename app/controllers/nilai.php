<?php 

class Nilai extends Controller
{
	public function rekap($kelas)
	{
		$data['kelas'] = $this->model('Absensi_model')->getClassByName($kelas);
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($kelas);
		$this->view('nilai/rekap', $data);
	}

	public function nilai_akhir($kelas)
	{
		$data['kelas'] = $this->model('Absensi_model')->getClassByName($kelas);
		$data['siswa'] = $this->model('Kelas_model')->getDataSiswa($kelas);
		$this->view('nilai/nilai', $data);
	}
}
