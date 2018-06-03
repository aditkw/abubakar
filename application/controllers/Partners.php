<?php
/**
*
*/
class Partners extends Frontend_Controller {

	public function index()
	{
		// echo "<pre>";
		// print_r($this->data['product']);
		// echo "</pre>";
		$this->data['content']	= 'pages/partner';
		$this->load->view('index', $this->data);
	}

}
