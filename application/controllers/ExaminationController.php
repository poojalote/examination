<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'HexaController.php';
class ExaminationController extends HexaController {

	function __construct()
	{
		parent::__construct();
		$this->load->model('ExaminationationModel');
		$this->load->model('MasterModel');
	}
	function adminDashboard(){
		$data=array(
		"title"=>"Admin Dashboard"
		);
		$this->load->view('adminDashboard',$data);
	}
	function guestdashboard(){
		$data=array(
		"title"=>"Dashboard"
		);
		$this->load->view('guestDashboard',$data);
	}
	
	function getUserDetails(){
        $where=array('type'=>2);
        $order = array('id' => 'desc');
        $column_order = array('username','email');
        $column_search = array('username','email');
        $select = array("*","(select sum(case when correct_wrong_status = 1 then 1 else 0 end) from user_result_table u where l.id=u.user_id) as ResultCount");
        $tableName='login_table l';
        $memData = $this->MasterModel->getRows($_POST, $where, $select, $tableName, $column_search, $column_order, $order);

        $filterCount = $this->MasterModel->countFiltered($_POST, $tableName, $where, $column_search, $column_order, $order);
        $totalCount = $this->MasterModel->countAll($tableName, $where);
			if (count($memData) > 0) {
				$tableRows = array();
                foreach ($memData as $row) {
					if(is_null($row->ResultCount) || empty($row->ResultCount)){
						$row->ResultCount = 'Not Found';
					}
					$tableRows[] = array(
						$row->id,
						$row->username,
						$row->email,
						$row->ResultCount,
						
					);
				}
				
                $results = array(
                    "draw" => (int)$_POST['draw'], 
                    "recordsTotal" => $totalCount,
                    "recordsFiltered" => $filterCount,
                    "data" => $tableRows,
                );
			} else {
                $results = array(
                    "draw" => (int)$_POST['draw'],
                    "recordsTotal" => $totalCount,
                    "recordsFiltered" => $filterCount,
                    "data" => $memData,
                );
			}
		
		echo json_encode($results);
	}
	

	function SaveQuestionAnswer(){
		$user_id=$this->session->user_session->id;
		$correctAnwerArray=$this->input->post('Data');
		$correctAnwerArray=base64_decode($correctAnwerArray);
		$correctAnwerArray=json_decode($correctAnwerArray);
		$QuestArray=$this->input->post('QuestArray');
		$QuestArray=base64_decode($QuestArray);
		$QuestArray=json_decode($QuestArray);
		$i=1;
		$j=0;
		$finalInsertArray=array();
		foreach($correctAnwerArray as $row){
			$answerArr=$this->input->post('answer'.$i);
			if(is_null($answerArr) || empty($answerArr)){
				$response['status']=201;
				$response['body']="All Questions are Compulsory";
				echo json_encode($response);
				exit;
			}else{
				$correct_wrong_status=0;
					if($answerArr == $row){
						$correct_wrong_status=1;
					}
					$data=array(
					'user_id'=>$user_id,
					'question'=>$QuestArray[$j],
					'answer_by_user'=>$answerArr,
					'correct_answer'=>$row,
					'correct_wrong_status'=>$correct_wrong_status,
					);
				
				array_push($finalInsertArray,$data);
			}
		$i++;
		$j++;
		}
		if(count($finalInsertArray) > 0){
			$result=$this->ExaminationationModel->insertResult($finalInsertArray);
			if($result){
				$response['status']=200;
				$response['body']="Submitted Successfully!";
			}else{
				$response['status']=202;
				$response['body']="Fail to add!";
			}
		}else{
			$response['status']=202;
			$response['body']="Something went wrong!";
		}
		echo json_encode($response);
	}
	
	function checkDataAvailable(){
		
		$user_type=$this->session->user_session->type;
		if($user_type == 2){
			$user_id=$this->session->user_session->id;
		}else{
			$user_id=$this->input->post('id');
		}
		$getData=$this->ExaminationationModel->checkDataAvailable($user_id);
		if($getData->totalCount > 0){
			$resultData=$getData->data;
			$response['status']=200;
			$response['data']=$resultData;
		}else{
			$response['status']=201;
		}echo json_encode($response);
	}
	
}
