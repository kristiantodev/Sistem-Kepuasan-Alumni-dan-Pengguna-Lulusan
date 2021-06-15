  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
         $data=array(
            "periodeku"=>$this->db->get('periode')->result(),
        );
		 $this->Mypage('isi/adm/periode',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_periode', 'nm_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/periode');
        }else{
            $data=array(
                "nm_periode"=>$_POST['nm_periode'],
                "tahun"=>$_POST['tahun'],
                "isactive"=>2
            );
            $this->db->insert('periode',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/periode');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('nm_periode', 'nm_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/periode');
        }else{
            $data=array(
                "nm_periode"=>$_POST['nm_periode'],
                "tahun"=>$_POST['tahun'],
                "isactive"=>$_POST['isactive']
            );
            $this->db->where('id_periode', $_POST['id_periode'] );
            $this->db->update('periode',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/periode');
        }
    }

public function aktif()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Diaktifkan");
            redirect('adm/periode');
        }else{
            
            $this->db->set('isactive', 1);
            $this->db->where('id_periode', $_POST['id_periode'] );
            $this->db->update('periode');
            $this->session->set_flashdata('sukses',"Periode Berhasil Diaktifkan");
            redirect('adm/periode');
        }
    }

    public function mati()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Matikan");
            redirect('adm/periode');
        }else{
            
            $this->db->set('isactive', 2);
            $this->db->where('id_periode', $_POST['id_periode'] );
            $this->db->update('periode');
            $this->session->set_flashdata('sukses',"Periode Berhasil Dimatikan! Silahkan Aktifkan Periode Lain.");
            redirect('adm/periode');
        }
    }

    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/periode');
        }else{
            $this->db->where('id_periode', $id);
            $this->db->delete('periode');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/periode');
        }
    }


	
}
