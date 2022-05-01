<?php

require_once 'MasterModel.php';

class ExaminationationModel extends MasterModel
{


	/**
	 * @param $username String username
	 * @param $password String password
	 * @return stdClass Object of result with totalCount and data
	 */
	public function getUserData()
	{
		
		return parent::_select('login_table l', array("type"=>2),
			array("*"),false);
		
		
	}
	
	public function insertResult($data){
		$result=$this->db->insert_batch('user_result_table',$data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	public function checkDataAvailable($user_id){
		return parent::_select('user_result_table', array("user_id"=>$user_id),
			array("*"),false);
	}



}
