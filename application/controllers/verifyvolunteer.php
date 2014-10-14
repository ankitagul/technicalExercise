<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**************************
Verifyvolunteer class, verifying the details of vlunteer before storing
**************************/
class Verifyvolunteer extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('volunteers','',TRUE);
	}
 
	function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');
 
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
		$this->form_validation->set_rules('organization', 'Organization', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
 
		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to volunteer page
			$this->load->view('volunteer_add');
		}
		else
		{
			$this->volunteer_database();
		}
	}
 
	function edit()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
		$this->form_validation->set_rules('organization', 'Organization', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
 
		if($this->form_validation->run() != FALSE)
		{
			$this->volunteer_edit();
		}
		redirect('home', 'refresh');
	}
	
	function volunteer_edit() 
	{
		$sessionData = $this->session->userdata('logged_in');
		$volunteerId = $sessionData['volunteerEditId'];
			
		$this->volunteers->volunteerEdit($volunteerId);	
	}
 
	function volunteer_database()
	{
		$sessionData = $this->session->userdata('logged_in');
		$usernameId = $sessionData['id'];
		
		if($usernameId) {
			$this->volunteers->volunteerAdd($usernameId);
		}
		redirect('home', 'refresh');
	}
}

