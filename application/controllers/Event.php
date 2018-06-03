<?php
/**
*
*/
class Event extends Frontend_Controller {

	public function index()
	{
		$this->data['content']	= 'pages/event';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['content']	= 'pages/event-detail';
		$this->load->view('index', $this->data);
	}

}
