<?php 

Class volunteers extends CI_Model
{

 function data($usernameId) 
 {
	$this->db ->select('id, firstname, lastname, position, organization, email, phone, street, city, province, country');
   $this->db->from('volunteers');
   $this->db->where('username_id', $usernameId);
   $query = $this->db->get();
   if($query->num_rows() > 0) 
   {
	return $query->result();
   }
   else 
   {
	return false;
   }
 }
 
 function delete($volunteerId) {
	
	$this->db->delete('volunteers', array('id' => $volunteerId)); 
 }
 
 function volunteerData($volunteerId) {
		
	$this->db ->select('id, firstname, lastname, position, organization, email, phone, street, city, province, country');
   $this->db->from('volunteers');
   $this->db->where('id', $volunteerId);
   $this->db->limit(1);
   
   $query = $this->db->get();
   if($query->num_rows() > 0) 
   {
	return $query->result();
   }
   else 
   {
	return false;
   }	
 }
 
 function volunteerAdd($usernameId) {
 
	$data = array(
				'username_id' => $usernameId,
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'position' => $this->input->post('position'),
				'organization' => $this->input->post('organization'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'street' => $this->input->post('street'),
				'city' => $this->input->post('city'),
				'province' => $this->input->post('province'),
				'country' => $this->input->post('country')
			);
	$this->db->insert('volunteers', $data);
 }
 
 function volunteerEdit($volunteerId) {
	
	$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'position' => $this->input->post('position'),
				'organization' => $this->input->post('organization'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'street' => $this->input->post('street'),
				'city' => $this->input->post('city'),
				'province' => $this->input->post('province'),
				'country' => $this->input->post('country')
			);
	$this->db->where('id', $volunteerId);
	$this->db->update('volunteers', $data);
 }
}
?>