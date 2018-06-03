<?php
/**
*
*/
class Benefits extends Frontend_Controller {

	public function index()
	{
		$this->data['content']	= 'pages/benefits';
		$this->load->view('index', $this->data);
	}

}
