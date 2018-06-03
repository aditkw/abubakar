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

	public function get_news($where = NULL, $limit = NULL, $offset = NULL, $single = FALSE, $select = NULL)
	{
		// $this->db->join('{PRE}'.'news_cat', '{PRE}'.'news_cat.news_cat_id = {PRE}'.$this->_table_name.'.news_cat_id');
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.news_id');
		return parent::get_by($where, $limit, $offset, $single, $select);
	}
}
