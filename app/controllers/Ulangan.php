<?php 

class Ulangan extends Controller
{
	public function index()
	{
		$data['judul'] = 'Ulangan Harian';
		$this->view('templates/header', $data);
		$this->view('ulangan/index');
		$this->view('templates/footer');
	}

	public function listKelas()
	{
		
	}
}