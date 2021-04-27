<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		echo 'Hello users!';
	}

	public function new()
	{

		$this->load->view('new');
	}

	public function create(){
		echo 'This feature is coming soon';
			// $this->input->post('submit');
			
			// $formData = $this->input->post();

			// echo 'First Name '.$formData['first_name'] = $this->input->post('first_name').'<br>';
			// echo 'Last Name '.$formData['last_name'] = $this->input->post('last_name').'<br>';
			// echo 'Email '.$formData['email'] = $this->input->post('email').'<br>';

			// $this->load->view('new');
	}

	public function hits()
	{
		if($this->session->userdata('counter')){
	
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter + 1);
		} else {
			$this->session->set_userdata('counter', 1);
		}

		 $this->load->view('hitter');
			
	}

	public function reset(){
		if($this->session->userdata('counter')){
			$this->session->unset_userdata('counter');
		}

		$this->load->view('reset');
	}

	public function say($whats, $up){
		$data['whats'] = $whats;
		$data['up'] = $up;
		$this->load->view('say', $data);

	}

	public function mprep(){
		$view_data = array(
			'name' => 'Patrick Obra',
			'age' => '39',
			'location' => 'Philippines',
			'hobbies' => array('biking', 'driving', 'netflix', 'coding','cooking')
		);

		$this->load->view('mprep_view', $view_data);
	}

}
