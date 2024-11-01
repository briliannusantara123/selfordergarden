<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderminuman extends CI_Controller {

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
	public function index($nomeja)
	{
		$notif = "";
		$id_customer = $this->session->userdata('id');
	    echo $nomeja;exit();
		//cek paket
		$paket = $this->Item_model->get_paket($nomeja);
		if($paket->tipe_paket == ''){
			$this->session->set_flashdata('error','Anda Belum Menentukan Paket,Silahkan hubungi Waitress Untuk Memilih Paket ');
			redirect('selforder');
		}

		//cek order paket
		$order_paket = $this->Item_model->get_order_paket($nomeja,$id_customer);
		if($order_paket->jml_paket == 0){
			$this->session->set_flashdata('error','Anda Belum Menentukan Paket,Silahkan hubungi Waitress Untuk Memilih Paket ');
			redirect('selforder');
		}

		//cek order kuah
		$order_kuah = $this->Item_model->get_order_kuah($nomeja,$id_customer);
		if(($paket->tipe_paket != '' && $paket->tipe_paket == 'Yakiniku Only') && ($order_kuah->jml_kuah == $order_paket->jml_paket)){
			
		}
		$data['item'] = $this->Item_model->getData();
			$this->load->view('orderminuman',$data);
		
	}
	public function menu($tipe,$sub_category)
	{
		$this->session->unset_userdata('notfoundminuman');
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$data['item'] = $this->Item_model->getData($tipe,$sub_category);
		$data['sub'] = $this->Item_model->sub_category_minuman();
		$data['s'] = $sub_category;
		$data['key'] = '';
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$data['nomeja'] = $this->session->userdata('nomeja');
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
		$data['iconfooter'] = $this->Admin_model->getIcon('footer');
		$data['color'] = $this->Admin_model->getColor();
			$this->load->view('orderminuman',$data);
		
	}
	public function detailmenu($id,$sub)
	{
		$sharp = str_replace("%20","_", $sub);
		$url = $sub.'#'.$sharp;
		$item = $this->Item_model->getDatabyID($id);
		$addon = $this->Item_model->getAddOn($item->no);
		$option = $this->Item_model->getOption($item->no);
		$nomeja = $this->session->userdata('nomeja');
		$link = 'index.php/orderminuman/menu/Minuman/'.$url;
		$linkform = 'index.php/Orderminuman/add_cart/'.$url;
		$data = [
			'item' => $item,
			'url' => $url,
			'addon' => $addon,
			'option' => $option,
			'nomeja' => $nomeja,
			'link' => $link,
			'linkform' => $linkform,
			'color' => $this->Admin_model->getColor(),
		];
		$this->load->view('detailmenu',$data);
	}
	public function menuminuman($tipe,$sub_category)
	{
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$data['item'] = $this->Item_model->getData($tipe,$sub_category);
		$data['sub'] = $this->Item_model->sub_category();
		$data['s'] = $sub_category;
		$data['ic'] = $id_customer;
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$data['nomeja'] = $this->session->userdata('nomeja');
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
			$this->load->view('menu/minuman',$data);
		
	}
	public function search()
	{
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$keyword = $this->input->post('keyword');
		// var_dump($keyword);exit();
		$data['item'] = $this->Item_model->get_keyword_minuman($keyword);
		$data['s'] = 'Smoothies';
		$data['sub'] = $this->Item_model->sub_category_minuman();
		$data['nomeja'] = $this->session->userdata('nomeja');
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		$data_count = $this->Item_model->get_keyword_minuman($keyword);
		if ($data_count == NULL) {
			$this->session->set_flashdata('notfoundminuman','Not Found');
		}
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
		$this->load->view('orderminuman',$data);
	}
	public function add_cart($sub)
	{
        $options = $_POST['options']; // Ini akan menjadi array
        foreach ($options as $option) {
        	$op = htmlspecialchars($option);
        }
        $addons = $_POST['addons']; // Ini juga akan menjadi array
        foreach ($addons as $addon) {
        	$ad = htmlspecialchars($addon);
        }
        $sharp = str_replace("%20","_", $sub);
		$url = $sub.'#'.$sharp;
		$id = $this->input->post('id');
		$no = $this->input->post('no');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('unit_price');
		$qty = $this->input->post('qty');
		$pesan = $this->input->post('notes');
		$uoi = $this->session->userdata('uoi');
		$p = "3 PAHA";
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		// echo $nama;echo $harga;echo $qty;echo $pesan;exit();
		$cekdatacart = $this->Item_model->cekdatacart($no,$uoi)->row();
		// var_dump($cekdatacart);exit();

		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
		
		$data = [
				'item_code' => $this->input->post('no'),
				'id_trans' => $id_trans->id,
				'id_customer' => $this->session->userdata('id'),
				'qty' => $qty,
				'cabang' => $cabang,
				'unit_price' => $harga,
				'description' => $nama,
				'entry_by' => $this->session->userdata('username'),
				'id_table' => $this->session->userdata('nomeja'),
				'extra_notes' => $pesan,
				'entry_date' => date('Y-m-d'),
				'user_order_id' => $this->session->userdata('user_order_id'),
				'options' => $op,
				'addons' => 0,
			];
			if ($qty == 0) {
				$this->session->set_flashdata('error','Order Gagal! Tambahkan jumlah pesan!');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
			  if ($cekdatacart) {
			  	if ($cekdatacart->extra_notes == $pesan) {
			  		$date = date('Y-m-d');
				  	$ic = $this->session->userdata('id');

				  	$dataedit = [
				  		'qty'=> $cekdatacart->qty + $qty
				  	];

				  	$where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and item_code = '".$this->input->post('no')."' and user_order_id = '".$this->session->userdata('user_order_id')."'";
				  	$this->db->where($where);
	    			$result = $this->db->update('sh_cart',$dataedit);
			  	}else{
			  		$result = $this->db->insert('sh_cart',$data);
			  	}
			  }else{
			  	$result = $this->db->insert('sh_cart',$data);
			  }
			  if ($result) {
			  	$IA = $this->Item_model->GetItemADD($ad);
		  		if ($IA) {
		  			$dataADD = [
						'item_code' => $IA->no,
						'id_trans' => $id_trans->id,
						'id_customer' => $this->session->userdata('id'),
						'qty' => 1, 
						'cabang' => $cabang,
						'unit_price' => $this->input->post('unit_price_add'),
						'description' => $IA->description,
						'entry_by' => $this->session->userdata('username'),
						'id_table' => $this->session->userdata('nomeja'),
						'extra_notes' => '',
						'entry_date' => date('Y-m-d'),
						'user_order_id' => $this->session->userdata('user_order_id'),
						'options' => '',
						'addons' => 1,
					];
					$this->db->insert('sh_cart',$dataADD);
		  		}
			  }
			  $id_customer = $this->session->userdata('id');
					$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
					$cabang = $this->db->order_by('id',"desc")
				  			->limit(1)
				  			->get('sh_m_cabang')
				  			->row('id');
				  	$ip_address = $this->input->ip_address();
				  	$cust = $this->session->userdata('username');
					$dataevent = [
						'event_type' => 'Update cart SO',
						'cabang' => $cabang,
						'id_trans' => $id_trans->id,
						'id_customer' => $this->session->userdata('id'),
						'event_date' => date('Y-m-d H:i:s'),
						'user_by' => $this->session->userdata('username'),
						'description' => 'Menambahkan item: '.$this->input->post('nama').' dengan qty: '.$this->input->post('qty'),
						'created_date' => date('Y-m-d'),
					];
					$result = $this->db->insert('sh_event_log',$dataevent);
			  $this->session->set_flashdata('success','Menu Added to Cart');
				redirect('orderminuman/menu/Minuman/'.$url);
			}
	}
	public function addcart()
	{
		$table = $this->session->userdata('nomeja');
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
	
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'item_code' => $item_code[$i],
				'id_trans' => $id_trans->id,
				'id_customer' => $id_customer,
				'qty' => $qty[$i],
				'cabang' => $cabang,
				'unit_price' => $harga[$i],
				'description' => $nama[$i],
				'entry_by' => $this->session->userdata('username'),
				'id_table' => $table,
				'extra_notes' => $pesan[$i],
				'entry_date' => date('Y-m-d'),
				'as_take_away' => $ata[$i],
				'qty_take_away' => $qta[$i],
			];
			}
			$query = "select R.* from sh_cart R where R.id_table = '$table' and where R.description = '$nama[$i]' and left(R.create_date,10) = left(sysdate(),10) limit 1";
			$sql = $this->db->query("SELECT * FROM sh_cart where description='$nama[$i]' and id_table='$table' and Left(entry_date, 10) = Left(SYSDATE(), 10) limit 1");
			$cek_data = $sql->num_rows();
			if ($cek_data > 0) {
			$this->db->update_batch('sh_cart',$data,'item_code')->where('id_table',$table)->where('id_customer',$id_customer);
			}else{
			$this->db->insert_batch('sh_cart',$data);
			}
    
	}
	// if ($data == NULL) {
	// 	$this->session->set_flashdata('error','Silahkan Pilih Minuman Yang Akan Di Pesan!');
	// 			redirect($_SERVER['HTTP_REFERER']);
	// }else{
	// $result = $this->db->insert_batch('sh_cart',$data);
	// 		if ($result) {
	// 			$this->session->set_flashdata('success','Order Menu/Paket Berhasil Di Tambahkan Ke Dalam Cart');
	// 			redirect($_SERVER['HTTP_REFERER']);
	// 			// $where = array('qty' => 0);
	// 			// $this->Item_model->hapus_qty($where,'testing');
	// 		}else{
	// 			echo "gagal order";
	// 		}
	// }
	}
	public function updatecart($id){
		$table = $this->session->userdata('nomeja');
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$qty = $this->input->post('qty');
		$ata = $this->input->post('cek');
		$qta = $this->input->post('qta');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
	
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'item_code' => $item_code[$i],
				'qty' => $qty[$i]-1,
				
			];

			
			}
			if ($qty[$i] == 1) {
				$this->db->where('item_code', $item_code[$i]);
				$this->db->where('id_table',$table);
				$this->db->where('id_customer',$id_customer);
				$this->db->where('entry_date',date('Y-m-d'));
				$this->db->delete('sh_cart');
			}else{
			$this->db->update_batch('sh_cart',$data,'item_code')->where('id_table',$table)->where('id_customer',$id_customer)->where('entry_date',date('Y-m-d'));
    		}
	}
	
	}
	public function subcreate()
	{
		$uc = $this->session->userdata('username');
		$data['total'] = $this->Item_model->totalSubOrder($uc);
		$data['item'] = $this->Item_model->getDataSubOrder($uc);
		$data['no_meja'] = $this->session->userdata('nomeja');
		
		$this->load->view('orderminuman_view',$data);

	}
	public function batal()
	{
		$ic = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$this->db->where('id_customer',$ic);
    	$this->db->delete('sh_t_sub_transactions');
    	redirect('orderminuman/menu/Minuman/Cold Drink/'.$nomeja);
	}
	public function create()
	{
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$qty = $this->input->post('qty');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'qty' => $qty[$i],
				'harga' => $harga[$i],
				'nama' => $nama[$i],
				'pesan' => $pesan[$i],
				'entry_by' => $uc,
				'id_customer' => $ic,
				'item_code' => $item_code[$i],
			];
			}
    
	}
	$result = $this->db->insert_batch('sh_t_sub_transactions',$data);
			if ($result) {
				redirect('orderminuman/subcreate/'.$nomeja);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}

		
	}
	public function order()
	{
		$table = $this->session->userdata('nomeja');
		$qty = $this->input->post('qty');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		$id_table = $this->db->get_Where('sh_rel_table', array('id_customer'=> $id_customer))->row();
		$st = $id_table->status;
		if ($st == "Dining" || $st == "Order") {
			$order_stat = 1;
		}elseif ($st == "Billing") {
			$order_stat = 2;
		}
		$today = date('Y-m-d');
		$curTime = explode(':', date('H:i:s'));
		$cekWeekEnd = date('D', strtotime($today));
		$check_promo = $this->Item_model->get_promo($today)->num_rows();
		$get_promo = $this->Item_model->get_promo($today)->row_array();
		$discount = 0;
		if($check_promo > 0){
			$item_check = $this->Item_model->get_info_item($request['item_code'],$get_promo)->num_rows();
			if($item_check > 0){
				$item_data = $this->Item_model->get_info_item($request['item_code'],$get_promo)->row_array();
				if($get_promo["promo_type"] == 'Discount'){
					if($get_promo["promo_criteria"] == 'Weekday'){ //Weekday
						if($cekWeekEnd !== "Sat" || $cekWeekEnd !== "Sun" || $cekWeekEnd !== "Sab" || $cekWeekEnd !== "Min"){
							if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
								$discount = $get_promo["promo_value"];		
							}else{
								$discount = 0;
							}
						}else{
							$discount = 0;
						}	
					}else if($get_promo["promo_criteria"] == 'Weekend'){ //Weekend
						if($cekWeekEnd === "Sat" || $cekWeekEnd === "Sun" || $cekWeekEnd === "Sab" || $cekWeekEnd === "Min"){
							if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
								$discount = $get_promo["promo_value"];		
							}else{
								$discount = 0;
							}
						}else{
							$discount = 0;
						}	
					}else{ //Full Week
						if($curTime[0] >= $get_promo["promo_from"] && $curTime[0] <= $get_promo["promo_to"]){
							$discount = $get_promo["promo_value"];		
						}else{
							$discount = 0;
						}
					}
				}else{
					$discount = 0;	
				}
			}else{
				$discount = 0;
			}
		}
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'id_trans' => $id_trans->id,
				'item_code' => $item_code[$i],
				'qty' => $qty[$i],
				'unit_price' => $harga[$i],
				'description' => $nama[$i],
				'start_time_order' => date('H:i:s'),
				'entry_by' => $this->session->userdata('username'),
				'disc' => $discount,
				'is_cancel' => 0,
				'session_item' => 0,
				'selected_table_no' => $table,
				'seat_id' => 0,
				'sort_id' => $n,
				'as_take_away' => 0,
				'qty_take_away' => 0,
				'extra_notes' => $pesan[$i],
				'checker_printed' => 1,
				'created_date' => date('Y-m-d'),
				'order_type' => $order_stat
			];
			 }
    
	}
	// var_dump($data);exit();
	$result = $this->db->insert_batch('sh_t_transaction_details',$data);
			if ($result) {
				$ic = $this->session->userdata('id');
				 $data = ['status' => 'Dining'];
				$this->db->where('id_customer',$ic);
    			$this->db->update('sh_rel_table',$data);
    			$this->db->where('id_customer',$ic);
    			$this->db->delete('sh_t_sub_transactions');
    			$this->session->set_flashdata('success','Order Menu/Paket Berhasil Di Tambahkan');
				redirect('selforder/home/'.$table);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}
	}
	
}
