<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordersementara extends CI_Controller {
function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username') == ""){
           		$nomeja = $this->session->userdata('nomeja');
  				redirect('login/logout/'.$nomeja);
        	}
			$this->load->model('Item_model');
			$this->load->model('cekstatus_model');
			$this->load->helper('cookie');
			$session = $this->cekstatus_model->cek();

  		if ($session['status'] == 'Payment') {
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}else if($session['status'] == 'Cleaning'){
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/logout/'.$nomeja);
  		}
  		if($session['id_table'] != $this->session->userdata('nomeja')){
  			$nomeja = $this->session->userdata('nomeja');
  			redirect('login/log_out/'.$nomeja);
  		}
			
		}
	public function index()
	{
		$id_customer = $this->session->userdata('id');
		$data['item'] = $this->Item_model->getDataOrder($id_customer)->result();
		
		$this->load->view('ordersementara',$data);
	}
	public function home($nomeja)
	{
		$id_customer = $this->session->userdata('id');
		$data['item'] = $this->Item_model->getDataOrder($id_customer)->result();
		$data['sub_category'] = "ayam";
		$data['sub_category_minuman'] = "Cold Drink";
		$data['nomeja'] = $nomeja;
		
		$this->load->view('ordersementara',$data);
	}
	
}