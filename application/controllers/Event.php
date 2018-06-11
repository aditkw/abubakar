<?php
/**
*
*/
class Event extends Frontend_Controller {

	public function index()
	{
		$url 				= $this->uri->segment(1);
		$num_rows		=	$this->news_model->count(array('catnews_id' => 2 ,'news_pub' => '99'));
		$per_page 	= 6;
		$num_links	= 2;
    $two_language = FALSE;

		$this->lawave_paging->pagination($url, $num_rows, $per_page, $num_links, $two_language);
		/*pagination($url = NULL, $num_rows = NULL, $per_page = NULL, $num_links = NULL, $two_language = FALSE)*/

		/*konfigurasi nilai offset dan informasi halaman*/
		$on_page 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
		$offset 	= ($on_page - 1) * $per_page;
		$num_page	= ceil($num_rows/$per_page);

    /*data[num_rows, on_page, num_page], digunakan untuk kebutuhan informasi halaman*/
		$this->data['num_rows']		= $num_rows;
		$this->data['on_page']		= $on_page;
		$this->data['num_page']		= $num_page;
		$this->data['pagination'] = $this->pagination->create_links();

		$this->data['event'] = $this->news_model->get_news(array('catnews_id' => 2 ,'news_pub' => '99', 'image_parent_name' => 'event'), $per_page, $offset);

		$this->data['content']	= 'pages/event';
		$this->load->view('index', $this->data);
	}

	public function detail($link)
	{
		$this->data['event'] = $this->news_model->get_news(array('news_link' => $link, 'image_parent_name' => 'event'), 1, NULL, TRUE);
		$this->data['others'] = $this->news_model->get_news(array('catnews_id' => 2 ,'news_pub' => '99', 'image_parent_name' => 'event'));
		$this->data['content']	= 'pages/event-detail';
		$this->load->view('index', $this->data);
	}

}
