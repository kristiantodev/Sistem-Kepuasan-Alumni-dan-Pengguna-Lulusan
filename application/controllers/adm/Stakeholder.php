  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stakeholder extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model("User_model");
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
      $this->db->select('*');
      $this->db->join('instansi', 'stakeholder.id_instansi = instansi.id_instansi');
      $this->db->from('stakeholder');
      $query = $this->db->get();
      $this->db->select('*');
      $this->db->join('instansi', 'alumni.id_instansi = instansi.id_instansi');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->join('user', 'alumni.id_user = user.id_user');
      $this->db->from('alumni');
      $query2 = $this->db->get();
      $this->db->select('*');
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('stakeholder', 'kep_plulusan.id_user = stakeholder.id_user');
      $this->db->from('kep_plulusan');
      $this->db->order_by('kep_plulusan.id_periode', 'ASC');
      $query3 = $this->db->get();
         $data=array(
            "instansiku"=>$this->db->get('instansi')->result(),
            "alumku"=>$query2->result(),
            "listalum"=>$query3->result(),
            "stakeholderku"=>$query->result(),
            "periodeku" => $this->db->get_where('periode', ['isactive'=> 1])->row()
        );
		 $this->Mypage('isi/adm/stakeholder',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/stakeholder');
        }else{
            $idku = uniqid();
            $username = $_POST['email'];
            $pass = password_hash ("abc", PASSWORD_DEFAULT);
            $foto = "default.jpg";
            $level ="Stakeholder";
            $data=array(
                "id_user"=>$idku,
                "nama_p"=>$_POST['nama'],
                "jabatan_p"=>$_POST['jabatan'],
                "email"=>$_POST['email'],
                "id_instansi"=>$_POST['id_instansi']
            );
            $this->db->insert('stakeholder',$data);
            $user = $this->User_model;
            $user->saveuser($idku,$username,$pass, $level, $foto);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/stakeholder');
        }
    }

public function savealum(){
    $check = $this->input->post('pilihanku');
    for ($i=0; $i < sizeof($check); $i++) { 
            $data = array(
                    'id_user' => $_POST['id_user'],
                    'id_periode' => $_POST['id_periode'],
                    'nim'=> $check[$i],
                    'kritik_saran' => "",
                    'status_isi' => 2
                );
             $this->db->insert('kep_plulusan',$data);
          }

            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/stakeholder');
  }

    public function edit()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/stakeholder');
        }else{
            $data=array(
                "id_user"=>$_POST['id_user'],
                "nama_p"=>$_POST['nama'],
                "jabatan_p"=>$_POST['jabatan'],
                "email"=>$_POST['email'],
                "id_instansi"=>$_POST['id_instansi']
            );
            $this->db->where('id_user', $_POST['id_user'] );
            $this->db->update('stakeholder',$data);
            $user = $this->User_model;
            $user->edituser($_POST['id_user'], $_POST['email']);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/stakeholder');
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/stakeholder');
        }else{
            $this->db->where('id_user', $id);
            $this->db->delete('stakeholder');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/stakeholder');
        }
    }

    public function kirim_email()
    {
        $this->form_validation->set_rules('email_penerima', 'email_penerima', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/stakeholder');
        }else{
         
         $from_email = "bindaeyo26@gmail.com"; 
         $to_email = $this->input->post('email_penerima'); 

          $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'farida150899',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Universitas CIC Cirebon'); 
         $this->email->to($to_email);
         $this->email->subject('Survei Kepuasan Pengguna Lulusan Universitas CIC'); 
         $this->email->message($this->input->post('isi')); 

         //Send mail 
         if($this->email->send()){
           $this->session->set_flashdata('sukses',"Email Berhasil Terkirim!!");
            redirect('adm/stakeholder');
         }else {  
           $this->session->set_flashdata('gagal',"Email Gagal Terkirim, Silahkan Chek dan Nyalakan Koneksi Internet Anda...");
                redirect('adm/stakeholder'); 
         } 

            
        }
    }


	
}
