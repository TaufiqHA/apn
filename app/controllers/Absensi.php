<?php 

class Absensi extends Controller
{
	public function index()
	{	
		$data['judul'] = "Absensi";
		$this->view('templates/header', $data);
		$this->view('absensi/index');
		$this->view('templates/footer');
	}

	public function listKelas()
	{
		
	}
}