<?php
class Home extends CI_Controller {
	public function view($page='home')
	{
		if(!file_exists(APPPATH.'views/home'.$page.'.php')){
			//show_404();
			
			
		}
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('home/'.$page,$data);
		$this->load->view('templates/footer');
	}
	
	
	public function reg_view()
	{
			 
		$this->load->view('templates/header');
		$this->load->view('home/reg_view');
		$this->load->view('templates/footer');
	}
}