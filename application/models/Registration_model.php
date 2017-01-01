<?php
  class Registration_model extends CI_Model
  {
  	 function __construct()
  	 {
  		parent::__construct();
  		$this->load->database(); 
  	 }
  	public function insert($form)
  	{
  		
  	
  		$sql=$this->db->insert_string('registration_form',$form);
  		$query=$this->db->query($sql);
  		if($query == TRUE){
  			return TRUE;
  		}
  	
  		else {
  			$last_query=$this->db->last_query();
  			return $last_query;
  		}
  	
  	}
  	public function temp_id($form)
  	{
  		$query = $this->db->get_where('registration_form', array('email' => $form['email']));
        $row = $query->row();
       $data['id']=$row->temp_id;
       $this->load->view('registration/id',$data);
  	}
  	}