<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read2('culture_pedia','culture_img')
		);
		$this->load->view('index',$data);
	}

	public function admin(){
                $this->load->view('admin');
        }
        
	public function load_data(){
		$this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read('culture_img')
		);
		$this->load->view('cpdata',$data);
	}

	public function send_email(){
		$from_email = "dimasadyaksa@gmail.com"; 
                $to_email = $this->input->post('email'); 

                 $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => $from_email,
                        'smtp_pass' => '********',
                        'mailtype'  => 'html', 
                        'charset'   => 'iso-8859-1'
                );

         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'dimasadyaksa'); 
         $this->email->to($to_email);
         $this->email->subject('Test Pengiriman Email'); 
         $this->email->message('Coba mengirim Email dengan CodeIgniter.'); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                $this->load->view('home'); 
         } 
	}
}
