<?php
  class Registration_model extends CI_Model{
  	public function __construct(){
  		parent::__construct();
  		//$this->load->database();
  	}
  	function insert($form)
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
  	
  } 