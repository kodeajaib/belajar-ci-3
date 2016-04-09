<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
         $data=array(
             'title'=>'About - belajar ci3',
            'active_about'=>'active',
        );
        
        $this->load->view('element/header',$data);
		$this->load->view('v_about');
        $this->load->view('element/footer');
	}
}
