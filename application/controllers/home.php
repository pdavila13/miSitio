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
		$this->load->view('templates/nav',$data);
  		$this->load->view('templates/body',$data);
  		$this->load->view('templates/footer',$data);
	}

	/*
	public function form_contact(){
		$data['content']='includes/contact';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav',$data);
  		$this->load->view('templates/body',$data);
  		$this->load->view('templates/footer',$data);
	}
	*/

	public function form_contact(){

		$this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));

		//set validation rules
        $this->form_validation->set_rules('name', 'Nombres y apellidos', 'trim|required|xss_clean|callback_alpha_space_only');
        //$this->form_validation->set_rules('phone', 'Teléfono fijo o móbil', 'trim|required');
        $this->form_validation->set_rules('email', 'Correo electrónico', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Asunto', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Mensaje', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE){
            //validation fails
            $data['content']='includes/contact';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav',$data);
	  		$this->load->view('templates/body',$data);
	  		$this->load->view('templates/footer',$data);
        } else{
            //get the form data
            $name = $this->input->post('name');
            //$phone = $this->input->post('phone');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            //set to_email id to which you want to receive mails
            $to_email = 'info@paolodavila.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'user@gmail.com';
            $config['smtp_pass'] = 'password';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Su mensaje ha sido enviado con éxito!</div>');
                redirect('index.php/home/form_contact');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Hay errores en el envío de correo! Por favor, inténtelo de nuevo más tarde</div>');
                redirect('index.php/home/form_contact');
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str){
        if (!preg_match("/^[a-zA-Z ]+$/",$str)) {
            $this->form_validation->set_message('alpha_space_only', 'El campo %s debe contener sólo letras y espacio');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}