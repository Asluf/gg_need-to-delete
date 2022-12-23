<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');

		$this->load->helper('url');
		redirect('http://localhost:3000');
	}

	public function gg()
	{
		$this->load->model('login_model');
		$data['stu'] = $this->login_model->getstudent();
		$this->load->view('welcome_message',$data);
		
	}

	public function getstudent()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		
		$this->load->model('login_model');
		$data = $this->login_model->getstudent();
		echo json_encode($data);
		
		

		// header('Location: http://localhost:3000/login');
		//redirect('http://localhost:3000/login/As');
		// $this->load->view('welcome_message',$data);
		
	}
}
