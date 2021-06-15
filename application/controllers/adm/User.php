  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends My_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->library('form_validation');
        $this->load->library('session');
        if($this->session->userdata('level')!="Administrator"){
            $this->session->set_flashdata('pesan', 'Silahkan LOGIN Terlebih Dahulu Untuk Mengakses Halaman Tersebut !!');
            redirect(site_url('login/'));
        }
	}

	public function index()
	{
         $this->db->select('*');
         $this->db->where('level !=', 'Alumni');
         $this->db->where('level !=', 'Stakeholder');
         $this->db->from('user');
         $query = $this->db->get();
         $data=array(
            "userku"=>$query->result(),
            "prodiku"=>$this->db->get('prodi')->result(),
        );
		 $this->Mypage('isi/adm/user',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_user', 'nm_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/user');
        }else{
            $idku = uniqid();
            $pass = password_hash ($_POST['password'], PASSWORD_DEFAULT);
            $data=array(
                "id_user" => $idku,
                "username"=>$_POST['username'],
                "password"=>$pass,
                "prodi"=>$_POST['prodi'],
                "nm_user"=>$_POST['nm_user'],
                "level"=>$_POST['level'],
                "foto"=>"default.jpg"
            );
            $this->db->insert('user',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/user');
        }
    }
    

    public function edit()
    {
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/user');
        }else{
            $data=array(
                "nm_user"=>$_POST['nm_user'],
                "alamat"=>$_POST['alamat']
            );
            $this->db->where('id_user', $_POST['id_user'] );
            $this->db->update('user',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/user');
        }
    }


public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/alumni');
        }else{
            $this->db->where('id_user', $id);
            $this->db->delete('user');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/user');
        }
    }


	
}
