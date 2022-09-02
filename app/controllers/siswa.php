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

	public function listKelas()
	{
		
	}
}
