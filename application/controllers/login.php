<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
      public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }
	public function index(){
		if(isset($_SESSION['state'])){
			if($_SESSION['state']=='login'){
				redirect('beranda','refresh');
			}else{
				$this->load->view('login');
			}
		}else{
			$this->load->view('login');
		}
        
	}


  	public function logging_in(){
  		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required',
        				array('required' => '<p style="color: red;" > Masukkan %s! </p>'));

        $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => '<p style="color: red;" > Masukkan %s! </p>')
         );

        if(isset($_SESSION['error'])){
        	unset($_SESSION['error']);
        }
        if ($this->form_validation->run() == FALSE){
            $this->load->view('login');
        }else{
        	$this->load->model('user_control');
			$data = array(
				'record' => $this->user_control->validasi()
			);
			$wrong = '';
			foreach ($data['record'] as $row) {
				if($row['username']==$_POST['username']&&$row['password']==$_POST['password']){
					$this->session->set_userdata('state','login');
					if($row['akses']==1){
						$this->session->set_userdata('username',$_POST['username']);
						$this->session->set_userdata('akses',1);
						redirect('admin','refresh');
					}else{
						$this->session->set_userdata('akses',2);
						$this->session->set_userdata('username',$_POST['username']);
						redirect('user','refresh');
					}

				}else if(($row['username']==$_POST['username']&&$row['password']!=$_POST['password'])||($row['username']!=$_POST['username']&&$row['password']==$_POST['password'])){
					$wrong = 'Username atau password salah!';
				}else{
					$wrong = 'Username tidak terdaftar!';		
				}
			}
			$this->session->set_flashdata('error',$wrong);
			$this->load->view('login');
         }
         

  	}

}
