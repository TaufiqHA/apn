<?php 
class App 
{
	public function __construct()
	{
		var_dump($this->parsUrl());
	}

	public function parsUrl()
	{
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}