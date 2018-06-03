<?php
/**
*
*/
class Firm extends Frontend_Controller {

	public function index()
	{
		// echo "<pre>";
		// print_r($this->data['product']);
		// echo "</pre>";
		$this->data['content']	= 'pages/firm';
		$this->load->view('index', $this->data);
	}

}
