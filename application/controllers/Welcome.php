  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

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
		 $this->Mypage('x');
	}

    public function dash()
    {
         $this->Mypage('dash_adm');
    }

    public function dash2()
    {
         $this->Mypage('dash_al');
    }

    public function dash3()
    {
         $this->Mypage('dash_pl');
    }

    public function coba()
    {
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
         $this->Mypage('x2',$data);
    }

    public function tabel2()
    {
         $this->Mypage('tabel2');
    }

    public function tabel3()
    {
         $this->Mypage('tabel3');
    }

    public function survey()
    {
         $this->Mysurvey('vsurvey');
    }

    public function modalsurvey()
    {
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
         $this->Mysurvey('tabel_survey', $data);
    }

	public function log()
	{
		 $this->load->view('pages-logi');
	}

	public function tabel()
	{
         $data=array(
            "biodataku"=>$this->db->get('tblbiodata')->result(),
        );
		 $this->Mypage('tabel', $data);
	}

      public function add()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('welcome/tabel');
        }else{
            $data=array(
                "nim"=>$_POST['nim'],
                "kode"=>$_POST['kode'],
                "nama"=>$_POST['nama'],
                "alamat"=>$_POST['alamat'],
                "kota"=>$_POST['kota']
            );
            $this->db->insert('tblbiodata',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('welcome/tabel');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('nim', 'nim', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('welcome/tabel');
        }else{
            $data=array(
                "kode"=>$_POST['kode'],
                "nama"=>$_POST['nama'],
                "alamat"=>$_POST['alamat'],
                "kota"=>$_POST['kota']
            );
            $this->db->where('nim', $_POST['nim']);
            $this->db->update('tblbiodata',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
            redirect('welcome/tabel');
        }
    }


    public function proses_survey()
    {
        $this->form_validation->set_rules('i', 'i', 'required');
        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
            redirect('welcome/survey');
        }else{
            $data=array(
                "i"=>$_POST['i'],
                "p"=>$_POST['p'],
                "hasil"=>$_POST['hasil']
            );
            $this->db->insert('survey',$data);
            $this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
            redirect('welcome/survey');
        }
    }
	
}
