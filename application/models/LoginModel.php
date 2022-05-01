<?php

require_once 'MasterModel.php';

class loginModel extends MasterModel
{


	/**
	 * @param $username String username
	 * @param $password String password
	 * @return stdClass Object of result with totalCount and data
	 */
	public function login($username, $password)
	{
		
		return parent::_select('login_table', array("email" => $username, "password" => $password),
			array("email", "id", "username", "password", "type"));
		
		
	}



}
