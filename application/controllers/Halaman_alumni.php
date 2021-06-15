  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_alumni extends My_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('level')!="Alumni"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }

    }

    public function index()
    {
         $this->PageAlumni('dash_al');
    }

    public function dashboard()
    {
         $data=array(
            "instansiku"=>$this->db->get('instansi')->result(),
            "prodiku"=>$this->db->get('prodi')->result()
        );
         $this->PageAlumni('dash_al', $data);
    }

    public function riwayat_pekerjaan()
    {

      $this->db->select('*');
      $this->db->where('id_user', $this->session->userdata('id_user'));
      $this->db->from('riwayat');
      $query = $this->db->get();

         $data=array(
            "riwayatku"=>$query->result()
        );
         $this->PageAlumni('isi/alum/riwayat', $data);
    }

    public function add_riwayat()
    {
        $this->form_validation->set_rules('nm_instansi', 'nm_instansi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('halaman_alumni/riwayat_pekerjaan');
        }else{
            $data=array(
                "id_user"=>$this->session->userdata('id_user'),
                "nm_instansi"=>$_POST['nm_instansi'],
                "tgl_bekerja"=>$_POST['tgl_bekerja'],
                "tgl_keluar"=>$_POST['tgl_keluar'],
                "jabatan"=>$_POST['jabatan'],
                "kesesuaian"=>$_POST['kesesuaian'],
            );
            $this->db->insert('riwayat',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('halaman_alumni/riwayat_pekerjaan');
        }
    }

    public function hapus_riwayat($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('halaman_alumni/riwayat_pekerjaan');
        }else{
            $this->db->where('id_riwayat', $id);
            $this->db->delete('riwayat');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('halaman_alumni/riwayat_pekerjaan');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('halaman_alumni/dashboard');
        }else{
            
            
                $data=array(
                "id_user"=>$_POST['id_user'],
                "nim"=>$_POST['nim'],
                "nama"=>$_POST['nama'],
                "id_prodi"=>$_POST['id_prodi'],
                "tgl_yudisium"=>$_POST['tgl_yudisium'],
                "hp"=>$_POST['hp'],
                "email"=>$_POST['email'],
                "tgl_bekerja"=>$_POST['tgl_bekerja'],
                "id_instansi"=>$_POST['id_instansi'],
                "jabatan"=>$_POST['jabatan']
            );
            $this->db->where('id_user', $_POST['id_user'] );
            $this->db->update('alumni',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('halaman_alumni/dashboard');
           
        }
    }

    public function survey()
    {
         $this->db->select('*');
         $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
         $this->db->from('pertanyaan');
         $this->db->where('level', "Alumni");
         $query = $this->db->get();

         $data=array(
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row(),
            "pertanyaanku"=>$query->result()
        );
         $this->SurveyAlumni('isi/alum/survey_a', $data);
    }


     public function proses_survey()
    {
        $this->form_validation->set_rules('id_periode', 'id_periode', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('halaman_alumni/survey');
        }else{

            $id_kep = rand();
          

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
            $data2=array(
                     "id_kep"=>$id_kep,
                     "id_user"=>$this->session->userdata('id_user'),
                     "id_periode"=>$_POST['id_periode'],
                     "kritik_saran"=>$_POST['kritik_saran']
            );

            $this->db->insert('kep_alumni',$data2);
            $this->session->set_flashdata('sukses',"Data penilaian saudara telah terkirim, Terimakasih <i class='far fa-smile '></i>");
            redirect('halaman_alumni/survey');
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
          $this->PageAlumni('isi/alum/ubahpassword',$data);
         }else{
            $lama = $this->input->post('current_password');
            $baru = $this->input->post('pass_baru');
            $baru2 = $this->input->post('pass_baru2');
        if(!password_verify($lama, $data['passwordku']['password'])){
              $this->session->set_flashdata('success', 'Password lama yang anda Masukan salah !! ');
              redirect(site_url('halaman_alumni/ubahpassword'));
            }else{
               if($lama == $baru) {
                $this->session->set_flashdata('success', 'Password Baru sama dengan Password Lama !! ');
                redirect(site_url('halaman_alumni/ubahpassword'));
               }else{
                $password_hash =password_hash($baru, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('id_user', $this->session->userdata('id_user'));
                $this->db->update('user');
                $this->session->set_flashdata('successs', 'Password berhasil dirubah !! ');
                redirect(site_url('halaman_alumni/ubahpassword'));

               }
            }
         }            
    }



    
    
}
