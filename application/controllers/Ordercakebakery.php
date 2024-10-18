<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordercakebakery extends CI_Controller {

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
			$this->load->view('ordermakanan',$data);
		
	}
	public function menu($tipe,$sub_category)
	{
		$this->session->unset_userdata('notfound');
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$data['item'] = $this->Item_model->getData($tipe,$sub_category);
		$data['promo'] = $this->Item_model->getPromo($sub_category);
		$data['sub'] = $this->Item_model->sub_categoryCakeBakery();
		//$data['option'] = $this->Item_model->option();
		$data['s'] = $sub_category;
		$data['ic'] = $id_customer;
		
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
		// $data['total_qty'] = $cart_total;
		// $id_customer = $this->session->userdata('id');
		// $q1 = "select * from sh_t_transactions where id_customer = '".$id_customer."' limit 1";
		// 	$trans = $this->db->query($q1)->row();
		// 	$notrans = $trans->id;
		// $wh = "id_trans = '".$notrans."' and left(created_date,10) = left(sysdate(),10)";
		// $co = $this->db
  // 			->where($wh)
  // 			->get('sh_t_transaction_details')
  // 			->num_rows();
  // 		$data['co'] = $co;
		if ($tipe == "CAKE%20DAN%20BAKERY") {
			$this->load->view('ordercakebakery',$data);
		}else{
			$this->load->view('ordermakanan',$data);
		}
		
	}
	public function menumakanan($tipe,$sub_category)
	{
		
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$data['item'] = $this->Item_model->getData($tipe,$sub_category);
		$data['sub'] = $this->Item_model->sub_category();
		//$data['option'] = $this->Item_model->option();
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

			$this->load->view('menu/makanan',$data);
		
	}
	public function option_list($item_code) {
		
	$option = $this->Item_model->option($item_code);
	$html = "<select id='item_option' name='item_option'>";
	$html .= "<option value=''>--Option--</option>";
	foreach($option as $o){
		$html .= "<option value='".$o->description."'>".$o->description."</option>";
	}
	$html .= "</select>";
	return $html;
}
	public function subcreate($nomeja,$cek,$sub=NULL)
	{
		$uc = $this->session->userdata('username');
		$id_customer = $this->session->userdata('id');
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
  		$notrans = $this->db->order_by('id',"desc")->where('id_customer',$id_customer)
  			->limit(1)
  			->get('sh_t_transactions')
  			->row('id');
		$data['order_bill'] = $this->Item_model->order_bill_co($cabang,$notrans);
		$data['total'] = $this->Item_model->totalSubOrder($uc);
		$data['item'] = $this->Item_model->getDataSubOrder($uc);
		$data['no_meja'] = $this->session->userdata('nomeja');
		$data['cek'] = $cek;
		$data['sub'] = $sub;
		
		$this->load->view('ordermakanan_view',$data);

	}
	public function batal()
	{
		$ic = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$this->db->where('id_customer',$ic);
    	$this->db->delete('sh_t_sub_transactions');
    	redirect('ordermakanan/menu/Makanan/ayam/'.$nomeja);
	}
	public function search()
	{
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$keyword = $this->input->post('keyword');
		$data['s'] = 'Soup';
		$data['key'] = $keyword;
		$data['item'] = $this->Item_model->get_keyword($keyword);
		$data['sub'] = $this->Item_model->sub_category();
		$data['nomeja'] = $this->session->userdata('nomeja');
		$data['cart_count'] = $this->Item_model->hitungcart($nomeja);
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		$data_count = $this->Item_model->get_keyword($keyword);
		if ($data_count == NULL) {
			$this->session->set_flashdata('notfound','Not Found');
		}
		
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$data['total_qty'] = $cart_total;
		$this->load->view('ordermakanan',$data);
	}
	public function create()
	{
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$qty = $this->input->post('qty');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$harga = $this->input->post('harga');
		$item_code = $this->input->post('no');
		$nomeja = $this->session->userdata('nomeja');
		
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
				redirect('ordermakanan/subcreate/'.$nomeja);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}

		
	}

	public function orderqty() 
	{
		$table = $this->session->userdata('nomeja');
		$uc = $this->session->userdata('username');
		$ic = $this->session->userdata('id');
		$post = $this->input->post();
		$trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $ic))->row();
		if($post['tipe']=='plus' && $post['item_code'] != ''){
			$cek_count = $this->Item_model->get_cart($ic,$table,$post['item_code'],$post['uoi'])->num_rows();
			if($cek_count > 0){
				$cek_cart = $this->Item_model->get_cart($ic,$table,$post['item_code'],$post['uoi'])->row();
				if ($post['need_stock'] == 1) {
					if ($cek_cart->qty >= $post['stock']) {
						$aqty = $cek_cart->qty;
						$cek = True;
					}else{
						$aqty = $cek_cart->qty+1;
						$cek = False;
					}
				}else{
					$aqty = $cek_cart->qty+1;
					$cek = False;
				}
					
				$pesan = $post['extra_notes'];
				if($pesan != ''){
					$data = [
						'qty' => $aqty,
						'extra_notes' => $post['extra_notes'],
						'user_order_id' => $this->session->userdata('user_order_id'),
					];
				}else{
					$data = [
						'qty' => $aqty,
						'user_order_id' => $this->session->userdata('user_order_id'),
					];	
				}
				
				$this->Item_model->save('sh_cart',$data, ['id'=>$cek_cart->id]);
				$cart_count = $this->Item_model->hitungcart($table);
				$carts = $this->Item_model->cart_count($ic,$table)->num_rows();
				if($carts > 0){
					$cart = $this->Item_model->cart_count($ic,$table)->row();	
					$total_qty = $cart->total_qty;
				}else{
					$total_qty = 0;
				}

				$notif = "Food Stocks Are Not Fulfilled";

				
				echo json_encode(array('status'=> True,'new_qty'=> $aqty,'pesan'=>$pesan,'cart_count'=>(int)$cart_count,'total_qty'=>(int)$total_qty,'notif' => $notif,'cek'=>$cek));
			}else{

				$pesan = $post['extra_notes'];
				$promo = $this->Item_model->getPromo($post['sub_category_so']);
				$diskon = ($post['unit_price'] * $promo->promo_value)/100;
				$upd = $post['unit_price'] - 2000;
				$data = [
					'item_code' => $post['item_code'],
					'id_trans' => $trans->id,
					'id_customer' => $ic,
					'qty' => 1,
					'cabang' => $trans->cabang,
					'unit_price' => $post['unit_price'],
					'unit_price_disc' => $post['unit_price'],
					'description' => $post['description'],
					'entry_by' => $this->session->userdata('username'),
					'id_table' => $table,
					'extra_notes' => $post['extra_notes'],
					'entry_date' => date('Y-m-d H:i:s'),
					'user_order_id' => $this->session->userdata('user_order_id'),
				];
				
				$cart_id = $this->Item_model->save('sh_cart',$data);
				$cart_count = $this->Item_model->hitungcart($table);

				$carts = $this->Item_model->cart_count($ic,$table)->num_rows();
				if($carts > 0){
					$cart = $this->Item_model->cart_count($ic,$table)->row();	
					$total_qty = $cart->total_qty;
				}else{
					$total_qty = 0;
				}
				
				if($cart_id){
					echo json_encode(array('status'=> True,'new_qty'=> 1,'pesan'=>$pesan,'cart_count'=>(int)$cart_count,'total_qty'=>(int)$total_qty));	
				}
			}
		}else if($post['tipe']=='minus' && $post['item_code'] != ''){
			$cek_count = $this->Item_model->get_cart($ic,$table,$post['item_code'],$post['uoi'])->num_rows();
			if($cek_count > 0){
				$cek_cart = $this->Item_model->get_cart($ic,$table,$post['item_code'],$post['uoi'])->row();
				if($cek_cart->qty == 1){
					$this->db->delete('sh_cart',['id'=>$cek_cart->id]);
					$cart_count = $this->Item_model->hitungcart($table);
					$carts = $this->Item_model->cart_count($ic,$table)->num_rows();
					if($carts > 0){
						$cart = $this->Item_model->cart_count($ic,$table)->row();	
						$total_qty = $cart->total_qty;
					}else{
						$total_qty = 0;
					}
					echo json_encode(array('status'=> True,'new_qty'=> 0,'pesan'=>'','cart_count'=>(int)$cart_count,'total_qty'=>(int)$total_qty));
				}else{
					$pesan = $post['extra_notes'];
					$data = [
						'qty' => ($cek_cart->qty-1),
					];
					$this->Item_model->save('sh_cart',$data, ['id'=>$cek_cart->id]);
					$cart_count = $this->Item_model->hitungcart($table);
					$carts = $this->Item_model->cart_count($ic,$table)->num_rows();
					if($carts > 0){
						$cart = $this->Item_model->cart_count($ic,$table)->row();	
						$total_qty = $cart->total_qty;
					}else{
						$total_qty = 0;
					}
					echo json_encode(array('status'=> True,'new_qty'=> ($cek_cart->qty-1),'pesan'=>$pesan,'cart_count'=>(int)$cart_count,'total_qty'=>(int)$total_qty));
				}
			}
		}
	}
	public function add_cart()
	{
		$id = $this->input->post('id');
		$no = $this->input->post('no'.$id);
		$nama = $this->input->post('nama'.$id);
		$harga = $this->input->post('harga'.$id);
		$qty = $this->input->post('qty'.$id);
		$pesan = $this->input->post('pesan'.$id);
		$uoi = $this->session->userdata('uoi');
		$p = "3 PAHA";
		$id_customer = $this->session->userdata('id');
		$id_trans = $this->db->get_Where('sh_t_transactions', array('id_customer'=> $id_customer))->row();
		// echo $nama;echo $harga;echo $qty;echo $pesan;exit();
		$cekdatacart = $this->Item_model->cekdatacart($no,$uoi)->row();
		// var_dump($cekdatacart);exit();
		
		$data = [
				'item_code' => $this->input->post('no'.$id),
				'id_trans' => $id_trans->id,
				'id_customer' => $this->session->userdata('id'),
				'qty' => $qty,
				'cabang' => 8,
				'unit_price' => $harga,
				'description' => $nama,
				'entry_by' => $this->session->userdata('username'),
				'id_table' => $this->session->userdata('nomeja'),
				'extra_notes' => $pesan,
				'entry_date' => date('Y-m-d'),
				'user_order_id' => $this->session->userdata('user_order_id'),
				
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

				  	$where = "left(entry_date,10) ='".$date."' and id_customer = '".$ic."' and item_code = '".$this->input->post('no'.$id)."' and user_order_id = '".$this->session->userdata('user_order_id')."'";
				  	$this->db->where($where);
	    			$result = $this->db->update('sh_cart',$dataedit);
			  	}else{
			  		$result = $this->db->insert('sh_cart',$data);
			  	}
			  }else{
			  	$result = $this->db->insert('sh_cart',$data);
			  }
			  $this->session->set_flashdata('success','Menu Added to Cart');
				redirect($_SERVER['HTTP_REFERER']);
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
		echo $qty;
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
				'user_order_id' => $this->session->userdata('user_order_id'),
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

	if ($data == NULL) {
		$this->session->set_flashdata('error','Silahkan Pilih Makanan Yang Akan Di Pesan!');
				redirect($_SERVER['HTTP_REFERER']);
	}else{
	$result = $this->db->insert_batch('sh_cart',$data);
			if ($result) {
				$this->session->set_flashdata('success','Order Menu/Paket Berhasil Di Tambahkan Ke Dalam Cart');
				redirect($_SERVER['HTTP_REFERER']);
				// $where = array('qty' => 0);
				// $this->Item_model->hapus_qty($where,'testing');
			}else{
				echo "gagal order";
			}
	}
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
	public function jmlcart(){
		$id_customer = $this->session->userdata('id');
		$nomeja = $this->session->userdata('nomeja');
		$cart_count = $this->Item_model->cart_count($id_customer,$nomeja)->num_rows();
		if($cart_count > 0){
			$cart = $this->Item_model->cart_count($id_customer,$nomeja)->row();//tambahan	
			$cart_total = $cart->total_qty;
		}else{
			$cart_total = 0;
		}
		$result['total'] = $cart_total;
		$result['msg'] = "Berhasil di refresh secara Realtime";
		echo json_encode($result);
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
		$cabang = $this->db->order_by('id',"desc")
  			->limit(1)
  			->get('sh_m_cabang')
  			->row('id');
		$nomer = 1;
		for ($i = 0; $i < count($qty); $i++) {
			if ($qty[$i] != 0) {
				$n = $nomer++ . "<br>"; 
				$data[] = [
				'id_trans' => $id_trans->id,
				'item_code' => $item_code[$i],
				'qty' => $qty[$i],
				'cabang' => $cabang,
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
