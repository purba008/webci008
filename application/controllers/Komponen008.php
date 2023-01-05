<?php

class Komponen008 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKomponen008');
        
        if ($this->session->userdata('loginn') !=true){
        redirect('login/index');
    }
}
    public function index()
    {
        $data['isi'] = $this->MKomponen008->getAll();
       
       $this->load->view('komponen/index', $data);
    }
    public function tambah()
    {
        return $this->load->view('komponen/tambah');
    }
    public function proses_tambah()
    {
        $merek_008 = $this->input->post('txt_merek_008');
        $kapasitas_008 = $this->input->post('txt_kapasitas_008');
        $harga_008 = $this->input->post('txt_harga_008');
        $jenis_008 = $this->input->post('txt_jenis_008');
        

        $data_input =[
            'merek_008' => $merek_008,
            'kapasitas_008' => $kapasitas_008,
            'harga_008' => $harga_008,
            'jenis_008' => $jenis_008,
            
        ];
       
        $simpan = $this->MKomponen008->add($data_input);
        redirect('Komponen008/index');
    }
    public function hapus($id_komponen)
    {
        $this->MKomponen008->delete($id_komponen);
        redirect('Komponen008/index');
    }
    public function editing($id_komponen)
    {
        $data['isi'] = $this->MKomponen008->getOne($id_komponen);
        return $this->load->view('komponen/edit', $data);
    }
    public function proses_edit()
    {
        $id_komponen =  $this->input->post('txt_id_komponen');
        $merek_008 = $this->input->post('txt_merek_008');
        $kapasitas_008 = $this->input->post('txt_kapasitas_008');
        $harga_008 = $this->input->post('txt_harga_008');
        $jenis_008 = $this->input->post('txt_jenis_008');
        

        $data_edit =[
            'merek_008' => $merek_008,
            'kapasitas_008' => $kapasitas_008,
            'harga_008' => $harga_008,
            'jenis_008' => $jenis_008,
            
        ];
       
        $this->MKomponen008->editData($id_komponen, $data_edit);
        redirect('Komponen008/index');
    }

}