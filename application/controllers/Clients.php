<?php
/**
*
*/
class Clients extends Frontend_Controller {

	public function index()
	{
		// echo "<pre>";
		// print_r($this->data['product']);
		// echo "</pre>";
		$this->data['content']	= 'pages/clients';
		$this->load->view('index', $this->data);
	}

}
