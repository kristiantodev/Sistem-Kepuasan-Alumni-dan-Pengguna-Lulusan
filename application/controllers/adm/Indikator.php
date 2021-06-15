  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends My_Controller {

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
            "indikatorku"=>$this->db->get('indikator')->result(),
        );
		 $this->Mypage('isi/adm/indikator',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_indikator', 'nm_indikator', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/indikator');
        }else{
            $data=array(
                "nm_indikator"=>$_POST['nm_indikator'],
                "level"=>$_POST['level']
            );
            $this->db->insert('indikator',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/indikator');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_indikator', 'id_indikator', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/indikator');
        }else{
            $data=array(
                "nm_indikator"=>$_POST['nm_indikator'],
                "level"=>$_POST['level']
            );
            $this->db->where('id_indikator', $_POST['id_indikator'] );
            $this->db->update('indikator',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/indikator');
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/indikator');
        }else{
            $this->db->where('id_indikator', $id);
            $this->db->delete('indikator');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/indikator');
        }
    }


	
}
