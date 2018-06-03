<?php
/**
*
*/
class Careers extends Frontend_Controller {

	public function index()
	{
		$this->data['content']	= 'pages/careers';
		$this->load->view('index', $this->data);
	}

}
