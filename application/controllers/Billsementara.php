<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billsementara extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			if($this->session->userdata('username') == ""){
           		$nomeja = $this->session->userdata('nomeja');
  				redirect('login/logout/'.$nomeja);
        	}
			$this->load->model('Item_model');
			$this->load->model('Admin_model');
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
		$data['item'] = $this->Item_model->billsementara($id_customer)->result();
		$data['total'] = $this->Item_model->total($id_customer);
		$this->load->view('billsementara',$data);
	}
	public function home($nomeja)
	{
		$id_customer = $this->session->userdata('id');
		$data['sca'] = $this->Item_model->sub_category_awal();
		$data['scm'] = $this->Item_model->sub_category_minuman_awal();
		$data['sub_category'] = "ayam";
		$data['sub_category_minuman'] = "Cold Drink";
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
  		$notrans = $this->db->order_by('id',"desc")->where('id_customer',$id_customer)
  			->limit(1)
  			->get('sh_t_transactions')
  			->row('id');
  		// echo $cabang; echo "<br>";echo $notrans;exit();
		$uc = $this->session->userdata('username');
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
		$data['item'] = $this->Item_model->billsementara($id_customer)->result();
		$data['total'] = $this->Item_model->total($uc);
		$data['nomeja'] = $nomeja;
		$data['notrans'] = $notrans;
		$data['order_bill'] = $this->Item_model->order_bill($cabang,$notrans);
		$data['order_bill_line'] = $this->Item_model->order_bill_line($cabang,$notrans);
		$data['iconfooter'] = $this->Admin_model->getIcon('footer');
		$this->load->view('billsementara',$data);
	}
}
