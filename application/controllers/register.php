<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
      public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }
	public function index(){     
        $this->load->view('register');
	}

  public function user_exists(){
    $this->load->model('user_control');
    if($this->user_control->user_exists($_POST['username'])){
      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
      </i> Username sudah terdaftar</span></label> 
        <style type="text/css">
          #daftar{
          background-color: #a9a9a9;
        }
        </style>
        <script>
          document.getElementById("daftar").disabled = true;
        </script>
      ';

    }else {
      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username Tersedia</span></label>
        <style type="text/css">
          #daftar{
          background-color: #3c8dbc;
        }
        </style>
        <script>
          document.getElementById("daftar").disabled = false;
        </script>
      ';
    }
  }
        
  public function form(){
    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('nama-lengkap', 'Nama Lengkap', 'required',
                        array('required' => '<p style="color: red;" > Masukkan %s! </p>')
    );

    $this->form_validation->set_rules('username', 'Username', 'required',
                array('required' => '<p style="color: red;" > Masukkan %s! </p>'));
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user_data.email]');

    $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => '<p style="color: red;" > Masukkan %s! </p>')
    );

    $this->form_validation->set_rules('repeatpass', 'Ulangi password', 'required',
                        array('required' => '<p style="color: red;" > %s! </p>')
    );

    if ($this->form_validation->run() == FALSE){
      $this->load->view('register');
    }else{
      $data = array(
          'nama'=>$_POST['nama-lengkap'],
          'username'=>$_POST['username'],
          'password'=>$_POST['password'],
          'email' =>$_POST['email'],
          'rating' =>0,
          'posting_count'=>0,
          'akses'=>2
      );
      $this->load->model('postmodel');
      $this->postmodel->insert('user_data',$data);
      redirect('login','refresh');
    }
    
  }
}
