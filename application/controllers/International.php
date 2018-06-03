<?php
/**
*
*/
class International extends Frontend_Controller {

	public function index()
	{
		$this->data['content']	= 'pages/international';
		$this->load->view('index', $this->data);
	}
}
