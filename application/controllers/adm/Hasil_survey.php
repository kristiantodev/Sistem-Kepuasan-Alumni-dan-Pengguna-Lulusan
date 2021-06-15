  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_survey extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}



	public function alumni()
	{
      $this->db->select('*');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('indikator.level', 'Alumni');
      $this->db->from('pertanyaan');
      $query = $this->db->get();

      $this->db->select('*');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('indikator.level', "Alumni");
      $this->db->from('kep_alumni');
      $query2 = $this->db->get();
      
      $this->db->select('*');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->where('periode.isactive', 1);
      $this->db->from('kep_alumni');
      $query3 = $this->db->get();

      $this->db->select('indikator.nm_indikator');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('indikator.level', "Alumni");
      $this->db->from('kep_alumni');
      $this->db->group_by("indikator.id_indikator");
      $query4 = $this->db->get();

      $grafik = $this->db->query("SELECT c.nm_prodi, COUNT(*) as total 
         FROM alumni as a, kep_alumni as b, prodi as c, periode as d where a.id_user = b.id_user 
         AND a.id_prodi = c.id_prodi AND b.id_periode = d.id_periode
         AND d.isactive = 1 GROUP BY c.id_prodi");

      $lap = $this->db->query("SELECT f.nm_indikator, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_alumni as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f
         where a.id_user = b.id_user AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator
         AND c.isactive = 1 AND f.level ='Alumni' GROUP BY f.id_indikator");


         $data=array(
            "pertanyaanku"=>$query->result(),
            "hasilku"=>$query2->result(),
            "isiku"=>$query3->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "grafikku"=>$grafik->result(),
            "lapku"=>$lap->result(),
            "grafikku2"=>$query4->result()
        );

		 $this->Mypage('isi/adm/hasil_survey_alum',$data);
	}

public function stakeholder()
  {
      
      $this->db->select('*');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.isactive', 1);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->from('kep_plulusan');
      $query2 = $this->db->get();
      
      $this->db->select('indikator.nm_indikator');
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
      $this->db->from('kep_plulusan');
      $this->db->group_by("indikator.id_indikator");
      $query4 = $this->db->get();

      $this->db->select('*');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('instansi', 'alumni.id_instansi = instansi.id_instansi');
      $this->db->where('periode.isactive', 1);
      $this->db->from('kep_plulusan');
      $query3 = $this->db->get();

      $grafik = $this->db->query("SELECT c.nm_instansi, COUNT(*) as total 
         FROM alumni as a, kep_plulusan as b, instansi as c, periode as d where a.nim = b.nim 
         AND a.id_instansi = c.id_instansi AND b.id_periode = d.id_periode
         AND d.isactive = 1 AND b.status_isi = 1 GROUP BY c.id_instansi");

      $grafik2 = $this->db->query("SELECT c.nm_instansi, COUNT(*) as total 
         FROM alumni as a, kep_plulusan as b, instansi as c, periode as d where a.nim = b.nim 
         AND a.id_instansi = c.id_instansi AND b.id_periode = d.id_periode
         AND d.isactive = 1 AND b.status_isi = 2 GROUP BY c.id_instansi");

      $lap = $this->db->query("SELECT f.nm_indikator, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_plulusan as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f
         where a.nim = b.nim AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator
         AND c.isactive = 1 AND a.status_isi = 1 AND f.level ='Stakeholder' GROUP BY f.id_indikator");


         $data=array(
            "hasilku"=>$query2->result(),
            "isiku"=>$query3->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "grafikku"=>$grafik->result(),
            "grafikku3"=>$grafik2->result(),
            "lapku"=>$lap->result(),
            "grafikku2"=>$query4->result(),
        );

     $this->Mypage('isi/adm/hasil_survey_stake',$data);
  }


   public function alumni_cari()
   {
      $id = $_POST['id_periode'];
     
      $this->db->select('*');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('indikator.level', 'Alumni');
      $this->db->from('pertanyaan');
      $query = $this->db->get();

      $this->db->select('*');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $id);
      $this->db->where('indikator.level', "Alumni");
      $this->db->from('kep_alumni');
      $query2 = $this->db->get();
      
      $this->db->select('*');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->where('periode.id_periode', $id);
      $this->db->from('kep_alumni');
      $query3 = $this->db->get();

      $this->db->select('indikator.nm_indikator');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $id);
      $this->db->where('indikator.level', "Alumni");
      $this->db->from('kep_alumni');
      $this->db->group_by("indikator.id_indikator");
      $query4 = $this->db->get();

      $grafik = $this->db->query("SELECT c.nm_prodi, COUNT(*) as total 
         FROM alumni as a, kep_alumni as b, prodi as c, periode as d where a.id_user = b.id_user 
         AND a.id_prodi = c.id_prodi AND b.id_periode = d.id_periode
         AND d.id_periode = $id GROUP BY c.id_prodi");

      $lap = $this->db->query("SELECT f.nm_indikator, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_alumni as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f
         where a.id_user = b.id_user AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator
         AND c.id_periode = $id AND f.level ='Alumni' GROUP BY f.id_indikator");


         $data=array(
            "pertanyaanku"=>$query->result(),
            "hasilku"=>$query2->result(),
            "isiku"=>$query3->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['id_periode'=> $_POST['id_periode']])->row(),
            "grafikku"=>$grafik->result(),
            "lapku"=>$lap->result(),
            "grafikku2"=>$query4->result(),
            "idku" => $id
        );

       $this->Mypage('isi/adm/hasil_survey_alum_cari',$data);
   }

	
  public function stakeholder_cari()
  {
      $id = $_POST['id_periode'];
      $this->db->select('*');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $id);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->from('kep_plulusan');
      $query2 = $this->db->get();
      
      $this->db->select('indikator.nm_indikator');
      $this->db->select_avg('detail_respon.skor_kinerja','rata2_kinerja');
      $this->db->select_avg('detail_respon.skor_harapan','rata2_harapan');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $id);
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->from('kep_plulusan');
      $this->db->group_by("indikator.id_indikator");
      $query4 = $this->db->get();

      $this->db->select('*');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('instansi', 'alumni.id_instansi = instansi.id_instansi');
      $this->db->where('periode.id_periode', $id);
      $this->db->from('kep_plulusan');
      $query3 = $this->db->get();

      $grafik = $this->db->query("SELECT c.nm_instansi, COUNT(*) as total 
         FROM alumni as a, kep_plulusan as b, instansi as c, periode as d where a.nim = b.nim 
         AND a.id_instansi = c.id_instansi AND b.id_periode = d.id_periode
         AND d.id_periode = $id AND b.status_isi = 1 GROUP BY c.id_instansi");

      $grafik2 = $this->db->query("SELECT c.nm_instansi, COUNT(*) as total 
         FROM alumni as a, kep_plulusan as b, instansi as c, periode as d where a.nim = b.nim 
         AND a.id_instansi = c.id_instansi AND b.id_periode = d.id_periode
         AND d.id_periode = $id AND b.status_isi = 2 GROUP BY c.id_instansi");

      $lap = $this->db->query("SELECT f.nm_indikator, 
         SUM(IF(d.skor_kinerja=4, 1, 0)) as aa,
         SUM(IF(d.skor_kinerja=3, 1, 0)) as ab,
         SUM(IF(d.skor_kinerja=2, 1, 0)) as ac,
         SUM(IF(d.skor_kinerja=1, 1, 0)) as ad,

         COUNT(*) as total 
         FROM kep_plulusan as a, alumni as b, periode as c, detail_respon as d, pertanyaan as e, indikator as f
         where a.nim = b.nim AND a.id_periode = c.id_periode AND a.id_kep = d.id_kep AND
         e.id_pertanyaan = d.id_pertanyaan AND e.id_indikator = f.id_indikator
         AND c.id_periode = $id AND a.status_isi = 1 AND f.level ='Stakeholder' GROUP BY f.id_indikator");


         $data=array(
            "hasilku"=>$query2->result(),
            "isiku"=>$query3->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "periodeku"=>$this->db->get('periode')->result(),
            "periodeku2" => $this->db->get_where('periode', ['id_periode'=> $id])->row(),
            "grafikku"=>$grafik->result(),
            "grafikku3"=>$grafik2->result(),
            "lapku"=>$lap->result(),
            "grafikku2"=>$query4->result(),
            "id_ku"=>$id,
        );

     $this->Mypage('isi/adm/hasil_survey_stake_cari',$data);
  }    


	
}
