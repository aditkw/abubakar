<?php

/**
*
*/
class Lawave_paging
{

	function pagination($url = NULL, $num_rows = NULL, $per_page = NULL, $num_links = NULL, $two_language=FALSE)
	{
		$_this =& get_instance();
		$en = array(
			'first' => 'First',
			'last' => 'Last',
			'next' => 'Next',
			'prev' => 'Prev',
		);
		$in = array(
			'first' => 'Pertama',
			'last' => 'Terakhir',
			'next' => 'Selanjutnya',
			'prev' => 'Sebelumnya',
		);
		if ($two_language) {
			$userdata = $_this->session->userdata;
			(isset($userdata['lang'])) ? $lang = $userdata['lang'] : $lang = 'english';

			if ($lang=='english') {
				$basa = $en;
			}else {
				$basa = $in;
			}
		}else {
			$basa = $en;
		}

		$config['base_url'] = base_url($url);
		/*jumlah rows yang ditampilkan*/
		$config['total_rows'] = $num_rows;
		/*TRUE, artinya akan tetap menggunakan url yang ada selain base_url*/
		$config['reuse_query_string'] = TRUE;

		/*banyaknya record yang ditampilkan dalam 1 halaman*/
		if ($per_page) {
			$config['per_page'] = $per_page;
		}

		else {
			$config['per_page'] = 10;
		}

		/*jumlah link sebelum dan sesudah link aktif*/
		if ($num_links) {
			$config['num_links'] = $num_links;
		}

		else {
			$config['num_links'] = 2;
		}

		$config['use_page_numbers'] = TRUE;

		/* Configurasi Style. Default library ini menggunakan bootstrap */
		/*full tag / tag induk*/
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		/*first / ling menuju pej wan*/
		$config['first_link'] = $basa['first'];
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		/*last / link menuju pej paling akhir*/
		$config['last_link'] = $basa['last'];
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		/*next / link page selanjutnya*/
		$config['next_link'] = $basa['next'];
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		/*prev / link page sebelumnya*/
		$config['prev_link'] = $basa['prev'];
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		/*active / link aktiv*/
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		/*nomor / penutup link nomor*/
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		/*inisialisasi*/
		$_this->pagination->initialize($config);
	}
}
