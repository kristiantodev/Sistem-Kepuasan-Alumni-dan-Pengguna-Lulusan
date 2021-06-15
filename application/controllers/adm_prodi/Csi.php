  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csi extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Kemahasiswaan"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login_ucic/'));
        }
	}



	public function alumni()
	{
      
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('alumni.id_prodi', $this->session->userdata('prodi'));
      $this->db->from('kep_alumni');
      $this->db->group_by("pertanyaan.id_pertanyaan");
      $query4 = $this->db->get();

    
         $data=array(
            "ratarata"=>$query4->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "myprodi" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row()
        );
		 $this->Mypage2('isi/kaprodi/csi_alum',$data);
	}


    public function stakeholder()
  {
      
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('alumni.id_prodi', $this->session->userdata('prodi'));
      $this->db->from('kep_plulusan');
      $this->db->group_by("pertanyaan.id_pertanyaan");
      $query4 = $this->db->get();

    
         $data=array(
            "ratarata"=>$query4->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "myprodi" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row()
        );
     $this->Mypage2('isi/kaprodi/csi_stakeholder',$data);
  }


	
      


	
}
