  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Kemahasiswaan"){
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
		 $this->Mypage2('isi/adm_prodi/pertanyaan',$data);
	}


	
}
