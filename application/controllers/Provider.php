<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provider extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_model');
        $this->load->model('taker_model');
        $this->load->model('schoolarship_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->helper('url');
        $this->load->library('alert');
    }

    public function view($id_admin)
    {
        $this->checkSession('admin');
        $data['detail'] = $this->Admin_model->getAdById($id_admin)->result();
        $data['content']='Admin/content_detail_user';
        $data['title'] = 'Detail Penyedia Beasiswa';
        $data['active'] = '';
        $this->load->view('Admin/dashboard_main', $data);
    }
    
    public function schoolarship($page, $id_sc){
        $this->checkSession($page);
        $data['taker'] = $this->taker_model->getTakerBySc($id_sc)->result();
        $data['content'] = 'Provider/content_sc_taker';
        $data['title'] = 'Pendaftar';
        $data['active_sc'] = '';
        $data['active_pr'] = '';
        $this->load->view('Provider/dashboard_main', $data);
    }
    
    public function addSchoolarship(){
        $this->form_validation->set_rules('name', 'description', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('upload_form');
        }else{
            
            //get the form values
            $data['name'] = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['id_provider'] = $this->input->post('id_provider');
            $data['open_date'] = $this->input->post('open_date');
            $data['close_date'] = $this->input->post('close_date');
            $data['quota'] = $this->input->post('etQuota');

            //file upload code 
            //set file upload settings 
            $config['upload_path']          = APPPATH. '../upload/persyaratan/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|zip|rar';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file')){
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['file'] = $upload_data['file_name'];

                //store pic data to the db
                $this->schoolarship_model->addSchoolarship($data);

                redirect('/');
            }
        }
    }

    public function checkSession($page){
        $data = $this->session->userdata('data_login');
        if(!($page==$data['previledge'])){
            redirect(site_url('home/'.$page));
        }
    }
}
