<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cp extends CI_Controller {


	public function index()
	{
		$this->load->view();
	}

	public function beranda(){
		$this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read2('culture_pedia','culture_img')
		);
		$this->load->view('index',$data);
	}

	public function load_data(){
		$this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read('culture_img')
		);
		$this->load->view('cpdata',$data);
	}

	public function admin(){
        $this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read2('culture_pedia','culture_img')
		);
        $this->load->view('admin',$data);
    }
}
