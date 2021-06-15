  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends My_Controller {

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
      $this->db->select('*');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->from('pertanyaan');
      $query = $this->db->get();
         $data=array(
            "indikatorku"=>$this->db->get('indikator')->result(),
            "pertanyaanku"=>$query->result()
        );
		 $this->Mypage('isi/adm/pertanyaan',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/pertanyaan');
        }else{
            $data=array(
                "pertanyaan"=>$_POST['pertanyaan'],
                "id_indikator"=>$_POST['id_indikator']
            );
            $this->db->insert('pertanyaan',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/pertanyaan');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_pertanyaan', 'id_pertanyaan', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/pertanyaan');
        }else{
            $data=array(
                "pertanyaan"=>$_POST['pertanyaan'],
                "id_indikator"=>$_POST['id_indikator']
            );
            $this->db->where('id_pertanyaan', $_POST['id_pertanyaan'] );
            $this->db->update('pertanyaan',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/pertanyaan');
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/pertanyaan');
        }else{
            $this->db->where('id_pertanyaan', $id);
            $this->db->delete('pertanyaan');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/pertanyaan');
        }
    }


	
}
