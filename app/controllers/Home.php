<?php 

class Home extends Controller
{
	public function index($nama = '')
	{
		$this->view("$nama");
	}
}