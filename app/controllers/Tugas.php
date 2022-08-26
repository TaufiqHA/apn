<?php 

class Tugas extends Controller
{
	public function index()
	{
		$data['judul'] = 'Tugas';
		$this->view('templates/header', $data);
		$this->view('tugas/index');
		$this->view('templates/footer');
	}

	public function listKelas()
	{
		
	}
}