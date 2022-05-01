<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'HexaController.php';
class LoginController extends HexaController {
function __construct()
	{
		parent::__construct();
		$this->load->model('loginModel');
	}
	public function index() {
		$data = array(
			'title' => "Login"
		);
		$this->load->view('login',$data);
	}
	public function loginUser()
	{
		// print_r($this->input->post());exit();
		$validationObject = parent::is_parameter(array("email", "password"));

		if ($validationObject->status) {
			$param = $validationObject->param;

			$resultData = $this->loginModel->login($param->email, $param->password);
			// print_r($resultData);exit();
			if ($resultData->totalCount > 0) {
				$userdata=$resultData->data;
				// print_r($userdata->id);exit();
				$userData = $resultData->data;
				$userData->id=$userdata->id;
				$this->session->user_session = $userData;
				$response['status'] = 200;
				$response['data'] = $userdata;
				$response['body'] = 'login successfully';
			}
			else{
				$response['status'] = 201;
				$response['body'] = 'login failed';
				}
			
		} else {
			$response['status'] = 201;
			$response['body'] = 'login failed';
		}
		echo json_encode($response);
	}
	public function logout()
	{

		$this->session->sess_destroy();
        header('Location: '.base_url());
	}
	
}
