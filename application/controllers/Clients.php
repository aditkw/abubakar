<?php
/**
*
*/
class Clients extends Frontend_Controller {

	public function index()
	{
		$this->data['clients'] = $this->info_model->get_info(array('catinfo_id' => 3, 'info_pub' => '99', 'image_parent_name' => 'clients'));

		$this->data['content']	= 'pages/clients';
		$this->load->view('index', $this->data);
	}

}
