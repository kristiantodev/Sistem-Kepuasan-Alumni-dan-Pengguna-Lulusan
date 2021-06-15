  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Indikator extends My_Controller {

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

         $data=array(
            "indikatorku"=>$this->db->get('indikator')->result(),
        );
		 $this->Mypage2('isi/adm_prodi/indikator',$data);
	}


	
}
