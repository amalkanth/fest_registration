<?php 
class Desk extends CI_Controller 
{
	public function index()
	{
          		$this->load->view('templates/header');
	            $this->load->view('desk/index');
				$this->load->view('templates/footer');
	
	}
	public function view()
	{
		$this->load->view('templates/header');
	            $this->load->view('desk/view');
				$this->load->view('templates/footer');
	}
	public function issue()
	{
		$this->load->view('templates/header');
	            $this->load->view('desk/issue');
				$this->load->view('templates/footer');
	}
}