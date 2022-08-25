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

	}

	public function inputSiswa()
	{

	}

	public function listKelas()
	{
		
	}
}