<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->helper('url');
        $this->load->library('alert');
    }

    public function view($page = 'user')
    {
        $this->checkSession($page);
        if($page=='user')
        {
            $this->load->view('Home/user_login');
        } else if ($page=='admin')
        {
            $this->load->view('Home/admin_login');
        } else if ($page=='register')
        {
            $this->load->view('Home/provider_register');
        }
        else if ($page=='provider')
        {
            $this->load->view('Home/admin_login');
        } else {
            $this->load->view('page_404');
        }
    }

	public function login($previledge = 'user')
	{
		// load form helper and validation library
		$this->load->library('form_validation');

		// set validation rules
        if($previledge=='user'){
            $this->form_validation->set_rules('etId_user', 'NIM User', 'required');
            $this->form_validation->set_rules('etPassword', 'Password', 'required');

            if ($this->form_validation->run() == false) {
                $message = $this->alert->failedMessage('Isikan semua kolom');
                $this->session->set_flashdata('message', $message);
                redirect(site_url('home/user'));
            } else {
                $id_user = $this->input->post('etId_user');
                $password = $this->input->post('etPassword');
                $data = $this->user_model->loginUser($id_user);

                //Check user
                if($data->num_rows() > 0){
                    $user = $this->user_model->loginUser($id_user)->row();

                    if(password_verify($password, $user->password)){
                        $data_session = array(
                            'token'         => true,
                            'id_user'       => $user->id_user,
                            'name'          => $user->name,
                            'previledge'    => $previledge,
                            'email'         => $user->email,
                            'photo'          => $user->photo
                        );

                        $this->session->set_userdata('data_login', $data_session);
                        redirect(site_url('dashboard/user/'.$id_user));
                    } else {
                        $message = $this->alert->failedMessage('Password salah');
                        $this->session->set_flashdata('message', $message);
                        redirect(site_url('home/user'));
                    }
                } else {
                    $message = $this->alert->failedMessage('NIM tidak ditemukan');
                    $this->session->set_flashdata('message', $message);
                    redirect(site_url('home/user'));
                }
            }
        } else {
            $this->form_validation->set_rules('etUsername', 'Username', 'required');
            $this->form_validation->set_rules('etPassword', 'Password', 'required');

            if ($this->form_validation->run() == false) {
                $message = $this->alert->failedMessage('Isikan semua kolom');
                $this->session->set_flashdata('message', $message);
                redirect(site_url('home/admin'));
            } else {
                $username = $this->input->post('etUsername');
                $password = $this->input->post('etPassword');

                if($username=='admin'){
                    $data = $this->user_model->loginAdmin($username);
                    $user = $data->row();
                    $id_admin = $user->id_admin;
                } else {
                    $data = $this->user_model->loginProvider($username);
                    $user = $data->row();
                    $id_admin = $user->id_provider;
                }

                //Check user
                if($data->num_rows() > 0){
                    $user = $data->row();

                    if($user->status=='no'){
                        $message = $this->alert->failedMessage('Belum diverifikasi');
                        $this->session->set_flashdata('message', $message);
                        redirect(site_url('home/admin'));
                    } else {
                        if(password_verify($password, $user->password)){
                            $data_session = array(
                                'token'         => true,
                                'id_user'       => $id_admin,
                                'username'      => $user->username,
                                'name'          => $user->name,
                                'previledge'    => $user->previledge,
                                'email'         => $user->email,
                                'photo'          => $user->photo
                            );

                            $this->session->set_userdata('data_login', $data_session);
                            if($user->username=='admin'){
                                redirect(site_url('dashboard/admin/'.$id_admin));
                            } else {
                                redirect(site_url('dashboard/provider/'.$id_admin));
                            }
                        } else {
                            $message = $this->alert->failedMessage('Password salah');
                            $this->session->set_flashdata('message', $message);
                            redirect(site_url('home/admin'));
                        }
                    }

                } else {
                    $message = $this->alert->failedMessage('Username tidak ditemukan');
                    $this->session->set_flashdata('message', $message);
                    redirect(site_url('home/admin'));
                }
            }
        }

    }

    public function checkVerif($data, $id_admin){

    }

    public function register()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('etUsername', 'Username', 'required');
        $this->form_validation->set_rules('etPassword', 'Password', 'required');
        $this->form_validation->set_rules('etEmail', 'Email', 'required');
        $this->form_validation->set_rules('etName', 'Name', 'required');
        $this->form_validation->set_rules('etAddress', 'Address', 'required');
        $this->form_validation->set_rules('etPhone', 'Phone', 'required');
        $this->form_validation->set_rules('etRetypePassword', 'Retype Password', 'required|matches[etPassword]');

        if ($this->form_validation->run() == false) {
            $message = $this->alert->failedMessage('Isikan semua kolom');
            $this->session->set_flashdata('message', $message);
            redirect(site_url('home/register'));
        } else {
            $username = $this->input->post('etUsername');
		    $password = $this->input->post('etPassword');
		    $email = $this->input->post('etEmail');
            $name = $this->input->post('etName');
            $address = $this->input->post('etAddress');
            $phone = $this->input->post('etPhone');

            $passwd = $this->hashPassword($password);

            $data = array(
                'username' => $username,
                'password' => $passwd,
                'email' => $email,
                'name' => $name,
                'address' => $address,
                'phone' => $phone,
                'previledge' => 'provider',
                'photo' => 'upload/school.jpg',
                'status' => 'no'
            );

            $this->user_model->addProvider($data);
            $message = $this->alert->successMessage('Selamat bergabung');
            $this->session->set_flashdata('message', $message);
            redirect(site_url('home/admin'));
        }
    }

    public function update($id){
        $email = $this->input->post('etEmail');
        $address = $this->input->post('etAddress');
        $phone = $this->input->post('etPhone');
        $religion = $this->input->post('etReligion');

        $data = array(
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'religion' => $religion
        );

        $this->user_model->updateUser($id, $data);
        redirect(site_url('profile/user/'.$id));
    }

    private function hashPassword($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkSession($page){
        if($this->session->userdata('data_login')!=NULL){
            $data = $this->session->userdata('data_login');
            redirect(site_url('dashboard/'.$data['previledge'].'/'.$data['id_user']));
        }
    }

    public function download($path = NULL, $file = NULL){
        $this->load->helper('download');
        force_download($path.'/'.$file, null);
    }

    public function logout(){
        $this->session->sess_destroy();
	    redirect(site_url('home/user'));
    }
}
