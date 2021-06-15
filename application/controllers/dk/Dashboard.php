  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Dekan"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login_ucic/'));
        }
	}

	public function index()
	{
      if ($this->session->userdata('prodi') == 1) {
        $fakultasnya = "FTI";
      }else{
        $fakultasnya = "FEB";
      }

      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('prodi.fakultas', $fakultasnya);
      $this->db->from('kep_alumni');
      $query = $this->db->get();

      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('prodi.fakultas', $fakultasnya);
      $this->db->from('kep_plulusan');
      $query2 = $this->db->get();

      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->select('periode.tahun','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('indikator.level', "Alumni");
      $this->db->from('kep_alumni');
      $this->db->group_by("periode.id_periode");
      $query3 = $this->db->get();

      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->select('periode.tahun','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->from('kep_plulusan');
      $this->db->group_by("periode.id_periode");
      $query4 = $this->db->get();

         $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "prodiku" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row(),
            "alum"=>$query->row(),
            "stake"=>$query2->row(),
            "grafikku3"=>$query3->result(),
            "grafikku4"=>$query4->result()
                  );
		 $this->PageDekan('dash_dekan', $data);
	}

    
	
}
