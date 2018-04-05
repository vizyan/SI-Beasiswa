<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('admin_model');
        $this->load->model('schoolarship_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->helper('url');
        $this->load->library('alert');
    }

    public function view($id_admin)
    {
        $this->checkSession('admin');
        $data['detail'] = $this->admin_model->getAdById($id_admin)->result();
        $data['content']='Admin/content_detail_user';
        $data['title'] = 'Detail Penyedia Beasiswa';
        $data['active'] = '';
        $this->load->view('Admin/dashboard_main', $data);
    }

    public function manage()
    {
        $data['admin'] = $this->admin_model->select('admins');
        $data['title'] = 'Kelola Admin';
        $this->load->view('Admin/content_admin_add', $data);

    }

     public function add()
    {
            $username = $this->input->post('etUsername');
            $name = $this->input->post('etName');
            $password = $this->input->post('etPassword');
            $email = $this->input->post('etEmail');
            $passwd = $this->hashPassword($password);

            $data = array(
                'name' => $name,
                'username' => $username,
                'password' => $passwd,
                'email' => $email
            );

            $this->admin_model->addAdmin($data);
            $message = $this->alert->successMessage('Berhasil menambah admin');
            $this->session->set_flashdata('message', $message);
            redirect(site_url(''));
        }


    private function hashPassword($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }



    public function verif($id_provider)
    {

        $where=array('id_provider'=>$id_provider);
        $data = array(
            'id_provider' => $id_provider,
            'status' => "yes"
        );

        $re = $this->admin_model->update('providers', $data, $where);

        if($re==true)
        {
             $message = $this->alert->successMessage('Berhasil verif provider');
                        $this->session->set_flashdata('message', $message);
        }else
        {
            $message = $this->alert->failedMessage('Gagal verif provider');
                        $this->session->set_flashdata('message', $message);
        }
        redirect('dashboard/admin/home');
    }

    public function unverif($id_provider)
    {
        $re = $this->admin_model->delete('providers', $id_provider);

        if($re==true)
        {
             $message = $this->alert->successMessage('Berhasil menghapus admin');
                        $this->session->set_flashdata('message', $message);
        }else
        {
            $message = $this->alert->failedMessage('Gagal hapus admin');
                        $this->session->set_flashdata('message', $message);
        }
        redirect('dashboard/admin/home');
    }

    public function file_data(){
        //validate the form data

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

            //file upload code
            //set file upload settings
            $config['upload_path']          = APPPATH. '../assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }else{

                //file is uploaded successfully
                //now get the file uploaded data
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['file'] = $upload_data['file_name'];

                //store pic data to the db
                $this->schoolarship_model->store_pic_data($data);

                redirect('/');
            }
        }
    }

    public function download(){
        $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'UNIVERSITAS DIPONEGORO TEKNIK KOMPUTER 2018',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'INFO DAFTAR BEASISWA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(45,6,'NAMA BEASISWA',1,0);
        $pdf->Cell(45,6,'PENYEDIA',1,0);
        $pdf->Cell(32,6,'TANGGAL BUKA',1,0);
        $pdf->Cell(32,6,'TANGGAL TUTUP',1,0);
        $pdf->Cell(32,6,'KUOTA',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('schoolarship_provider')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(45,10,$row->schoolarships_name,1,0);
            $pdf->Cell(45,10,$row->provider_name,1,0);
            $pdf->Cell(32,10,$row->open_date,1,0);
            $pdf->Cell(32,10,$row->close_date,1,0);
            $pdf->Cell(32,10,$row->quota,1,1);
        }
        $pdf->Output();
    }

    public function checkSession($page){
        $data = $this->session->userdata('data_login');
        if(!($page==$data['previledge'])){
            redirect(site_url('home/'.$page));
        }
    }
}
