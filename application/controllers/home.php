<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
	public function index()
	{
        $title['title_of_page'] = "";
        $title['description'] = "";
        $title['keywords'] ="";
        $this->load->view('include/header', $title);
		$this->load->view('home');
        $this->load->view('include/footer');
	}
}
