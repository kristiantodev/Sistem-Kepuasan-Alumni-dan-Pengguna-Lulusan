  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_survey extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Dekan"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login_ucic/'));
        }
	}



	public function alumni()
	{

      if ($this->session->userdata('prodi') == 1) {
        $fakultasnya = "FTI";
      }else{
        $fakultasnya = "FEB";
      }

      $this->db->select('indikator.nm_indikator');
      $this->db->select('periode.tahun');
      $this->db->select('prodi.nm_prodi');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('prodi.fakultas', $fakultasnya);
      $this->db->from('kep_alumni');
      $this->db->group_by("indikator.id_indikator");
      $this->db->group_by("periode.id_periode");
      $this->db->group_by("prodi.id_prodi");
      $query4 = $this->db->get();

      $lap = $this->db->query("SELECT g.nm_prodi, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_alumni as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f,
         prodi as g
         where a.id_user = b.id_user AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator AND b.id_prodi = g.id_prodi
         AND c.isactive = 1 AND f.level ='Alumni' AND g.fakultas = '$fakultasnya' GROUP BY g.id_prodi");


         $data=array(
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "lapku"=>$lap->result(),
            "grafikku2"=>$query4->result(),
            "myprodi" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row()
        );

		 $this->PageDekan('isi/dk/hasil_survey_alum',$data);
	}

    public function stakeholder()
  {
      
      if ($this->session->userdata('prodi') == 1) {
        $fakultasnya = "FTI";
      }else{
        $fakultasnya = "FEB";
      }

      $this->db->select('indikator.nm_indikator');
      $this->db->select('periode.tahun');
      $this->db->select('prodi.nm_prodi');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->where('periode.isactive', 1);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('prodi.fakultas', $fakultasnya);
      $this->db->from('kep_plulusan');
      $this->db->group_by("indikator.id_indikator");
      $this->db->group_by("periode.id_periode");
      $this->db->group_by("prodi.id_prodi");
      $query4 = $this->db->get();

      $this->db->select('prodi.nm_prodi');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->where('periode.isactive', 1);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('prodi.fakultas', $fakultasnya);
      $this->db->from('kep_plulusan');
      $this->db->group_by("prodi.id_prodi");
      $this->db->limit(5);
      $query = $this->db->get();


      $lap = $this->db->query("SELECT g.nm_prodi, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_plulusan as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f,
         prodi as g where a.nim = b.nim AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator AND b.id_prodi = g.id_prodi
         AND c.isactive = 1 AND a.status_isi = 1 AND f.level ='Stakeholder' AND g.fakultas = '$fakultasnya' 
         GROUP BY g.id_prodi");


         $data=array(
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "lapku"=>$lap->result(),
            "terbaikku"=>$query->result(),
            "grafikku2"=>$query4->result(),
            "myprodi" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row()
        );

     $this->PageDekan('isi/dk/hasil_survey_stake',$data);
  }

	
      


	
}
