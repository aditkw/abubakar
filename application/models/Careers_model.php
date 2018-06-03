<?php

/**
*
*/
class Careers_model extends MY_Model
{

	protected $_table_name = 'careers';
	protected $_primary_key = 'careers_id';
	protected $_order_by = 'careers_id';
	protected $_order_by_type = 'DESC';
	public $rules = array(
		'name' => array(
			'field' => 'name',
			'label' => 'Career Name',
			'rules' => 'trim|required'
		),
		'desc' => array(
			'field' => 'desc',
			'label' => 'Career Description',
			'rules' => 'trim|required'
			)
		);

	function __construct()
	{
		parent::__construct();
	}
}
