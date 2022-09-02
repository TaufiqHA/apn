<?php 

class Home extends Controller
{
	public function index()
	{
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}

	public function cetak()
	{
		$data['judul'] = 'Cetak Penilaian';
		$data['class'] = $this->model('Kelas_model')->getClass();
		$this->view('templates/header', $data);
		$this->view('home/cetak', $data	);
		$this->view('templates/footer');
	}
}
