<?php
/**
*
*/
class Service extends Frontend_Controller {

	public function index()
	{
		// echo "<pre>";
		// print_r($this->data['product']);
		// echo "</pre>";
		$this->data['content']	= 'pages/service';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['content']	= 'pages/service-detail';
		$this->load->view('index', $this->data);

	}
}
