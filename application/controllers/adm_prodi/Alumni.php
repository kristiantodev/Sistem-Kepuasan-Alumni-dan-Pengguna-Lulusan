  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model("User_model");
        if($this->session->userdata('level')!="Kemahasiswaan"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
      $this->db->select('*');
      $this->db->join('instansi', 'alumni.id_instansi = instansi.id_instansi');
      $this->db->join('prodi', 'alumni.id_prodi = prodi.id_prodi');
      $this->db->join('user', 'alumni.id_user = user.id_user');
      $this->db->where('alumni.id_prodi', $this->session->userdata('prodi'));
      $this->db->from('alumni');
      $query = $this->db->get();

         $data=array(
            "instansiku"=>$this->db->get('instansi')->result(),
            "alumniku"=>$query->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
            "riwayatku"=>$this->db->get('riwayat')->result(),
            "myprodi" => $this->db->get_where('prodi', ['id_prodi'=> $this->session->userdata('prodi')])->row()
        );
		 $this->Mypage2('isi/adm_prodi/alumni',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm_prodi/alumni');
        }else{

            $idku = uniqid();
            $username = $_POST['nim'];
            $pass = password_hash ($_POST['nim'], PASSWORD_DEFAULT);
            $level ="Alumni";

            $config['upload_path']          = './assets/images/users/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $idku;
            $config['overwrite']            = true;
            $config['max_size']             = 2024;

            $this->load->library('upload', $config);

            $upload_image = $_FILES['foto']['name'];

            if($upload_image){

              if ($this->upload->do_upload('foto')) {

                $foto = $this->upload->data('file_name');
                $data=array(
                "id_user"=>$idku,
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
            $this->db->insert('alumni',$data);
            $user = $this->User_model;
            $user->saveuser($idku,$username,$pass, $level, $foto);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm_prodi/alumni'); 

                  }else{

                $foto = 'default.jpg';
                $data=array(
                "id_user"=>$idku,
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
            $this->db->insert('alumni',$data);
            $user = $this->User_model;
            $user->saveuser($idku,$username,$pass, $level, $foto);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm_prodi/alumni'); 

                  }

              }else{
                $foto = 'default.jpg';
                $data=array(
                "id_user"=>$idku,
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
            $this->db->insert('alumni',$data);
            $user = $this->User_model;
            $user->saveuser($idku,$username,$pass, $level, $foto);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm_prodi/alumni');
              }
            
            
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm_prodi/alumni');
        }else{
            
            
                $data=array(
                "id_user"=>$_POST['id_user'],
                "nim"=>$_POST['nim'],
                "nama"=>$_POST['nama'],
                "id_prodi"=>$this->session->userdata('prodi'),
                "tgl_yudisium"=>$_POST['tgl_yudisium'],
                "hp"=>$_POST['hp'],
                "email"=>$_POST['email'],
                "tgl_bekerja"=>$_POST['tgl_bekerja'],
                "id_instansi"=>$_POST['id_instansi'],
                "jabatan"=>$_POST['jabatan']
            );
            $this->db->where('id_user', $_POST['id_user'] );
            $this->db->update('alumni',$data);
            $user = $this->User_model;
            $user->edituser($_POST['id_user'], $_POST['nim'], $foto);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm_prodi/alumni');
           
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm_prodi/alumni');
        }else{
            $this->db->where('id_user', $id);
            $this->db->delete('alumni');
            $user = $this->User_model;
            $user->delete($id);
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm_prodi/alumni');
        }
    }


    public function kirim_email()
    {
        $this->form_validation->set_rules('email_penerima', 'email_penerima', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm_prodi/alumni');
        }else{
         
         $from_email = "bindaeyo26@gmail.com"; 
         $to_email = $this->input->post('email_penerima'); 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'bobby151515',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Universitas CIC Cirebon'); 
         $this->email->to($to_email);
         $this->email->subject('Survei Kepuasan Alumni Universitas CIC'); 
         $this->email->message($this->input->post('isi')); 

         //Send mail 
         if($this->email->send()){
            $this->session->set_flashdata('sukses',"Email Berhasil Terkirim!!");
            redirect('adm_prodi/alumni');
         }else {
                $this->session->set_flashdata('gagal',"Email Gagal Terkirim, Silahkan Chek dan Nyalakan Koneksi Internet Anda...");
                redirect('adm_prodi/alumni'); 
         } 

            
        }
    }


	
}
