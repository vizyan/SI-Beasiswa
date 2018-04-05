<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taker extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('taker_model');
        $this->load->model('schoolarship_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->helper('url');
        $this->load->library('alert');
    }

    public function join(){

        
        $id_sc = $this->input->post('id_schoolarship');
        $data['id_schoolarship'] = $this->input->post('id_schoolarship');
        $id_user = $this->input->post('id_user');
        $data['id_user'] = $this->input->post('id_user');
        $data['gpa'] = $this->input->post('gpa');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['address'] = $this->input->post('address');

        //file upload code
        //set file upload settings 
        $config['upload_path']          = APPPATH. '../upload/berkas/'.$id_sc.'/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|rar|zip';
        $config['max_size']             = 50000;
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        if (!is_dir('./upload/berkas/'.$id_sc.'/')) {
            mkdir('./upload/berkas/'.$id_sc.'/', 0777, TRUE);
        }
        
        if ( !$this->upload->do_upload('file')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }else{
            
            //file is uploaded successfully
            //now get the file uploaded data 
            $upload_data = $this->upload->data();
            
            //get the uploaded file name
            $data['file'] = '/upload/berkas/'.$id_sc.'/'.$upload_data['file_name'];
            
            //store pic data to the db
            $re = $this->taker_model->joinSchoolarship($data);
            $name = $this->schoolarship_model->getSc($id_sc)->row();
            
            if($re==true)
            {
                $message = $this->alert->successMessage('Berhasil mendaftar beasiswa '.$name->name);
                        $this->session->set_flashdata('message', $message);
            }else
            {
                $message = $this->alert->failedMessage('Gagal mendaftar');
                        $this->session->set_flashdata('message', $message);
            }
            
            redirect('/dashboard/user/'.$id_user);
        }
    }

    public function checkSession($page){
        $data = $this->session->userdata('data_login');
        if(!($page==$data['previledge'])){
            redirect(site_url('home/'.$page));
        }
    }
}
