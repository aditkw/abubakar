<?php
/**
*
*/
class News extends Frontend_Controller {

	public function index()
	{
		$this->data['content']	= 'pages/news';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['content']	= 'pages/news-detail';
		$this->load->view('index', $this->data);
	}

}
