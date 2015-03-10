<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
        $data['content']='includes/index';
  		$this->load->view('templates/header',$data);
  		$this->load->view('templates/nav',$data);
  		$this->load->view('templates/body',$data);
  		$this->load->view('templates/footer',$data);
  	}

	public function gallery(){
		$data['content']='includes/gallery';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav',$data);
  		$this->load->view('templates/body',$data);
  		$this->load->view('templates/footer',$data);
	}

	public function login(){
		$data['content']='includes/login';
		$this->load->view('templates/header',$data);
  		$this->load->view('templates/body',$data);
	}
}