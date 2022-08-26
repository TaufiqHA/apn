<?php 
 
class PTS extends Controller
{
	public function index()
	{	
		$data['judul'] = 'PTS';
		$this->view('templates/header', $data);
		$this->view('pts/index');
		$this->view('templates/footer');
	}

	public function pas()
	{
		$data['judul'] = 'PAS';
		$this->view('templates/header', $data);
		$this->view('pts/pas');
		$this->view('templates/footer');
	}

	public function listKelas()
	{
		
	}
}