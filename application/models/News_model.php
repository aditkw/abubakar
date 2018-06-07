<?php

/**
*
*/
class News_model extends MY_Model
{

	protected $_table_name = 'news';
	protected $_primary_key = 'news_id';
	protected $_order_by = 'news_id';
	protected $_order_by_type = 'DESC';
	public $rules = array(
		'desc' => array(
			'field' => 'desc',
			'label' => 'news Description',
			'rules' => 'trim|required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}

	public function get_news($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL, $like = NULL, $order = NULL)
	{
		if ($like) {
			$this->db->like($like);
		}
		if ($order) {
			foreach ($order as $key => $value) {
				$this->db->order_by($key, $value);
			}
		}
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.news_id');
		$this->db->join('{PRE}'.'user', '{PRE}'.'user.user_id = {PRE}'.$this->_table_name.'.user_id');
		return parent::get_by($where, $limit, $offset, $single, $select);
	}
}
