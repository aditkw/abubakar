<?php

/**
*
*/
class Site_model extends MY_Model
{

	protected $_table_name 		= 'site';
	protected $_primary_key 	= 'site_id';
	protected $_order_by 			= 'site_id';
	protected $_order_by_type = 'DESC';
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Site Name',
			'rules' => 'required'
			),
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'required'
			),
		'keyword' => array(
			'field' => 'keyword',
			'label' => 'Keyword',
			'rules' => 'required'
			),
		'desc' => array(
			'field' => 'desc',
			'label' => 'Description',
			'rules' => 'required'
			),
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}

	public function get_site($where = NULL, $limit = NULL, $offset= NULL, $single=FALSE, $select=NULL)
	{
		$this->db->join('{PRE}'.'image', '{PRE}'.'image.parent_id = {PRE}'.$this->_table_name.'.site_id');
		$this->db->where('{PRE}'.'image.image_parent_name', 'favicon')->or_where('{PRE}'.'image.image_parent_name', 'logo');

		return parent::get_by($where,$limit,$offset,$single,$select);
	}
}
