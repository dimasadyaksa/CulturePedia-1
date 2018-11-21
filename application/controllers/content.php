<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
	       $this->load->view('index',$data);
	}
        public function load($param=NULL)
        {
                if($param=='request'){
                        $this->load->model('postmodel');
                        $post = $this->input->post();
                                $data = array('table1' => $post['table1'],
                                'password' => $post['password']);
                                $this->postmodel->insert('data_user',$data);
                                $this->load->view('main_page',$data);
                }else{
                        $this->load->view('register_pg');
                }

                $this->load->model('postmodel');
                $data = array(
                        'record' => $this->postmodel->read2('culture_pedia','culture_img')
                );
                $this->load->view('index',$data);
        }
}
