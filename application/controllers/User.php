<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
	public function home($cek,$nomeja,$sub_category=NULL)
	{
		$sharp = str_replace("%20","_", $sub_category);
		$url = $sub_category.'#'.$sharp;
		$id_customer = $this->session->userdata('id');
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		if ($cek == 'Makanan') {
			$urls = "index.php/ordermakanan/menu/Makanan/".$url;
		}else if($cek == 'Minuman'){
			$urls = "index.php/ordermakanan/menu/Minuman/".$url;
		}else{
			$urls = "index.php/selforder/home/".$nomeja;
		}
		$data = [
			'username' => $this->session->userdata('username'),
			'nomeja' => $this->session->userdata('nomeja'),
			'no_hp' => $this->session->userdata('no_telp'),
			's' => $sub_category,
			'ic' => $id_customer,
			'cart_count' => $this->Item_model->hitungcart($nomeja),
			'nomeja' => $nomeja,
			'total_qty' => $cart_total,
			'url' => $urls,
		];
		
		$this->load->view('user',$data);
	}
	
}
