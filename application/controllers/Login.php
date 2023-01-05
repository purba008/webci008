<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
        {
            return $this->load->view('komponen/login');
        }

        public function proses_login()
        {
            $username = $this->input->post('txtusername');
            $password = sha1($this->input->post('txtpassword'));

            $cek = $this->M_login->cek_data_user($username,$password)->num_rows();

            if ($cek == 1){
                $data_user =$this->M_login->cek_data_user($username,$password)->row_object();

                $data_session =[
                    'fullname' => $data_user-> fullname,
                    'level' => $data_user->level,
                    'loginn' => true
                ];

                $this->session->set_userdata($data_session);
                 redirect('Komponen008/index');
            } else {
                // echo 'Username atau Password Salah';
                $this->session->set_flashdata('pesan', 'Username atau Password Salah.');
                redirect('login/index');
            }
        }
        public function logout()
        {
            # code...
            $this->session->sess_destroy();
            redirect('login/index');
        }
    
}