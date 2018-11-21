<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
      public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	public function index()
	{     
        $sesiuser = array(
              'file-pakaian'  => null,
              'file-rumah'     => null,
              'id' => null,
              'akses' => 'user'
            );
    $this->session->set_userdata($sesiuser);
		$this->load->model('user_control');
		$data = array(
			'record' => $this->user_control->user_post($_SESSION['username'],'culture_pedia','culture_img')
		);
    if(isset($_SESSION['rumah'])&&isset($_SESSION['pakaian'])&&isset($_SESSION['adat'])){
         $tambah = array(
          'pakaian',
          'rumah',
          'adat'
      );
      $this->session->unset_userdata($tambah);
    }
		$this->load->view('user',$data);
	}

    public function tambah_konten(){
      if(!isset($_SESSION['rumah'])&&!isset($_SESSION['pakaian'])&&!isset($_SESSION['adat'])){
         $tambah = array(
          'pakaian'=>'',
          'rumah'=>'',
          'adat'=>''
      );
      $this->session->set_userdata($tambah);
      }

     
      $this->load->view('tambah-konten');
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
                $config['upload_path']          = './assets/img/pakaian';
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
                $config['upload_path']          = './assets/img/rumah';
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

        public function logout(){
          $_SESSION['state'] = 'logout';
          $_SESSION['username'] = '';
          redirect('beranda','refresh');
        }

        public function tambah_pakaian(){
                $config['upload_path']          = './assets/img/pakaian';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto-pakaian'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('tambah-konten',$error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $_SESSION['file-pakaian'] = $this->upload->data('file_name'); 
                        $this->load->view('tambah-konten');
                }
        }

        public function tambah_rumah(){
                $config['upload_path']          = './assets/img/rumah';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            = 2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto-rumah'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('tambah-konten', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $_SESSION['file-rumah'] = $this->upload->data('file_name'); 
                        $this->load->view('tambah-konten');
                }
        }

        public function sesi_tambah(){
          $_SESSION['rumah'] = $_POST['rumah'];
          $_SESSION['pakaian'] = $_POST['pakaian'];
          $_SESSION['adat'] = $_POST['adat'];
        }

        public function name_exist(){
          $this->load->model('postmodel');
          $data = array(
            'record'=>$this->postmodel->read('culture_pedia')
          );

          foreach ($data['record'] as $row) {
            if($_POST['nama']==$row['nama_provinsi']){
              return true;
            }
          }
          return false;
      
    }

        public function simpan(){
         $data_culturepadia = array(
          'kode_provinsi'=> $_POST['nama_daerah'],
          'nama_provinsi'=> $_POST['nama_daerah'],
          'bahasa_daerah'=> '',
          'lagu_daerah'=>'',
          'tarian_daerah'=>'',
          'makanan_daerah'=>'',
          'rumah_adat'=>'',
          'pakaian_adat'=>$_POST['pakaian'],
          'adat_istiadat'=>$_POST['adat']
         );

          $this->load->view('user');
        }
}
