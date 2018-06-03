<?php

/**
*
*/
class Text extends Backend_Controller
{

	public function index()
	{
		$id = 1;

		$this->data['content'] = 'admin/pages/text/view';
		$this->data['text'] = $this->text_model->get($id);

		$this->load->view('admin/media', $this->data);
	}

	public function action($param)
	{
		$id = 1;
		$array_id = array('text_id' => $id);
		$post 		= $this->input->post(NULL, TRUE);

		switch ($param) {

			/* ----------- EDIT DATA ----------- */
			case 'update':
				$array_data = array(
					'text_home' => $post['text_home'],
					'text_footer' => $post['text_footer'],
					'text_service' => $post['text_service'],
					);
				$update = $this->text_model->update($array_data, $array_id);
				$this->session->set_flashdata('success',$this->edit_text);
				redirect(site_url('admin/text'));
				break;

			default:
				redirect(site_url('admin/text'));
				break;
		}
	}
}
