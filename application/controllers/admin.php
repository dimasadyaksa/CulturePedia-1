<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
      public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
        }
	public function index()
	{     
		$this->load->model('postmodel');
		$data = array(
			'record' => $this->postmodel->read2('culture_pedia','culture_img')
		);
            $sesiadmin = array(
              'pakaian'  => null,
              'rumah'     => null,
              'id' => null,
              'akses' => 'admin'
            );
        $this->session->set_userdata($sesiadmin);
		$this->load->view('admin',$data);
	}

      public function edit($id=null){
            $this->load->model('adm');
            if(!empty($id)){
                  
                  $data = array(
                        'record' => $this->adm->edit($id,'culture_pedia','culture_img')
                  );
            }
            $_SESSION['id']=$id;
            $this->load->view('editor-admin',$data);
      }

      public function view($id=null){
            $this->load->model('adm');
            if(!empty($id)){
                  
                  $data = array(
                        'record' => $this->adm->edit($id,'culture_pedia','culture_img')
                  );
            }
            $this->load->view('views',$data);
      }

       public function upload_pakaian(){
                $config['upload_path']          = './assets/img/pakaian/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('pakaian'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('editor-admin', $error);
                }
                else
                {
                        $this->load->model('adm');
                        $sesi = array(
                              'record'=>$this->adm->edit($_SESSION['id'],'culture_pedia','culture_img')
                        );
                        $data = array('upload_data' => $this->upload->data());
                        $_SESSION['pakaian'] = $this->upload->data('file_name'); 
                        $this->load->view('editor-admin',$sesi);
                }
        }

         public function upload_rumah(){
                $config['upload_path']          = './assets/img/rumah/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('rumah'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('editor-admin', $error);
                }
                else
                {
                        $this->load->model('adm');
                        $sesi = array(
                              'record'=>$this->adm->edit($_SESSION['id'],'culture_pedia','culture_img')
                        );
                        $data = array('upload_data' => $this->upload->data());
                        $_SESSION['rumah'] = $this->upload->data('file_name'); 
                        $this->load->view('editor-admin',$sesi);
                }
        }

	public function loadtbl(){
		$this->load->model('postmodel');
		$data = array(
			'rec' => $this->postmodel->limitedtbl('culture_pedia',5)
		);

		foreach ($data['rec'] as $row) {
			echo "<tr>";
            echo  "<td>183</td>";
            echo  "<td>";
            echo $row['nama_provinsi'];
            echo "</td>";
            echo  "<td>11-7-2014</td>";
            echo  "<td>";
            echo  "<div class='btn-group'>";
            echo   "<button type='button' class='btn btn-info'>Action</button>";
            echo   "<button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>";
            echo   "<span class='caret'></span>";
            echo   "<span class='sr-only'>Toggle Dropdown</span>";
            echo   "       </button>";
            echo   "     <ul class='dropdown-menu' role='menu'>";
            echo   "       <li><a href='#'>Action</a></li>";
            echo   "       <li><a href='#'>Another action</a></li>";
            echo   "       <li><a href='#'>Something else here</a></li>";
            echo   "       <li class='divider'></li>";
            echo   "       <li><a href='#'>Separated link</a></li>";
            echo   "     </ul>
                  </div>
                </td>
                </tr>";
			}
		
			
	}

}
