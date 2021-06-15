  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instansi extends My_Controller {

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
         $data=array(
            "instansiku"=>$this->db->get('instansi')->result(),
        );
		 $this->Mypage('isi/adm/instansi',$data);
	}


	
      public function add()
    {
        $this->form_validation->set_rules('nm_instansi', 'nm_instansi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/instansi');
        }else{
            $data=array(
                "nm_instansi"=>$_POST['nm_instansi'],
                "alamat"=>$_POST['alamat']
            );
            $this->db->insert('instansi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('adm/instansi');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id_instansi', 'id_instansi', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('adm/instansi');
        }else{
            $data=array(
                "nm_instansi"=>$_POST['nm_instansi'],
                "alamat"=>$_POST['alamat']
            );
            $this->db->where('id_instansi', $_POST['id_instansi'] );
            $this->db->update('instansi',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('adm/instansi');
        }
    }



    public function hapus($id)
    {
        if($id==""){
            $this->session->set_flashdata('error',"Data Gagal Di Hapus");
            redirect('adm/instansi');
        }else{
            $this->db->where('id_instansi', $id);
            $this->db->delete('instansi');
            $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
            redirect('adm/instansi');
        }
    }


	
}
