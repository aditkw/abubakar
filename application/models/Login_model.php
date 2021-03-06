<?php 

/**
* 
*/
class Login_model extends MY_Model
{
	protected $_table_name 		= 'user';
	protected $_primary_key 	= 'user_id';
	protected $_order_by 			= 'user_id';
	protected $_order_by_type = 'DESC';
	public $rules = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required|alpha_numeric'
			),
		'email' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required|alpha_numeric'
			)
		);

	function __construct()
	{
		parent:: __construct();
	}
}