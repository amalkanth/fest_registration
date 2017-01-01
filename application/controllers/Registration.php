<?php
class Registration extends CI_Controller {
	public function register()
	{
		
			
			
		
		$data['title'] = "registration form";
		$this->load->view('templates/header');
		$this->load->view('registration/form',$data);
		$this->load->view('templates/footer');
	}
	public function validation()
	{
		//$this->load->model('Registration_model');	
$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]|max_length[18]');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
$this->form_validation->set_rules('branch', 'branch', 'required');
$this->form_validation->set_rules('year', 'year', 'required');
$this->form_validation->set_rules('event', 'event', 'required');

if ($this->form_validation->run()== FALSE)
{
	 $data['title'] = "registration form";
		$this->load->view('templates/header');
		$this->load->view('registration/form',$data);
		$this->load->view('templates/footer');
}
else {
	$form=array(
	'name'  =>$this->input->post('name'),
	'email'  =>$this->input->post('email'),
	'mob_number'  =>$this->input->post('mob_number'),
	'branch'  =>$this->input->post('branch'),
	'year'  =>$this->input->post('year'),
	'event'  =>$this->input->post('no_of_members'),
	'no_of_members'  =>$this->input->post('name'),
	'reg_time'  =>$this->input->post('reg_time'),
	'temp_id'  =>NULL,
	'temp_id'  =>NULL
	);
	$insert_form=$this->Registration_model->insert($form);
	$data['form']=$form;
	
		$data['page_header']='registration sucessful.contact registration desk to
	 get your permenent id';
		$this->load->view('templates/header');
	$this->load->view('registration/success',$data);
	$this->load->view('templates/footer');
    }

   } 
}