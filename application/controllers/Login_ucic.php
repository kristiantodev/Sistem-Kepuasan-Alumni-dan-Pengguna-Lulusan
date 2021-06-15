  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ucic extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
         $this->form_validation->set_rules('username', 'Username','trim|required');
         $this->form_validation->set_rules('password', 'Password','trim|required');

         if($this->form_validation->run() == false){
          
          $this->load->view('pages-logi-ucic');
         
         }else{

            $this-> _auth();

         }
         
    }

    private function _auth(){

        $userku = $this->input->post('username');
        $passku = $this->input->post('password');
        $levelku = $this->input->post('level');

        $array = array('username' => $userku, 'level' => $levelku);
        $user_auth = $this->db->get_where('user', $array)->row_array();

        if($user_auth){
                
               if(password_verify($passku, $user_auth['password'])){

                $data = [
                'id_user' => $user_auth['id_user'],
                'username' => $user_auth['username'],
                'level' => $user_auth['level'],
                'nm_user' => $user_auth['nm_user'],
                'prodi' => $user_auth['prodi']
                ];

                $this->session->set_userdata($data);

                 if($this->session->userdata('level')=="Administrator"){
                        redirect('adm/dashboard');
                    }elseif ($this->session->userdata('level')=="Dekan"){
                        redirect('dk/dashboard');
                         }elseif ($this->session->userdata('level')=="Kaprodi"){
                        redirect('kaprodi/dashboard');
                         }elseif ($this->session->userdata('level')=="Kemahasiswaan"){
                        redirect('adm_prodi/dashboard');
                         }

               }else{

                $this->session->set_flashdata('pesan', 'Password yang Anda Masukan Salah !!');
                redirect('login_ucic/');

               }


        }else{
            $this->session->set_flashdata('pesan', 'Username atau Level User yang Anda Masukan Salah !!');
            redirect('login_ucic/');
        }

    }
    
    
        
    public function logout()
    {
         $this->session->sess_destroy();
         redirect('login_ucic/');
    }

}
