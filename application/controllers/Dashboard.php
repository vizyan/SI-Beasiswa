<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('schoolarship_model');
        $this->load->model('user_model');
        $this->load->model('admin_model');
        $this->load->helper('url');
        $this->load->library('alert');
        $this->load->library('form_validation');

    }

    public function view($page='user', $id_pr='home')
    {
        $this->checkSession($page);
        if($page=='user')
        {
            $data['schoolarship'] = $this->schoolarship_model->getSchoolarship()->result();
            $data['title']='Daftar Beasiswa';
		    $data['content']='User/content_schoolarship';
            $data['active_sc'] = 'active';
            $data['active_pr'] = '';
            $this->load->view('User/dashboard_main', $data);
        } else if ($page=='admin')
        {
            $data['admin'] = $this->admin_model->select('providers');
            $data['title'] = 'Verifikasi Penyedia Beasiswa';
            $data['content'] ='Admin/content_admin_page';
            $data['active'] = 'active';
            $this->load->view('Admin/dashboard_main', $data);
        }else if ($page=='provider')
        {
            $data['schoolarship'] = $this->schoolarship_model->getScByProvider($id_pr)->result();
            $data['title'] = 'Daftar Beasiswa Yang Anda Kelola';
            $data['content'] ='Provider/content_sc_byme';
            $data['active_sc'] = 'active';
            $data['active_pr'] = '';
            $this->load->view('Provider/dashboard_main', $data);
        } else if ($page=='register')
        {
            $this->load->view('Home/provider_register');
        } else {
            $this->load->view('page_404');
        }
    }

    public function profile($page, $id_user)
    {
        $this->checkSession($page);
        if($page=='user'){
            $data['profile'] = $this->user_model->loginUser($id_user)->result();
        } else {
            $data['profile'] = $this->user_model->loginProvider($id_user)->result();
        }
        $data['content'] = $page.'/content_profile';
        $data['title'] = 'Profil';
        $data['active_sc'] = '';
        $data['active_pr'] = 'active';
        $this->load->view($page.'/dashboard_main', $data);
    }

    public function schoolarship($page, $id_sc){
        $this->checkSession($page);
        $data['detail'] = $this->schoolarship_model->getScById($id_sc)->result();
        $data['content'] = 'Schoolarship/content_detail_sc';
        $data['title'] = 'Rincian Beasiswa';
        $data['active_sc'] = '';
        $data['id_schoolarship'] = $id_sc;
        $data['active_pr'] = '';
        $data['active'] = '';
        $this->load->view($page.'/dashboard_main', $data);
    }

    private function hashPassword($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkSession($page){
        $data = $this->session->userdata('data_login');
        if(!($page==$data['previledge'])){
            redirect(site_url('home/'.$page));
        }
    }

    public function logout(){
        $this->session->sess_destroy();
	       redirect(site_url('home/user'));
    }
}
