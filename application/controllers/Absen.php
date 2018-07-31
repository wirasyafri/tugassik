<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Absen extends CI_Controller {
  function __construct(){
        parent::__construct();
         $this->load->model('AbsenModel');
    }

    public function index()
    {
        $data['dataAbsen']=$this->AbsenModel->dataAbsenTot();
        $this->load->view('absen/absen',$data);

    }
    public function detail($id,$tahun)
    {   
        $data['dataAbsen']=$this->AbsenModel->getDetailAbsen($id,$tahun);
        $this->load->view('absen/absenDetail',$data);

    }
    
    public function update($id)
    {
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('alpha', 'alpha', 'trim|required');

        if($this->form_validation->run()==FALSE){
            $data['AbsenTanggal']=$this->AbsenModel->detailAbsenById($id);
            $this->load->view('Absen/UpdateAbsen',$data);
        }
        else
        {
            $idSis=$this->AbsenModel->getIdPegawaiByIdAbsen($id);
            $this->AbsenModel->updateAbsen($id);
            $peg=$idPeg[0]['id_pegawai'];
            redirect("Absen/detail/$peg",'refresh');
        }
    }

}