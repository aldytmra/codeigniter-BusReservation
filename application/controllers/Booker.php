<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booker extends CI_Controller {

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
		$this->load->model('Model_bus');
		$this->load->model('Model_booker');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
	
	public function booking() {        //print_r($_POST) ; exit(); 
		if(isset($_POST['bookNow'])){
			// $paket = $this->input->post();
			// //kita bisa cetak ada variabel apa saja yang dikirimkan form
			// echo '<pre>';
			// print_r($paket);
			// echo '</pre>';
			//kita urai masing-masing variabel post
			$data['date'] = $this->input->post('date');
			//dan seterusnya 
		}
        $this->template->load('template','booker/booking',$data);
	}
	

    public function index(){
        //cek apakah ada tombol btnKirim
		
		if(isset($_POST['submit'])){
			// $paket = $this->input->post();
			// //kita bisa cetak ada variabel apa saja yang dikirimkan form
			// echo '<pre>';
			// print_r($paket);
			// echo '</pre>';
			//kita urai masing-masing variabel post
			$journeyFrom= $this->input->post('journeyFrom');
			$journeyTo	= $this->input->post('journeyTo');
			$data['date'] = $this->input->post('dateOfJourney');
			//dan seterusnya 
		}else {
			// redirect('dashboard');
		}
        $query = $this->Model_bus->searchAvailableBus($journeyFrom,$journeyTo);
		$data['availablebus'] = $query->result_array();
		$data['date'] = $this->input->post('dateOfJourney');
		$this->template->load('template','booker/availablebus', $data);
	}

	
	public function confirm(){
		

		$this->template->load('template','booker/confirm');
		
	}
	public function payment(){
		

		$this->template->load('template','booker/payment');
		
	}
	public function paymentpaper(){
		

		$this->template->load('template','booker/paymentpaper');
		
	}

	public function ticket()
	{
		$this->template->load('template','booker/ticket');
	}

	
	
}
