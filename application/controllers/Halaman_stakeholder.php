  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_stakeholder extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Stakeholder"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

	}

	public function index()
	{
          $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row()
                  );
		 $this->PageStakeholder('dash_pl', $data);
	}

    public function dashboard()
    {
          $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row()
                  );
         $this->PageStakeholder('dash_pl', $data);
    }

  public function survey()
    {


         $this->db->select('*');
         $this->db->join('alumni', 'alumni.nim = kep_plulusan.nim');
         $this->db->join('user', 'alumni.nim = user.username');
         $this->db->join('periode', 'periode.id_periode = kep_plulusan.id_periode');
         $this->db->from('kep_plulusan');
         $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
         $query2 = $this->db->get();

         $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "alumku"=>$query2->result()
        );
         $this->PageStakeholder('isi/stakeholder/list', $data);
    }

    public function form_penilaian($id = null)
    {
         $data['id'] = $id;
         $this->db->select('*');
         $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
         $this->db->from('pertanyaan');
         $this->db->where('level', "Stakeholder");
         $query = $this->db->get();

         $this->db->select('*');
         $this->db->join('alumni', 'alumni.nim = kep_plulusan.nim');
         $this->db->join('user', 'alumni.nim = user.username');
         $this->db->join('periode', 'periode.id_periode = kep_plulusan.id_periode');
         $this->db->from('kep_plulusan');
         $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
         $this->db->where('kep_plulusan.id_kep', $id);
         $query2 = $this->db->get();

         $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "alumku"=>$query2->row(),
            "pertanyaanku"=>$query->result()
        );
         $this->SurveyStakeholder('isi/stakeholder/form_survey', $data);
    }



    public function survey2()
    {
         $this->db->select('*');
         $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
         $this->db->from('pertanyaan');
         $this->db->where('level', "Stakeholder");
         $query = $this->db->get();

         $this->db->select('*');
         $this->db->join('alumni', 'alumni.nim = kep_plulusan.nim');
         $this->db->join('user', 'alumni.nim = user.username');
         $this->db->join('instansi', 'alumni.id_instansi = instansi.id_instansi');
         $this->db->from('kep_plulusan');
         $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
         $this->db->where('kep_plulusan.status_isi', 2);
         $query3 = $this->db->get();

         $this->db->select('*');
         $this->db->join('alumni', 'alumni.nim = kep_plulusan.nim');
         $this->db->join('user', 'alumni.nim = user.username');
         $this->db->from('kep_plulusan');
         $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
         $query2 = $this->db->get();

         $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "pertanyaanku"=>$query->result(),
            "alumku"=>$query2->result(),
            "alumku3"=>$query3->result()
        );
         $this->SurveyStakeholder('isi/stakeholder/survey_stakeholder', $data);
    }


public function proses_survey()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('halaman_stakeholder/survey');
        }else{

            $id_kep = $_POST['id_kep'];
          

            $i=1;
            while (isset($_POST['id_pertanyaan'.$i])) {

                 $id_pertanyaan = $_POST['id_pertanyaan'.$i];
                 $skor_kinerja = $_POST['skor_kinerja'.$i];
                 $skor_harapan = $_POST['skor_harapan'.$i];

                 $data=array(
                     "id_kep"=>$id_kep,
                     "id_pertanyaan"=>$id_pertanyaan,
                     "skor_kinerja"=>$skor_kinerja,
                     "skor_harapan"=>$skor_harapan
            );
                 $this->db->insert('detail_respon',$data);
                 $i++;
            }
            $this->db->set('kritik_saran', $_POST['kritik_saran']);
            $this->db->set('status_isi', 1);
            $this->db->where('id_kep', $id_kep);
            $this->db->update('kep_plulusan');
            $this->session->set_flashdata('sukses',"Alumni selesai dinilai, Terimakasih <i class='far fa-smile '></i>");
            redirect('halaman_stakeholder/survey');
        }
    }


public function ubahpassword()
    {   
         $data["passwordku"] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
         $this->form_validation->set_rules('current_password', 'Password Lama','trim|required',
            [
             'required' => "Password Harus diisi..."
            ]);
         $this->form_validation->set_rules('pass_baru', 'Password Baru','trim|required|min_length[7]|max_length[10]|matches[pass_baru2]',
            [
             'required' => "Password Baru Harus diisi...",
             'min_length' => "Panjang Password Min. 7 Karakter...",
             'max_length' => "Panjang Password Max. 10 Karakter ...",
             'matches' => "Password Baru harus sama dengan Ulangi Password Baru..."
            ]);
         $this->form_validation->set_rules('pass_baru2', 'Password Baru Ulangi','trim|required|min_length[7]|max_length[10]|matches[pass_baru]',
            [
             'required' => "Password Baru Harus diisi...",
             'min_length' => "Panjang Password Min. 7 Karakter...",
             'max_length' => "Panjang Password Max. 10 Karakter ...",
             'matches' => "Ulangi Password Baru harus sama dengan Password Baru..."
            ]);

         if($this->form_validation->run() == false){
          $this->PageStakeholder('isi/stakeholder/ubahpassword',$data);
         }else{
            $lama = $this->input->post('current_password');
            $baru = $this->input->post('pass_baru');
            $baru2 = $this->input->post('pass_baru2');
        if(!password_verify($lama, $data['passwordku']['password'])){
              $this->session->set_flashdata('success', 'Password lama yang anda Masukan salah !! ');
              redirect(site_url('halaman_stakeholder/ubahpassword'));
            }else{
               if($lama == $baru) {
                $this->session->set_flashdata('success', 'Password Baru sama dengan Password Lama !! ');
                redirect(site_url('halaman_stakeholder/ubahpassword'));
               }else{
                $password_hash =password_hash($baru, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('user');
                $this->session->set_flashdata('successs', 'Password berhasil dirubah !! ');
                redirect(site_url('halaman_stakeholder/ubahpassword'));

               }
            }
         }            
    }


    
	
}
