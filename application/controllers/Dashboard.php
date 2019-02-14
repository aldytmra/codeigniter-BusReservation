<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
		parent::__construct();		
		// Just put this code in the __construct function of controller
		$this->load->model('Model_dashboard');
		$this->load->library('form_validation');
		$this->load->library('session');

    }
    
	public function login(){
		if($this->input->post()){
			$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
			$password_encrypt = md5($password);
			$cek_dashboard = $this->Model_dashboard->auth_user($username, $password_encrypt);

			if($cek_dashboard->num_rows() > 0)
			{
				$data=$cek_dashboard->row_array();
				// $this->session->set_userdata('masuk',TRUE);
						
				// 		redirect('page');
				// $_SESSION['username'] = '$username';
				if($data['privilege'] == 'Booker'){
					$akses = $this->session->set_userdata('masukbooker',TRUE);
					$this->session->set_userdata('username',$data['username']);
				    redirect('dashboard/index');
				} else {
					$akses = $this->session->set_userdata('masukadmin',TRUE);
					$this->session->set_userdata('username',$data['username']);
					redirect('dashboard/admin');
				}
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-warning">Username/password tidak valid</div>');
				redirect('index.php');
		}

		}
		
		$this->load->view('index.php');
		

    }
    
    public function index(){
		$data['journey'] = $this->Model_dashboard->getJourney()->result();
		$this->template->load('template','dashboard.php', $data);
	}
	
	public function admin() {
		$data['systemuser'] = $this->Model_dashboard->systemUser()->result();
		$this->load->view('admin.php', $data);
	}

    public function logout()
	{
		$this->session->sess_destroy();
		redirect('dashboard/login');
	}

	
}