<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
/**************************
Volunteer class, to add, delete or edit a volunteer under a user
**************************/
class Volunteer extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('volunteers','',TRUE);
	}
 
	function add()
	{
		$this->load->helper(array('form'));
		$this->load->view('volunteer_add');
	}
	
	function delete()
	{
		$volunteerId = $_GET['id'];
		$this->volunteers->delete($volunteerId);
		redirect('home', 'refresh');
	}
	
	function edit()
	{
		$volunteerId = $_GET['id'];
		$result = $this->volunteers->volunteerData($volunteerId);
		if($result) {
			$data['volunteerData'] = $result[0];
			$oldSessionData = $this->session->userdata('logged_in');	
			$oldSessionData['volunteerEditId'] = $result[0]->id;
			$this->session->set_userdata('logged_in', $oldSessionData);
			$this->load->helper(array('form'));
			$this->load->view('volunteer_edit', $data);
		}
		else {
			redirect('home', 'refresh');
		}
		
	}
}

